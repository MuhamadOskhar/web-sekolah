@extends('components.pagesnavbar')

@section('title', "Halaman Utama")
@section('mainContainer')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css')}} ">
    <div id="container-1">
        <div>
            <h2>SELAMAT DATANG</h2>
            <p>Generasi bangsa perlu kita didik sejak dini untuk membentuk kedasaran akan pentingnya pengetahuan dan membentuk kebiasaan yang baik serta memperdalam etika dan moral agar anak tumbuh menjadi sosok yang kita harapkan</p>
        </div>
        @include('components.svgilustrasisekolah')
    </div>
    <div id="container-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,32L30,37.3C60,43,120,53,180,90.7C240,128,300,192,360,202.7C420,213,480,171,540,160C600,149,660,171,720,170.7C780,171,840,149,900,149.3C960,149,1020,171,1080,181.3C1140,192,1200,192,1260,202.7C1320,213,1380,235,1410,245.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </div>
@endsection