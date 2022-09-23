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
        <h1 class="fw-bold">Diagram garis</h1>
        <p>Data yang dikumpulkan berdasarkan jangka waktu tertentu, akan lebih sesuai ditampilkan dengan menggunakan diagram garis. Pada diagram garis, grafik waktu ditampilkan secara horizontal sementara nilai variabel ditampilkan secara vertikal,
            sehingga diagram ini bisa memperlihatkan perubahan data dalam jangka waktu tertentu.</p>
        <p>Contoh data yang dapat ditampilkan dengan diagram garis diantaranya adalah data penurunan masyarakat buta huruf selama 5 tahun terakhir, perkembangan jumlah penduduk Muslim di suatu negara,
            perubahan temperatur ruangan dari waktu ke waktu, dan sebagainya.</p>
        <h2 class="mt-5">1.5 Pertumbuhan penduduk Muslim Eropa.</h2>
        <p>Saat ini agama Islam telah menjadi salah satu agama yang terbesar pemeluknya di dunia. Jumlah pemeluk Islam terus mengalami peningkatan, salah satunya di Benua Eropa.
            Estimasi jumlah penduduk Muslim di Eropa dari Tahun 1950 hingga 2010 ditampilkan pada Tabel 1.4.</p>
        <table class="table table-dark table-striped mt-5">
            <thead class="text-center">
                <tr>
                <th></th>
                <th>1950</th>
                <th>1960</th>
                <th>1970</th>
                <th>1980</th>
                <th>1990</th>
                <th>2000</th>
                <th>2010</th>
                </tr>
            </thead>
            <tbody class="text-center">
            <tr >
                <th >Eropa</th>
                <th >1,97</th>
                <th >2,22</th>
                <th >3,04</th>
                <th>3,57</th>
                <th>4,43</th>
                <th>5,14</th>
                <th>5,74</th>
            </tr>
            <tr >
                <th >Dunia</th>
                <th >17,06</th>
                <th >17,77</th>
                <th >19,02</th>
                <th>20,45</th>
                <th>22,07</th>
                <th>23,65</th>
                <th>24,86</th>
            </tr>
        </table>
        <p class="text-center fs-5"><b>Tabel 1.4</b>  Estimasi persentase populasi Muslim di Benua Eropa dan di Dunia pada Tahun 1950-2010</p>
        <p>Data persentase populasi Muslim pada Tabel 1.4 dapat ditampilkan dengan menggunakan diagram garis untuk
            memperlihatkan pertumbuhan dari tahun ke tahun, seperti pada Gambar 1.4.</p>
        <img src="img/6.png" alt="" class="mt-4 d-block m-auto">
        <p class="text-center fs-5"><b>Gambar 1.4</b> Diagram garis pertumbuhan penduduk </p>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/watch?v=qnGXExRZdKY" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="peringatan p-4 mt-5" >
            <h2 class="mt-3">Latihan</h2>
            <p style="color:red;">1.4 Interpretasi data waktu.Perhatikan diagram garis pada Gambar 1.4 untuk persentase penduduk Muslim di Dunia dan di Benua Eropa.
            Informasi apa yang dapat diceritakan dari grafik tersebut?
            </p>
        </div>
        <h2 class="mt-5">Rangkuman</h2>
        <p>Ketiga jenis diagram yang sudah kita bahas di atas (Diagram batang, lingkar, dan garis) dapat dibuat dengan mudah menggunakan Microsoft Excel, SPSS, Minitab, atau aplikasi statistik lainnya. Tutorial langkah pembuatan diagram tersebut saat ini
            sangat banyak dan dapat dengan mudah ditemukan melalui mesin pencari di internet. </p>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call5') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    {{ $articles[5]->nama_article }}
                    class="bi bi-chevron-left">
                </button>
            </form>
        </li>
        <li class="li fw-bolder b">{{ $articles[6]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call7') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[6]->id }}">
                <button type="submit" class="dropdown-item">
                    Quiz
                    class="bi bi-chevron-right">
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
