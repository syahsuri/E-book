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
<h1 class="fw-bold">Diagram Batang  </h1>
<h2 class="mt-5">1.2 Diagram batang untuk persentase penyaluran zakat.</h2>
<p>Gambar 1.1 menampilkan data penyaluran zakat berdasarkan Asnaf dengan menggunakan diagram batang. Tinggi dari 7 batang menunjukkan persentase jumlah dana yang disalurkan pada setiap golongan. </p>
<p>Cobalah ubah nilai persentase pada kategori dalam Tabel, maka akan terlihat perubahan tinggi batang untuk kategori tersebut pada diagram batang. </p>
<br>
<div class="container p-3 ">
  <canvas id="myChart"></canvas>
  <hr>
  <div class="row">
    <div class="col">
    <label for="fakir">Fakir dan Miskin</label>
    <input type="number" class="form-control" id="fakir" value="12" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="fisabilillah">Fi Sabilillah</label>
    <input type="number" class="form-control" id="sabili" value="3" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="amil">Amil</label>
    <input type="number" class="form-control" id="amil" value="4" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="muallaf">Muallaf</label>
    <input type="number" class="form-control" id="muallaf" value="5" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="ibnusabil">Ibnu Sabil</label>
    <input type="number" class="form-control" id="ibnu" value="6" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="gharimin">Gharimin</label>
    <input type="number" class="form-control" id="gharimin" value="7" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="riqab">Riqab</label>
    <input type="number" class="form-control" id="riqab" value="8"onchange="updateChart()">
    </div>
  </div> 
  <hr>
</div>
<div class="peringatan p-4" >
    <p style="color:red;">Pertimbangkan dengan seksama cara terbaik dalam mengurutkan nilai variabel kategori ketika membuat 
        diagram batang. Pilihlah cara pengurutan yang paling sesuai menurutmu. Jika kamu ragu, 
        tanyakan pendapat temanmu apakah informasi penting yang ingin kamu tampilkan dapat terbaca dari pengurutan
        yang kamu lakukan!
    </p>
    <button type="button" class="btn btn-warning d-block m-auto mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <h5>catatan</h5>
    </button>
</div>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Diagram batang memiliki dua sumbu, yaitu sumbu horizontal dan sumbu vertikal.</p>
        <p>Sumbu horizontal menampilkan kategori dari variabel yang disusun sesuai dengan:</p>
        <ul>
            <li>urutan alfabet; atau</li>
            <li>besarnya frekuensi; atau</li>
            <li>cara lainnya yang dianggap dapat menampilkan data dengan lebih bermakna.</li>
        </ul>
        <p>Persegi panjang (batang) dengan lebar yang sama diletakkan di atas setiap kategori.</p>
        <p>Setiap batang diberikan jarak pemisah satu sama lain untuk memperlihatkan kategori data.</p>
        <p>Sumbu vertikal menampilkan:</p>
        <ul>
            <li>nilai frekuensi yang sebenarnya (f); atau</li>
            <li>nilai frekuensi relatif (%).</li>
        </ul>
        <p>Tinggi batang disesuaikan dengan nilai frekuensi dari masing-masing kategori.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li"><a href="/article2" class="a"><i class="bi bi-chevron-left "></i> {{ $articles[2]->nama_article }} </a></li>
        <li class="li fw-bolder b">{{ $articles[3]->nama_article }} </li>
        <li class="li"><a href="/article4" class="a">{{ $articles[4]->nama_article }}  <i class="bi bi-chevron-right"></i></a>  </li>
    </ul>
</footer>
@endsection