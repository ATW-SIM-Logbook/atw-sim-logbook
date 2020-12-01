<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function list()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.list', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.create', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data sebelum dikirim
        $request->validate([
            'nrp' => 'required|numeric|unique:mahasiswa',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'email' => 'required|unique:mahasiswa',
            'alamat' => 'required'
        ]);

        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('status', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.detail', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //validasi data sebelum dikirim
        $request->validate([
            'nrp' => 'required|numeric|unique:mahasiswa',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);

        \App\Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                'nrp' => $request->nrp,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'prodi' => $request->prodi,
                'email' => $request->email,
                'alamat' => $request->alamat
            ]);

        return redirect('/mahasiswa')->with('status', 'Data mahasiswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        \App\Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status', 'Data mahasiswa berhasil dihapus!');
    }
}