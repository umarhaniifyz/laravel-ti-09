<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\produk;
use App\Http\Models\KategoriProduk;
use DB;
//use illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        //$kategori_produk = KategoriProduk::all();

        //$kategori_produk = DB::table($kategori_produk)->get();

        $produk = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=',
        'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();
        
        //untuk mengarahkan kefile produk
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}