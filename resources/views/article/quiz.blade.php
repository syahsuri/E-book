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
        <div class="row">
            <div class="col btn" id="benar"><img src="img/quiz/diagrambatang_imp06.png" style=" width: 300px;" alt=""></div>
            <div class="col btn" id="salah"><img src="img/quiz/diagrampie_impor04.png" style=" width: 300px;" alt=""></div>
            <div class="col btn" id="salah"><img src="img/quiz/diagramplot_impor03.png" style=" width: 300px;" alt=""></div>
        </div>
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
            <div class="col btn " id="salah"><img src="img/quiz/diagrambatang_tah01.png" style=" width: 320px;" alt=""></div>
            <div class="col btn " id="salah"><img src="img/quiz/diagramgaris_tahun01.png" style=" width: 320px;" alt=""></div>
            <div class="col btn " id="benar"><img src="img/quiz/diagrampie_tahun01.png" style=" width: 300px;" alt=""></div>
        </div>
    </section>

</article>

<script>
    const buttons = document.querySelectorAll('#salah');
    for (const button of buttons) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Kurang Sesuai!!! ',
                text: 'Fluktuasi data Seiring Waktu tidak sesuai dengan Diagram Batang',
                icon: 'error',
                confirmButtonText: 'OK'
            })
        })

    }

    const buttonb = document.querySelectorAll('#benar');
    for (const button of buttonb) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Benar',
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        })

    }
</script>

@endsection