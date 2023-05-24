@extends('header.main2')

@section('container2')
    <div class="home__container container">
        <div class="home__content grid">
            <div class="home__left">
                <h1>Selamat datang di <br>Agrocorp</h1>
                <p>Temukan mitra agroindustrimu bersama kami dimana kami
                    terhubung dengan seluruh pelaku agroindustri yang berada
                    diseluruh indonesia
                </p>
                <button  class="log__in button" onclick="location.href='mitra_kemitraan.php'" >
                Temukan Mitra
                </button> 
            </div>
            <div class="home__right">
                <div class="home__rigth-image">
                    <img src="image/landing_page.png" alt="">
                </div>
            </div>
        </div>  
    </div>

@if (session('success'))
    <script>
        Swal.fire("Sukses", `{{ session("success") }}`, "success");
    </script>
@endif
@endsection
