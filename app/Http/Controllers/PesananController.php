<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use Illuminate\Http\RedirectResponse;

class PesananController extends Controller
{
    public function index(): View
    {
        return view('pesanan', [
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $inputPelanggan = null;
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

        $inputTransaksiId = null;
        if($request->input('submit') === 'bayar') {
            $transaksi = new Transaksi;
            $generateIdPesanan = $transaksi->generateIdPesanan();
            $inputTransaksi = Transaksi::create([
                'id' => $generateIdPesanan,
                'pelanggan_id' => $inputPelanggan,
                'nama_pelanggan' => $request->input('nama') ?? '' ,
                'metode' => $request->input('metode'),
                'status' => 'Lunas',
                'diterima' => $request->input('diterima'),
                'kembali' => $request->input('kembali'),
                'total_diskon' => $request->input('total_diskon'),
                'grand_total' => $request->input('grand_total'),
            ]);
            $inputTransaksiId = $inputTransaksi->id;
        } 

        $pesanan = new Pesanan;
        $generateIdPesanans = $pesanan->generateIdPesanans();
        $inputPesanan = Pesanan::create([
            'id' => $generateIdPesanans,
            'transaksi_id' => $inputTransaksiId,
            'nama_pelanggan' => $request->input('nama'),
            'hp_pelanggan' => $request->input('hp'),
            'status' => $request->input('submit') === 'proses' ? 'Proses' : 'Selesai',
            'waktu' => $request->input('waktu') ?? now()
        ]);
        
        $pesanans = $request->input('pesanan');
        $hargas = $request->input('harga');
        foreach ($pesanans as $i => $pesanan) {
            DetailPesanan::create([
                'pesanan_id' => $inputPesanan->id,
                'nama' => $pesanan,
                'harga' => $hargas[$i],
            ]);
        }
        
        return redirect('/pesanan');

    }
}
