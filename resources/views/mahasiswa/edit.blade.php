@extends('layouts.app')

@section('title', 'Edit Nilai Mahasiswa')

@section('content')
<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('mahasiswa.form', ['mahasiswa' => $mahasiswa])
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
