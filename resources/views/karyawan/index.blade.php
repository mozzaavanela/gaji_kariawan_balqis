@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('judulh1', 'Daftar Karyawan')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawans as $karyawan)
                        <tr>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->posisi }}</td>
                            <td>{{ $karyawan->email }}</td>
                            <td>
                                <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
