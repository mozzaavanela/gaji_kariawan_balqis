@extends('layouts.app')

@section('title', 'Daftar Gaji')

@section('judulh1', 'Daftar Gaji Karyawan')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Gaji</h3>
            <a href="{{ route('gaji.create') }}" class="btn btn-primary float-right">Tambah Gaji</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Bulan</th>
                        <th>Gaji</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gajis as $gaji)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gaji->karyawan->nama }}</td>
                            <td>{{ $gaji->bulan }}</td>
                            <td>Rp {{ number_format($gaji->jumlah, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('gaji.show', $gaji->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('gaji.edit', $gaji->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('gaji.destroy', $gaji->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
