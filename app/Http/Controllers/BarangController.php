<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Kategori;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BarangController extends Controller
{
    public function index(): View
    {
        return view('barang', [
            'barangs' => Barang::with('satuans', 'kategoris')->latest()->get(),
            'totalBarang' => Barang::count(),
            'totalStok' => Barang::sum('stok'),
            'barangAvailable' => Barang::where('stok', '>', 0)->count(),
            'barangNotAvailable' => Barang::where('stok', '=<', 0)->count(),
            'kategoris' => Kategori::all(),
            'satuans' => Satuan::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $barang = new Barang;
        $generateId = $barang->generateIdBarangs();
        $data['id'] = $generateId;

        Barang::create($data);

        return redirect('/barang');
    }

    public function getDetail($id)
    {
        $barang = Barang::with('kategoris', 'satuans')->find($id);
        return response()->json($barang);
    }

    public function update(Request $request): RedirectResponse
    {
        Barang::where('id', $request->input('id'))
                ->update([
                    'nama' => $request->input('nama'),
                    'kategori_id' => $request->input('kategori_id'),
                    'satuan_id' => $request->input('satuan_id'),
                    'harga' => $request->input('harga'),
                    'stok' => $request->input('stok'),
                ]);

        return redirect('/barang');
    }

    public function destroy($id)
    {
        Barang::destroy($id);

        return redirect('/barang');
    }
}
