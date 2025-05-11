@extends('layouts.app')

@section('title', 'Tambah Nilai Mahasiswa')

@section('content')
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    @include('mahasiswa.form')
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
