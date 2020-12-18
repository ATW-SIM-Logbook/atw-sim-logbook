<?php

namespace App\Http\Controllers;

use App\User;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    //sementara tidak dipakai fitur ini
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

        //input ke tabel:Users
        $user = new \App\User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        // $user->nrp = $request->nrp;
        // $user->jenis_kelamin = $request->jenis_kelamin;
        // $user->prodi = $request->prodi;
        // $user->alamat = $request->alamat;
        $user->password = bcrypt('mahasiswa');
        $user->remember_token = Str::random(40);
        $user->save();

        //input ke tabel: Mahasiswa
        $request->request->add(['user_id' => $user->id]);
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
            'nrp' => 'required|numeric',
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
                'alamat' => $request->alamat,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'kegiatan' => $request->kegiatan,
                'keterangan' => $request->keterangan
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

    public function delete(Mahasiswa $mahasiswa)
    {
        \App\Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status', 'Data mahasiswa berhasil dihapus!');
    }
}
