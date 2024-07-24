<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Satuan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin', [
            'totalAdmin' => User::where('role', 'admin')->count(),
            'toko' => Toko::first(),
            'satuans' => Satuan::all(),
            'kategoris' => Kategori::all(),
            'users' => User::all(),
        ]);
    }

    public function updateToko(Request $request): RedirectResponse
    {
        
        Toko::first()
            ->update([
                'nama' => $request->input('nama'),
                'hp' => $request->input('hp'),
                'alamat' => $request->input('alamat'),
                'email' => $request->input('email'),
            ]);
        
        if ($request->hasFile('logo')) {
            $validated = $request->validate([
                'logo' => 'required|image|mimes:png,jpg,jpeg,svg|max:5120',
            ]);
        
            $file = $request->file('logo');
        
            $filename = time() . '.' . $file->getClientOriginalExtension();
        
            $file->move(public_path('img'), $filename);
        
            Toko::first()->update([
                'logo' => $filename,
            ]);
        
        }                        

        return redirect('/admin');
    }   

    public function insertSatuan(Request $request): RedirectResponse
    {
        Satuan::create($request->all());

        return redirect('/admin');
    }

    public function getDetailSatuan($id)
    {
        $satuan = Satuan::find($id);
        return response()->json($satuan);
    }

    public function updateSatuan(Request $request): RedirectResponse
    {
        Satuan::whereId($request->input('id'))->update(['nama' => $request->input('nama')]);

        return redirect('/admin');
    }
    public function destroySatuan($id)
    {
        try {
            Satuan::destroy($id);
            return redirect('/admin')->with('success', 'Data satuan berhasil dihapus');
        } catch (\Exception $e) {
            return redirect('/admin')->with('error', 'Data satuan tidak bisa dihapus');
        }
    }

    public function insertKategori(Request $request): RedirectResponse
    {
        Kategori::create($request->all());

        return redirect('/admin');
    }

    public function getDetailKategori($id)
    {
        $kategori = Kategori::find($id);
        return response()->json($kategori);
    }

    public function updateKategori(Request $request): RedirectResponse
    {
        Kategori::whereId($request->input('id'))->update(['nama' => $request->input('nama')]);

        return redirect('/admin');
    }

    public function destroyKategori($id)
    {
        try {
            Kategori::destroy($id);
            return redirect('/admin')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Exception $e) {
            return redirect('/admin')->with('error', 'Data kategori tidak bisa dihapus');
        }
    }
}
