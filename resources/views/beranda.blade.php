@extends('layouts.app-layout')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="hero-container">
        <h1 class="hero-title">Rekayasa Perangkat Lunak</h1>
        <p class="hero-subtitle">Mencetak generasi developer masa depan — belajar membangun web, mobile, dan sistem berbasis data langsung dari dasar.</p>
        <a href="/profile" class="hero-btn">Lihat Profile Jurusan</a>
    </div>
</section>

<section class="features">
    <div class="features-container">
        <div class="feature-card">
            <i class="fa-solid fa-laptop-code"></i>
            <h3>Pemrograman Web</h3>
            <p>Belajar HTML, CSS, JavaScript, PHP, hingga framework modern seperti Laravel.</p>
        </div>
        <div class="feature-card">
            <i class="fa-solid fa-mobile-screen"></i>
            <h3>Pemrograman Mobile</h3>
            <p>Membangun aplikasi Android menggunakan Flutter dari nol hingga siap pakai.</p>
        </div>
        <div class="feature-card">
            <i class="fa-solid fa-database"></i>
            <h3>Basis Data</h3>
            <p>Merancang dan mengelola database dengan MySQL dan PostgreSQL.</p>
        </div>
    </div>
</section>

<section class="quick-links">
    <div class="quick-links-container">
        <a href="/mapel" class="quick-link-card">
            <i class="fa-solid fa-book"></i>
            <span>Jadwal Pelajaran</span>
        </a>
        <a href="/data-guru" class="quick-link-card">
            <i class="fa-solid fa-chalkboard-user"></i>
            <span>Data Guru</span>
        </a>
        <a href="/contact" class="quick-link-card">
            <i class="fa-solid fa-envelope"></i>
            <span>Hubungi Kami</span>
        </a>
    </div>
</section>
@endsection