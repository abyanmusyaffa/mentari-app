<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PenjualanController extends Controller
{
    public function index(): View
    {
        return view('penjualan', [
            'barangs' => Barang::with('kategoris', 'satuans')->get(),
            'kategoris' => Kategori::with('barangs')->get(),
            'pelanggans' => Pelanggan::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
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
        $generateIdPenjualan = $transaksi->generateIdPenjualan();
        $inputTransaksi = Transaksi::create([
            'id' => $generateIdPenjualan,
            'pelanggan_id' => $inputPelanggan,
            'nama_pelanggan' => $request->input('nama') ?? '' ,
            'hp_pelanggan' => $request->input('hp') ?? '' ,
            'diskon' => $request->input('diskon') ?? null ,
            'metode' => $request->input('metode'),
            'status' => $request->input('submit') === 'bayar' ? 'Lunas' : 'Pending' ,
            'diterima' => $request->input('diterima'),
            'kembali' => $request->input('kembali'),
            'total_diskon' => $request->input('total_diskon'),
            'grand_total' => $request->input('grand_total'),
        ]);
        
        $id = $request->input('id');
        $jumlahs = $request->input('jumlah');
        $total_hargas = $request->input('total_harga');

        foreach ($id as $i => $barang_id) {
            $barang = Barang::find($barang_id);
            if ($barang) {
                Penjualan::create([
                    'transaksi_id' => $inputTransaksi->id,
                    'barang_id' => $barang_id,
                    'jumlah' => $jumlahs[$i],
                    'total_harga' => $total_hargas[$i]
                ]);

                $barang->decrement('stok', $jumlahs[$i]);
            }
        }
        
        

        // dd($data, $request->all());
        return redirect('/penjualan');
    }

}
