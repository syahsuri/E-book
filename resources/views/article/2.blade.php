@extends("layout_article.main")

@section("container")
<article class="p-5">
    <h1 class="fw-bold">Menyajikan data variabel kategori</h1>
    <h2 class="mt-5">1.1 Penyaluran Zakat.</h2>
    <p>Dalam QS. At-Taubah ayat 80 disebutkan bahwa terdapat 8 (delapan) golongan orang yang berhak menerima zakat, yaitu orang fakir, miskin, amil, muallaf, hamba sahaya (riqab), 
        gharimin, fisabilillah, dan ibnu sabil. 8 golongan ini disebut dengan Asnaf</p>

    <p>Asnaf merupakan variabel kategori, yang nilai-nilainya (atau kategorinya) adalah: fakir, miskin, amil, muallaf, riqab, gharimin, fisabilillah, dan ibnu sabil. 
        Kategori ini berbeda dalam jenisnya, bukan dalam kuantitasnya.</p>

    <p>Di Indonesia, penyaluran zakat ditangani oleh Badan Amil Zakat Nasional (BAZNAS) dan data penyaluran zakat tersebut dilaporkan setiap tahun dalam bentuk buku laporan statistik zakat nasional. Data penyaluran zakat berdasarkan Asnaf dapat disajikan dengan menampilkan jumlah dana dan persentase yang disalurkan untuk setiap golongan. 
    Tabel 1.1 berikut menampilkan data penyaluran zakat berdasarkan Asnaf pada Tahun 2019.</p>

<table class="table table-dark table-striped mt-5">
  <thead class=" m-auto">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Asnaf</th>
      <th scope="col">Penyaluran Per Asnaf</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry the Bird</td>
      <td>as</td>
    </tr>
  </tbody>
</table>

</article>
@endsection