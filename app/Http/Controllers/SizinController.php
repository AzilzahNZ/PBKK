<?php

namespace App\Http\Controllers;

use App\Models\Sizin;
use Illuminate\Http\Request;

class SizinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sizin::all();
        // dd($data);
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'NomorSurat' => 'required|string',
            'NamaKegiatan' => 'required|string',
            'HariKegiatan' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'TanggalKegiatan' => 'required|date',
            'TempatKegiatan' => 'required|string',
            'PJKegiatan' => 'required|string',
            'Semester' => 'required|integer',
            'NomorHPPJ' => 'required|string',
            'Status' => 'required|boolean',
        ]);
        $sizin = Sizin::create($data);
        if($sizin) {
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        }
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
