<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppdb;

class ppdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = ppdb::all();
        return view('ppdb.index', compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new ppdb;
        $ppdb->nama_lengkap           = $request->nama_lengkap;
        $ppdb->jenis_kelamin          = $request->jenis_kelamin;
        $ppdb->agama                  = $request->agama;
        $ppdb->alamat                 = $request->alamat;
        $ppdb->telpon                 = $request->telpon;
        $ppdb->asal_sekolah           = $request->asal_sekolah;
        $ppdb->save();

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = ppdb::findOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = ppdb::findOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ppdb = new ppdb;
        $ppdb->nama_lengkap           = $request->nama_lengkap;
        $ppdb->jenis_kelamin          = $request->nama;
        $ppdb->agama                  = $request->agama;
        $ppdb->alamat                 = $request->alamat;
        $ppdb->telpon                 = $request->telpon;
        $ppdb->asal_sekolah           = $request->asal_sekolah;
        $ppdb->daftar();

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = ppdb::findOrFail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Dihapus');
    }
}
