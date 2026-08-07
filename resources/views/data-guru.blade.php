@extends('layouts.app-layout')

@section('title', 'Data Guru')

@section('content')
<section class="page-hero">
    <div class="page-hero-container">
        <h1 class="page-hero-title">Data Guru</h1>
        <p class="page-hero-subtitle">Daftar guru dan tenaga pengajar dijurusan RPL</p>
    </div>
</section>

<section class="data-content">
    <div class="data-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Taufik Dzikri pangestu</td>
                    <td><b>Produktif</b></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Retno Novia</td>
                    <td><b>Produktif</b></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Yani Yulyanti
    
                    </td>
                    <td><B>Produktif</B></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bu Elis</td>
                    <td>PAI</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pa Rizal</td>
                    <td>Kewirausahaan (KWU)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pa Dian</td>
                    <td>MPKK</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bu Retti</td>
                    <td>Matematika</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Bu Mulya</td>
                    <td>Bahasa Indonesia</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Bu Annia</td>
                    <td>Bahasa Inggris</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Bu Heni</td>
                    <td>PPKN</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Bu Septi</td>
                    <td>Bimbingan Konseling (BK)</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection