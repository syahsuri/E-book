@extends('dashboard.layouts.main')

@section('content')
  <div class="containter">
    <div class="row g-3">
      <div class="col-sm-6 col-md-4 col-lg">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-user-circle fa-3x text-primary"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Mahasiswa</h5>
              <p class="card-text fs-4 fw-semibold">{{-- $total_mahasiswa --}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-newspaper fa-3x text-dark"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Admin</h5>
              <p class="card-text fs-4 fw-semibold">{{-- $total_admin --}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-memo-circle-check fa-3x text-info"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Materi</h5>
              <p class="card-text fs-4 fw-semibold">{{-- $total_progress --}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
