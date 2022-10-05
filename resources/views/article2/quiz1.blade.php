@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
            <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data </a>
        </div>
        @include('layout_article.offcanvas2')
    </div>
</nav>

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">Quiz</h1>
        <h3>1. Stemplot merupakan grafik yang sesuai untuk menampilkan… </h3>
        <form action="" class="ms-5">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                <p>a. distribusi data yang berjumlah banyak</p>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                <p>b. distribusi data yang berjumlah banyak</p>
            </label>
        </div>
        <button type="button" class="btn btn-primary" id="cekjawaban">Check Jawaban</button>
        </form>
    </article>
</div>
<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call13') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item submit">
                    <i class="bi bi-chevron-left"></i>{{ $articles[3]->nama_article }}
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[4]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call15') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi1" value="{{ $articles[4]->id }}">
                <button type="submit" class="dropdown-item submit">
                    {{ $articles[5]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
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