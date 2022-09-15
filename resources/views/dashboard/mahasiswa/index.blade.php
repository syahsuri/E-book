@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/dashboard/mahasiswa/list-mahasiswa/create">
                <i class="fa-regular fa-plus me-2"></i>
                Tambah
            </a>

            <div class="card mt-3">
                <div class="card-body">

                    {{-- tables --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2020573010006</td>
                                <td>Alvin Syahri</td>
                                <td>Politeknik Negeri Lhoksemawe</td>
                                <td>
                                    <button class="btn btn-sm btn-dark" data-bs-toggle="modal"
                                        data-bs-target="#modalResetPassword">
                                        <i class="fa-regular fa-unlock-keyhole"></i>
                                    </button>
                                    <a href="/dashboard/mahasiswa/list-mahasiswa/edit" class="btn btn-sm btn-warning">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus">
                                        <i class="fa-regular fa-trash-can fa-lg"></i>
                                    </button>
                                </td>
                            </tr>

                            {{-- Modal Reset Password --}}
                            <div class="modal fade" id="modalResetPassword" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password Baru</label>
                                                    <div id="pwd1" class="input-group">
                                                        <input type="password" class="form-control border-end-0"
                                                            name="password" id="password" value="" required>
                                                        <span class="input-group-text cursor-pointer">
                                                            <i class="fa-regular fa-eye-slash" id="togglePassword"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password2" class="form-label">Konfirmasi Password
                                                        Baru</label>
                                                    <div id="pwd2" class="input-group">
                                                        <input type="password" class="form-control border-end-0"
                                                            name="password2" id="password2" value="" required>
                                                        <span class="input-group-text cursor-pointer">
                                                            <i class="fa-regular fa-eye-slash" id="togglePassword"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- / Modal Reset Password --}}

                            {{-- Modal Hapus User --}}
                            <div class="modal fade" id="modalHapus" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="">
                                            @method('delete')
                                            @csrf
                                            <div class="modal-body">
                                                <p class="fs-6">Apakah anda yakin akan menghapus user
                                                    <b>ALVIN</b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- / Modal Hapus User --}}

                        </tbody>
                    </table>
                    {{--  end tables  --}}
                    
                </div>
            </div>
        </div>
    </div>
@endsection
