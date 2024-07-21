<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PesananController extends Controller
{
    public function index(): View
    {
        return view('pesanan', [
            'pelanggans' => Pelanggan::all(),
            'pesanans' => Pesanan::with('transaksis', 'detail_pesanans')->orderBy('created_at', 'desc')->get(),
            'jumlahSiap' => Pesanan::where('status', 'Siap')->count(),
            'jumlahProses' => Pesanan::where('status', 'Proses')->count(),
            'jumlahPending' => Pesanan::where('status', 'Pending')->count(),
            'jumlahSelesai' => Pesanan::where('status', 'Selesai')->count(),
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
                'hp_pelanggan' => $request->input('hp') ?? '' ,
                'diskon' => $request->input('diskon') ?? null ,
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
            'nama_pelanggan' => $request->input('nama') ?? '',
            'hp_pelanggan' => $request->input('hp') ?? '',
            'status' => $request->input('submit') === 'proses' ? 'Proses' : 'Selesai',
            'waktu' => $request->input('submit') === 'bayar' ? now() : ($request->input('waktu') ?? now())  
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

    public function getDetail($id)
    {
        $pesanan = Pesanan::with('detail_pesanans')->find($id);
        return response()->json($pesanan);
    }

    public function update(Request $request): RedirectResponse
    {
        // dd($request->all());
        $detail_pesanans = $request->input('pesanan');
        $hargas = $request->input('harga');
        $id_details = $request->input('id_detail'); 

        foreach ($detail_pesanans as $i => $detail) {
            DetailPesanan::where('id', $id_details[$i])
                ->update([
                    'nama' => $detail,
                    'harga' => $hargas[$i]
                ]);
        }

        $inputTransaksiId = null;
    
        if($request->input('bayar') || $request->input('pending')) {
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

            $transaksi = new Transaksi;
            $generateIdPesanan = $transaksi->generateIdPesanan();
            $inputTransaksi = Transaksi::create([
                'id' => $generateIdPesanan,
                'pelanggan_id' => $inputPelanggan,
                'nama_pelanggan' => $request->input('nama') ?? '' ,
                'hp_pelanggan' => $request->input('hp') ?? '' ,
                'diskon' => $request->input('diskon') ?? null ,
                'metode' => $request->input('metode'),
                'status' => $request->input('bayar') ? 'Lunas' : 'Pending',
                'diterima' => $request->input('diterima'),
                'kembali' => $request->input('kembali'),
                'total_diskon' => $request->input('total_diskon'),
                'grand_total' => $request->input('grand_total'),
            ]);
            $inputTransaksiId = $inputTransaksi->id;
        }

        Pesanan::where('id', $request->input('id_pesanan'))
                        ->update([
                            'transaksi_id' => $inputTransaksiId ,
                            'waktu' => $inputTransaksiId ? now() : $request->input('waktu'),
                            'nama_pelanggan' => $request->input('nama') ?? '',
                            'hp_pelanggan' => $request->input('hp') ?? '',
                            'status' => $inputTransaksiId ? 'Selesai' : $request->input('status')
                        ]);

        if($request->input('page') === 'dashboard') {
            return redirect('/');
        } else {
            return redirect('/pesanan');
        }                
    }

    public function destroy($id)
    {
        DetailPesanan::where('pesanan_id', $id)->delete();
        Pesanan::destroy($id);

        return redirect('/pesanan');
    }

}
