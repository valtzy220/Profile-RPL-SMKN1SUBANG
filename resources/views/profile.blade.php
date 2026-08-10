@extends('layouts.app-layout')

@section('title', 'Profile RPL')

@section('content')
<section class="page-hero">
    <div class="page-hero-container">
        <h1 class="page-hero-title">Rekayasa Perangkat Lunak</h1>
        <p class="page-hero-subtitle">Profile Jurusan RPL SMKN 1 Subang</p>
    </div>
</section>

<section class="profile-content">
    <div class="profile-container">
        <div class="profile-about">
            <h2>Tentang Jurusan</h2>
            <p>
                Rekayasa Perangkat Lunak (RPL) adalah program keahlian yang membekali siswa
                dengan kemampuan merancang, membangun, dan mengelola perangkat lunak, mulai dari
                pemrograman web, mobile, hingga basis data.
            </p>
        </div>

        <div class="profile-vision-mission">
            <div class="vm-card">
                <h3><i class="fa-solid fa-bullseye"></i> Visi</h3>
                <p>Menjadi program keahlian unggulan yang menghasilkan lulusan kompeten di bidang rekayasa perangkat lunak.</p>
            </div>
            <div class="vm-card">
                <h3><i class="fa-solid fa-list-check"></i> Misi</h3>
                <ul>
                    <li>Menyelenggarakan pembelajaran berbasis proyek dan industri.</li>
                    <li>Mengembangkan kompetensi siswa sesuai perkembangan teknologi.</li>
                    <li>Membangun kerja sama dengan dunia usaha dan industri (DUDI).</li>
                </ul>
            </div>
        </div>

        <div class="profile-competencies">
            <h2>Kompetensi Keahlian</h2>
            <div class="competency-grid">
                <div class="competency-card">
                    <i class="fa-solid fa-code"></i>
                    <h4>Pemrograman Web</h4>
                    <p>HTML, CSS, JavaScript, PHP, Laravel</p>
                </div>
                <div class="competency-card">
                <i class="fa-solid fa-desktop"></i>
                    <h4>Dekstop</h4>
                    <p>C#</p>
                </div>
                <div class="competency-card">
                    <i class="fa-solid fa-database"></i>
                    <h4>Basis Data</h4>
                    <p>MY SQL</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection