<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Tenan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_barang = Barang::count();
        $jumlah_kategori = Kategori::count();
        $jumlah_tenan = Tenan::count();

        return view('home', compact('jumlah_barang', 'jumlah_kategori', 'jumlah_tenan'));
    }
}
