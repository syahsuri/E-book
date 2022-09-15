@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col col-md-6">
        <a class="btn btn-outline-secondary" href="/dashboard/mahasiswa/list-mahasiswa" />
        <i class="fa-regular fa-chevron-left me-2"></i>
        Kembali
        </a>

        <div class="card mt-3">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" name="sekolah" id="sekolah" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role">
                            <option value="0">Mahasiswa</option>
                            <option value="1">Guru</option>
                            <option value="2">Operator</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection