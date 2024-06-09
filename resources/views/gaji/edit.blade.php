@extends('layouts.app')

@section('title', 'Edit Gaji')

@section('judulh1', 'Edit Gaji')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3>Form Edit Gaji</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gaji.update', $gaji->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="karyawan_id">Nama Karyawan</label>
                    <select name="karyawan_id" class="form-control" id="karyawan_id" required>
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}" {{ $gaji->karyawan_id == $karyawan->id ? 'selected' : '' }}>
                                {{ $karyawan->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input type="month" name="bulan" class="form-control" id="bulan" value="{{ $gaji->bulan }}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" value="{{ $gaji->jumlah }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
