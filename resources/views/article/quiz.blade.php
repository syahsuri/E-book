@extends("layout_article.main")

@section("container")
<article class="p-5">
    <h1 class="fw-bold">Quiz</h1>

    <section class="soal">
        <h2 class="mt-4">1.Menampilkan Data Presentase.</h2>
        <p>Tabel 1.6 menampilkan data volume impor buah-buahan menurut negara asal utama khusus pada Tahun 2020.
            Dengan menggunakan kalkulator atau MS Excel, hitunglah nilai persentase volume impor untuk setiap negara
            dan lengkapi kolom persentase pada Tabel 1.6 dengan nilai persentase yang benar (Gunakan satu digit angka setelah koma).</p>
    </section>

    <section class="soal mt-3">
        <h2 class="mt-4">2.Membandingkan Grafik Persentase.</h2>
        <p>Data persentase volume impor buah-buahan pada Tahun 2020 ditampilkan dalam tiga grafik berikut.
            Grafik yang mana yang menurutmu paling tepat untuk menampilkan data tersebut? Klik salah satu grafik.</p>
    </section>

    <section class="soal mt-3">
        <h2 class="mt-4">3.Membandingkan Grafik Data Tahun 2010-2020.</h2>
        <p>Tabel 1.7 menampilkan data total volume impor buah-buahan menurut negara asal utama pada tahun 2010 sampai dengan Tahun 2020.</p>
        <p class="text-center">Tabel 1.7 Data total volume impor buah-buahan menurut negara asal utama pada tahun 2010 s.d 2020</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tahun</th>
                    <th scope="col">2010</th>
                    <th scope="col">2011</th>
                    <th scope="col">2012</th>
                    <th scope="col">2013</th>
                    <th scope="col">2014</th>
                    <th scope="col">2015</th>
                    <th scope="col">2016</th>
                    <th scope="col">2017</th>
                    <th scope="col">2018</th>
                    <th scope="col">2019</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">Volume</th>
                    <td>667.287,5</td>
                    <td>807.076,6</td>
                    <td>789.571,1</td>
                    <td>507.348,2</td>
                    <td>548.402,7</td>
                    <td>435.004,1</td>
                    <td>480.528,8</td>
                    <td>663.810,7</td>
                    <td>662.753,2</td>
                    <td>724.131,1</td>

                </tr>
            </tbody>
        </table>
        <p>Grafik yang manakah yang menurutmu paling sesuai
            untuk menampilkan data total volume impor
            buah-buahan menurut negara asal utama pada tahun 2010 sampai dengan Tahun 2020? Klik salah satu grafik berikut.</p>
        <div class="row">
            <div class="col btn" data-bs-toggle="modal" data-bs-target="#modalsalah"><img src="img/quiz/diagrambatang_tah01.png" style="height: 250px; width: 400px;" alt=""></div>
            <div class="col btn" data-bs-toggle="modal" data-bs-target="#modalsalah"><img src="img/quiz/diagramgaris_tahun01.png" style="height: 250px; width: 400px;" alt=""></div>
            <div class="col btn mt-5 d-flex justify-content-center"><img src="img/quiz/diagrampie_tahun01.png" style="height: 250px; width: 400px;" alt=""></div>
        </div>
    </section>

    <div class="modal" id="modalsalah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body ">
                    <img class="d-flex justify-content-center" src="img/quiz/krgsesuai2.png" style="height: 150px; width: 300px;" alt="salah">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">OK</button>
                </div>
            </div>
        </div>
    </div>

</article>

@endsection