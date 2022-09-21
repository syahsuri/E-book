@extends("layout.main")
@section("container")
<section class="beranda">
    <div class="row image d-flex">
        <div class="col caption d-none d-md-block">
            <div id="current_date" class="mb-2"></div>
            <h4 class="fs-3">Selamat Datang {{ auth()->user()->nama }}!</h4>
            <p>Semoga Harimu Menyenangkan.</p>
        </div>
        <div class="col img float end">
            <img src="img/book.png" alt="" width ="40%" class="float-end">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col">
                    <p class="fw-bolder">STATISTIC</p>
                    <p>Penyajian Data</p>
                    </div>
                    <div class="col p-4 ">
                    <button class ="btn btn-pelajari float-end" onclick="location.href='/article'">Pelajari</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 mb-5">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col">
                    <p class="fw-bolder">MATA PELAJARAN</p>
                    <p>Pelajaran</p>
                    </div>
                    <div class="col p-4 ">
                    <button class ="btn btn-pelajari float-end">Pelajari</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection