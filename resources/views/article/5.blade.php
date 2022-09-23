@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
         <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data </a>
        </div>
        <div class="col">
        <button class="btn float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><h4><i class="bi bi-list"></i></h4></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Modul</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                  <li><a href="/article"> Mengapa data perlu disajikan?</a></li>
                  <li><a href="/article2"> Menyajikan data variabel kategori</a></li>
                  <li><a href="/article3"> Diagram batang</a></li>
                  <li><a href=""> Menyajikan data variabel kategori</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</nav>

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">Diagram Lingkar</h1>
        <h2 class="mt-5">1.4 Diagram lingkar untuk persentase penyaluran zakat.</h2>
        <p>Diagram lingkar pada Gambar 1.3 memperlihatkan besarnya bagian yang dibentuk
            oleh setiap kategori untuk seluruh data. Disini terlihat dengan jelas bahwa golongan
            Fakir dan Miskin mendapatkan persentase penyaluran zakat yang paling besar,
            yaitu membentuk hampir 3/4 bagian dari seluruh total penyaluran zakat.</p>
        <img src="img/5.png" alt="" class="mt-4 d-block m-auto">
        <p class="text-center fs-5"><b>Gambar 1.3</b> Diagram lingkar untuk persentase penyaluran zakat pada Contoh 1.1</p>
        <h2 class="mt-5">Diagram lingkar atau Diagram batang?</h2>
        <p>Bagaimana kita bisa mengetahui diagram yang sesuai untuk menampilkan data tertentu? Beberapa poin berikut dapat dijadikan pertimbangan:</p>
        <p style="color:#C689C6;">Diagram lingkar:</p>
        <p>semua kategori harus dimasukkan ke dalam grafik, sehingga total persentase semua kategori yang ditampilkan haruslah 100%; Variabel dengan kategori yang banyak (lebih dari 8 kategori) biasanya akan tidak efektif ditampilkan dengan diagram lingkar.</p>
        <p style="color:#C689C6;">Diagram batang:</p>
        <p>Dapat digunakan jika kita tidak memiliki atau tidak ingin menampilkan data dari seluruh kategori yang ada;</p>
        <p>Sebagai contoh, diagram batang dapat digunakan untuk membandingkan total penyaluran zakat untuk 3 golongan Asnaf: gharimin, fi sabilillah, dan ibnu sabil. Diagram lingkar tidak dapat menampilkan perbandingan ini karena total penyaluran zakat tidak hanya untuk 3 golongan tersebut.</p>
        <div class="peringatan p-4 mt-5" >
            <h2 class="mt-3">Latihan</h2>
            <p style="color:red;">1.3 Membandingkan grafik. Perhatikan diagram batang pada Gambar 1.1 dan diagram lingkar pada Gambar 1.3 untuk data penyaluran zakat. Menurutmu,
            grafik manakah yang paling sesuai untuk mendeskripsikan data tersebut? Uraikan alasanmu. 
            </p>
        </div>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call4') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    {{ $articles[4]->nama_article }}
                    class="bi bi-chevron-left">
                </button>
            </form>
        </li>
        <li class="li fw-bolder b">{{ $articles[5]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call6') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[5]->id }}">
                <button type="submit" class="dropdown-item">
                    {{ $articles[6]->nama_article }}
                    class="bi bi-chevron-right">
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
