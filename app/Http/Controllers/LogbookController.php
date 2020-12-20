<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logbook;
use App\Mahasiswa;
use DataTables;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('logbook.index', ['mahasiswa' => $mahasiswa]);
    }

    public function getLogbook(Request $request)
    {
        if ($request->ajax()) {
            $data = Mahasiswa::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logbook = \App\Logbook::all();
        return view('logbook.create', ['logbook' => $logbook]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mahasiswa = new \App\Mahasiswa;
        // $mahasiswa->hari = $request->hari;
        // $mahasiswa->tanggal = $request->tanggal;
        // $mahasiswa->kegiatan = $request->kegiatan;
        // $mahasiswa->keterangan = $request->keterangan;
        // $mahasiswa->save();

        // \App\Logbook::create($request->all());
        // return redirect('/logbook')->with('status', 'Data logbook berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('logbook.detail', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('logbook.create', ['mahasiswa' => $mahasiswa]);
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
        \App\Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'kegiatan' => $request->kegiatan,
                'keterangan' => $request->keterangan
            ]);

        return redirect('/logbook')->with('status', 'Data logbook berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
