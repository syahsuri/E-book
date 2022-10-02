@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
            <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data Variable
                kuantitatif : Stemplot</a>
        </div>
        @include('layout_article.offcanvas2')
    </div>

</nav>

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">Pojok Latihan</h1>
        <p style="color: red;">Berikut adalah data nilai statistika 20 orang mahasiswa</p>
        <p>Buatlah stemplot untuk data berikut: </p>
        <p class="fw-bold">Kelas A:</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">62</th>
                    <th scope="col">65</th>
                    <th scope="col">70</th>
                    <th scope="col">73</th>
                    <th scope="col">74</th>
                    <th scope="col">74</th>
                    <th scope="col">75</th>
                    <th scope="col">76</th>
                    <th scope="col">76</th>
                    <th scope="col">78</th>
                    <th scope="col">80</th>
                    <th scope="col">81</th>
                </tr>
                <tr>
                    <th scope="col">82</th>
                    <th scope="col">83</th>
                    <th scope="col">83</th>
                    <th scope="col">84</th>
                    <th scope="col">86</th>
                    <th scope="col">87</th>
                    <th scope="col">87</th>
                    <th scope="col">88</th>
                    <th scope="col">89</th>
                    <th scope="col">90</th>
                    <th scope="col">90</th>
                    <th scope="col">95</th>
                </tr>
            </thead>
        </table>
    <p>Sebagai alternatif,<a href="https://www.statology.org/stem-and-leaf-plot-generator/"> https://www.statology.org/stem-and-leaf-plot-generator/ </a>dapat digunakan untuk membuat stemplot sederhana.</p>
            <br>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call11') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[1]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[2]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call13') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi1" value="{{ $articles[2]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[3]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection