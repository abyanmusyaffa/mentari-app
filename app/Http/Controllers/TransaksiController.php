<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TransaksiController extends Controller
{
    public function index(): View
    {
        return view('transaksi', [
            'transaksis' => Transaksi::with('pelanggans')->latest()->get(),
            'totalTransaksi' => Transaksi::all()->count(),
            'transaksiPenjualan' => Transaksi::where('id', 'like', 'TPJ-%')->count(),
            'transaksiPesanan' => Transaksi::where('id', 'like', 'TPS-%')->count(),
            'transaksiPending' => Transaksi::where('status', 'Pending')->count(),
            'transaksiLunas' => Transaksi::where('status', 'Lunas')->count(),
            'pelanggans' => Pelanggan::all()
        ]);
    }

    public function getDetail($id)
    {
        $transaksi = Transaksi::with('pelanggans')->find($id);
        $pesanan = Pesanan::with('detail_pesanans')->where('transaksi_id', $id)->get();
        $penjualan = Penjualan::with('barangs')->where('transaksi_id', $id)->get();
    
        return response()->json([
            'transaksi' => $transaksi,
            'pesanan' => $pesanan,
            'penjualan' => $penjualan,
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        // dd($request->all());
        $inputPelangganOld = $request->input('id_pelanggan');
        if ($request->input('nama')) {
            $checkPelanggan = Pelanggan::where('nama', $request->input('nama'))
                                        ->where('hp', $request->input('hp'))
                                        ->first();

            if ($checkPelanggan) {
                $inputPelanggan = $checkPelanggan->id;
            } else {
                if ($request->input('simpan_pelanggan')) {
                    $pelanggan = new Pelanggan;
                    $generateId = $pelanggan->generateId();
                    $newPelanggan = Pelanggan::create([
                        'id' => $generateId,
                        'nama' => $request->input('nama'),
                        'hp' => $request->input('hp'),
                        'diskon' => $request->input('diskon')
                    ]);

                    $inputPelanggan = $newPelanggan->id;
                }
            }
        } 

        Transaksi::where('id', $request->input('inv'))
                    ->update([
                        'pelanggan_id' => $inputPelanggan ?? $inputPelangganOld ?? ('null'),
                        'nama_pelanggan' => $request->input('nama') ?? '',
                        'hp_pelanggan' => $request->input('hp') ?? '',
                        'diskon' => $request->input('diskon') ?? null,
                        'metode' => $request->input('metode'),
                        'status' => $request->input('status'),
                        'diterima' => $request->input('diterima'),
                        'kembali' => $request->input('kembali'),
                        'total_diskon' => $request->input('total_diskon'),
                        'grand_total' => $request->input('grand_total')
                    ]);

        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        Transaksi::destroy($id);

        return redirect('/transaksi');
    }
}
