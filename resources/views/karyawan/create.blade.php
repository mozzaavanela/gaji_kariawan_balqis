@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('judulh1', 'Tambah Karyawan')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Form Tambah Karyawan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('karyawan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" name="posisi" class="form-control" id="posisi" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
