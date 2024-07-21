<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(): View
    {
        return view('/pelanggan', [
            'totalPelanggan' => Pelanggan::count(),
            'pelanggans' => Pelanggan::latest()->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $pelanggan = new Pelanggan;
        $generateId = $pelanggan->generateId();
        $data['id'] = $generateId;

        Pelanggan::create($data);

        return redirect('/pelanggan');
    }

    public function getDetail($id)
    {
        $pelanggan = pelanggan::find($id);
        return response()->json($pelanggan);
    }

    public function getLeaderboard()
    {
        $leaderboards = Pelanggan::withCount('transaksis')
                        ->orderBy('transaksis_count', 'desc')
                        ->take(5)
                        ->get();
        
        return response()->json($leaderboards);
    }

    public function update(Request $request): RedirectResponse
    {
        Pelanggan::where('id', $request->input('id'))
                ->update([
                    'nama' => $request->input('nama'),
                    'hp' => $request->input('hp'),
                    'alamat' => $request->input('alamat'),
                    'diskon' => $request->input('diskon'),
                ]);

        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);

        return redirect('/pelanggan');
    }
}
