@extends('layouts.app')

@section('title', 'Detail Gaji')

@section('judulh1', 'Detail Gaji')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Detail Gaji</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Karyawan</th>
                    <td>{{ $gaji->karyawan->nama }}</td>
                </tr>
                <tr>
                    <th>Bulan</th>
                    <td>{{ $gaji->bulan }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>Rp {{ number_format($gaji->jumlah, 0, ',', '.') }}</td>
                </tr>
            </table>
            <a href="{{ route('gaji.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection
