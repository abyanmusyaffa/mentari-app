<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $dailyStatistics = [];

        foreach (Carbon::now()->startOfWeek()->daysUntil(Carbon::now()->endOfWeek()) as $currentDate) {
            $totalPesanan = Transaksi::where('id', 'like', 'TPS-%')->whereDate('created_at', $currentDate->toDateString())->count();
            $totalPenjualan = Transaksi::where('id', 'like', 'TPJ-%')->whereDate('created_at', $currentDate->toDateString())->count();

            $dailyStatistics[] = [
                'tanggal' => $currentDate->toDateString(),
                'hari' => $currentDate->isoFormat('dddd'),
                'total_pesanan' => $totalPesanan,
                'total_penjualan' => $totalPenjualan,
            ];
        }

        return view('dashboard', [
            'pelanggans' => Pelanggan::all(),
            'pesanans' => Pesanan::with('detail_pesanans')->whereDate('waktu', Carbon::today()->toDateString())->orderBy('waktu')->get(),
            'transaksiToday' => Transaksi::whereDate('created_at', Carbon::today()->toDateString())->count(),
            'pendingToday' => Transaksi::where('status', 'Pending')->whereDate('created_at', Carbon::today()->toDateString())->count(),
            'terjualToday' => Penjualan::whereDate('created_at', Carbon::today()->toDateString())->sum('jumlah'),
            'diambilToday' => Pesanan::whereDate('waktu', Carbon::today()->toDateString())->count(),
            'selesaiToday' => Pesanan::where('status', 'Selesai')->whereDate('updated_at', Carbon::today()->toDateString())->count(),
            'dailyStatistics' => $dailyStatistics
        ]);
    }

}
