<?php

namespace App\Http\Controllers;

use App\Models\suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = suplier::all();
        return view('suplier.index', compact('suplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $suplier = new Suplier;
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        return redirect()->route('suplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show(suplier $suplier)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.show', compact('suplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit(suplier $suplier)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit', compact('suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suplier $suplier)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        $suplier = Suplier::findOrFail($id);
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        return redirect()->route('suplier.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(suplier $suplier)
    {
        $suplier = Suplier::findOrFail($id);
        $suplier->delete();
        return redirect()->route('suplier.index');
    }
}
