<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $karyawan = new Karyawan();
        $karyawan->nama = $request->nama;
        $karyawan->posisi = $request->posisi;
        $karyawan->email = $request->email;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->posisi = $request->posisi;
        $karyawan->email = $request->email;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
