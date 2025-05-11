<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $mahasiswa->nama ?? '') }}" required>
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Kelas</label>
    <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas', $mahasiswa->kelas ?? '') }}" required>
    @error('kelas')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" required>
    @error('jurusan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Nilai Tugas</label>
    <input type="number" step="0.01" name="nilai_tugas" class="form-control @error('nilai_tugas') is-invalid @enderror" value="{{ old('nilai_tugas', $mahasiswa->nilai_tugas ?? '') }}" required>
    @error('nilai_tugas')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Nilai Quiz</label>
    <input type="number" step="0.01" name="nilai_quiz" class="form-control @error('nilai_quiz') is-invalid @enderror" value="{{ old('nilai_quiz', $mahasiswa->nilai_quiz ?? '') }}" required>
    @error('nilai_quiz')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Nilai UTS</label>
    <input type="number" step="0.01" name="nilai_uts" class="form-control @error('nilai_uts') is-invalid @enderror" value="{{ old('nilai_uts', $mahasiswa->nilai_uts ?? '') }}" required>
    @error('nilai_uts')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Nilai UAS</label>
    <input type="number" step="0.01" name="nilai_uas" class="form-control @error('nilai_uas') is-invalid @enderror" value="{{ old('nilai_uas', $mahasiswa->nilai_uas ?? '') }}" required>
    @error('nilai_uas')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
