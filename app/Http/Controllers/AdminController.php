<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Satuan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin', [
            'satuans' => Satuan::all(),
            'kategoris' => Kategori::all(),
        ]);
    }
}
