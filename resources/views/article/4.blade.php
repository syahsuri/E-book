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
        <h1 class="fw-bold">Diagram Batang Majemuk</h1>
        <h2 class="mt-5">1.3 Tingkat buta huruf.</h2>
        <p>Menuntut ilmu merupakan kewajiban bagi setiap muslim lelaki dan perempuan.
            Ilmu pengetahuan yang paling mendasar adalah kemampuan membaca atau melek huruf.
            Pemberantasan buta huruf telah diprogramkan pemerintah Indonesia sejak lama dan telah membuahkan hasil yang signifikan yang terlihat dari penurunan persentase penduduk buta huruf saat ini dibandingkan dengan periode awal kemerdekaan.
            Berikut merupakan data persentase penduduk berusia 10 tahun ke atas yang buta huruf di Indonesia pada Tahun 2020.</p>
        <table class="table table-dark table-striped mt-5">
        <thead class="text-center">
            <tr>
            <th scope="col" rowspan="2" >Wilayah</th>
            <th scope="col" ></th>
            <th scope="col">Penduduk Buta Huruf(persentase)</th>
            <th></th>
            </tr>
            <tr>
            <td>Laki-Laki</td>
            <td>Perempuan</td>
            <td>Laki-Laki + Perempuan </td>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr >
                <th >Barat</th>
                <th >1,34</th>
                <th >3,22</th>
                <th >2,28</th>
            </tr>
            <tr >
                <th >Tengah</th>
                <th >2,90</th>
                <th >4,94</th>
                <th >3,92</th>
            </tr>
            <tr>
                <th >Timur</th>
                <th >4,75</th>
                <th >7,55</th>
                <th >6,15</th>
            </tr>
        </tbody>
        </table>
        <p class="text-center fs-5"><b>Tabel 1.3</b>  Persentase penduduk buta huruf usia >10 tahun pada Tahun 2020</p>
        <p>Jika ingin menampilkan total persentase penduduk buta huruf tanpa perincian kenis kelamin,
            dapat digunakan diagram batang tunggal seperti pada Gambar 2.1. Namun, jika ingin menampilkan data berdasarkan jenis kelamin,
             maka dapat digunakan diagram batang majemuk yang menampilkan dua komponen seperti pada Gambar 1.2.</p>
        <img src="img/t1.jpg" alt="" class="d-block m-auto mt-5">
        <p class="text-center fs-5"><b>Gambar 1.2</b>  Diagram batang untuk data persentase penduduk buta huruf pada Tabel 1.3</p>

        <div class="peringatan p-4 mt-5" >
            <h2 class="mt-3">Latihan</h2>
            <p style="color:red;">1.2 Interpretasi Data. Perhatikan diagram batang pada Gambar 1.3. Informasi apa yang dapat kamu ceritakan dari data tersebut? Berdasarkan data tersebut, menurutmu bagaimana bentuk kebijakan
            yang perlu dijalankan oleh pemerintah Indonesia sebagai upaya untuk menuntaskan permasalahan buta huruf?
            </p>
        </div>




    </article>
</div>


<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call3') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    {{ $articles[3]->nama_article }}
                    class="bi bi-chevron-left">
                </button>
            </form>
        </li>
        <li class="li fw-bolder b">{{ $articles[4]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call5') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[4]->id }}">
                <button type="submit" class="dropdown-item">
                    {{ $articles[5]->nama_article }}
                    class="bi bi-chevron-right">
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
