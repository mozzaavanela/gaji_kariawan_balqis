<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;
use App\Models\Karyawan;

class GajiController extends Controller
{
    //
    public function index()
    {
        $gajis = Gaji::with('karyawan')->get();
        return view('gaji.index', compact('gajis'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        return view('gaji.create', compact('karyawans'));
    }

    public function store(Request $request)
{
    $request->validate([
        
        'karyawan_id' => 'required|exists:karyawans,id',
        'bulan' => 'required|string|max:7',
        'jumlah' => 'required|numeric',
    ]);

    Gaji::create($request->all());

    return redirect()->route('gaji.index');
}

    public function show($id)
    {
        $gaji = Gaji::with('karyawan')->find($id);
        return view('gaji.show', compact('gaji'));
    }

    public function edit($id)
    {
        $gaji = Gaji::find($id);
        $karyawans = Karyawan::all();
        return view('gaji.edit', compact('gaji', 'karyawans'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'karyawan_id' => 'required|exists:karyawans,id',
        'bulan' => 'required|string|max:7',
        'jumlah' => 'required|numeric',
    ]);

    $gaji = Gaji::find($id);
    $gaji->update($request->all());

    return redirect()->route('gaji.index');
}

    public function destroy($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();
        return redirect()->route('gaji.index');
    }
}
