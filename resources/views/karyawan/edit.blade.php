@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('judulh1', 'Edit Karyawan')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Form Edit Karyawan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $karyawan->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" name="posisi" class="form-control" id="posisi" value="{{ $karyawan->posisi }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $karyawan->email }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
