<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::with('suplier')->get();
        return view('produk.index', compact ('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suplier = suplier::all();
        return view ('produk.create', compact ('suplier')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'nama' => 'required|unique:barangs',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required',
        ]);

        $produk = new produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;

        $produk->id_suplier = $request->id_suplier;
        $produk->save();
        return redirect()->route('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        $produk = produk::findOrFail($id);
        return view('produk.show', compact('produk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        $produk = produk::findOrFail($id);
return view('produk.edit', compact('produk', 'suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produk $produk)
    {
         $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required',
        ]);

        $produk = produk::findOrFail($id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;

        $produk->id_suplier = $request->id_suplier;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');

    }
}
