<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Kelas</label>
    <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $mahasiswa->kelas ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nilai Tugas</label>
    <input type="number" step="0.01" name="nilai_tugas" class="form-control" value="{{ old('nilai_tugas', $mahasiswa->nilai_tugas ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nilai Quiz</label>
    <input type="number" step="0.01" name="nilai_quiz" class="form-control" value="{{ old('nilai_quiz', $mahasiswa->nilai_quiz ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nilai UTS</label>
    <input type="number" step="0.01" name="nilai_uts" class="form-control" value="{{ old('nilai_uts', $mahasiswa->nilai_uts ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Nilai UAS</label>
    <input type="number" step="0.01" name="nilai_uas" class="form-control" value="{{ old('nilai_uas', $mahasiswa->nilai_uas ?? '') }}" required>
</div>
