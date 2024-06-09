@extends('layouts.app')

@section('title', 'Tambah Gaji')

@section('judulh1', 'Tambah Gaji')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Form Tambah Gaji</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gaji.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="karyawan_id">Nama Karyawan</label>
                    <select name="karyawan_id" class="form-control" id="karyawan_id" required>
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input type="month" name="bulan" class="form-control" id="bulan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
