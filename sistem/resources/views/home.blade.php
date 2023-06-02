@extends('layouts.app')

@section('content')
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="sistem/img/profil1.jpeg" alt="Laboratorium" class="d-block image" style="width:100%; height: 650px; filter: brightness(50%);">
            <div class="carousel-caption caption" style="top: 30%;">
                <h3>Selamat Datang</h3>
                <h1 class="big-text">SD NEGERI GRUGU 03 KAWUNGANTEN</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="sistem/img/profil2.jpeg" alt="Programming" class="d-block image" style="width:100%; height: 650px; filter: brightness(50%);">
            <div class="carousel-caption caption" style="top: 30%;">
                <h3>Selamat Datang</h3>
                <h1 class="big-text">SD NEGERI GRUGU 03 KAWUNGANTEN</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="sistem/img/profil3.jpeg" alt="Jaringan" class="d-block image" style="width:100%; height: 650px; filter: brightness(50%);">
            <div class="carousel-caption caption" style="top: 30%;">
                <h3>Selamat Datang</h3>
                <h1 class="big-text">SD NEGERI GRUGU 03 KAWUNGANTEN</h1>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

@endsection