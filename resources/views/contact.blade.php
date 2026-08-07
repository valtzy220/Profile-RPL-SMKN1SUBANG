@extends('layouts.app-layout')

@section('title', 'Contact')

@section('content')
<section class="contact-hero">
    <div class="contact-hero-container">
        <h1 class="contact-hero-title">Hubungi Kami</h1>
        <p class="contact-hero-subtitle">Ada pertanyaan atau ingin tahu lebih lanjut? Silakan hubungi kami.</p>
    </div>
</section>

<section class="contact-content">
    <div class="contact-container">
        <div class="contact-info">
            <h3>Informasi Kontak</h3>

            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>Jalan Arief Rahman Hakim No. 35, Kelurahan Cigadung, Kecamatan Subang, Kabupaten Subang, Provinsi Jawa Barat</span>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <span>(0260) 411410</span>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <span>info@smkn1subang.sch.id</span>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-globe"></i>
                <span>www.smkn1subang.sch.id</span>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-clock"></i>
                <span>Senin - Jumat, 07.00 - 15.00 WIB</span>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-instagram"></i>
                <span>@smkn1subang</span>
            </div>
        </div>
    </div>
</section>
@endsection