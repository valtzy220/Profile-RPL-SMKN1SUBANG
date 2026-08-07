@extends('layouts.app-layout')

@section('title', 'Mata Pelajaran')

@section('content')
<section class="page-hero">
    <div class="page-hero-container">
        <h1 class="page-hero-title">Jadwal Pelajaran</h1>
        <p class="page-hero-subtitle">Jadwal pelajaran kelas XII RPL 1</p>
    </div>
</section>

<section class="data-content">
    <div class="data-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Mata Pelajaran</th>
                    <th>Guru Pembimbing</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Senin</td>
                    <td>07.10 - 09.50</td>
                    <td>Produktif</td>
                    <td>Pa Dzikri</td>
                </tr>
                <tr>
                    <td>10.10 - 13.00</td>
                    <td>PAI</td>
                    <td>Bu Elis</td>
                </tr>
                <tr>
                    <td>13.00 - 15.00</td>
                    <td>Kewirausahaan (KWU)</td>
                    <td>Pa Rizal</td>
                </tr>

                <tr>
                    <td rowspan="3">Selasa</td>
                    <td>07.10 - 09.50</td>
                    <td>MPKK</td>
                    <td>Pa Dian</td>
                </tr>
                <tr>
                    <td>09.50 - 13.00</td>
                    <td>Matematika</td>
                    <td>Bu Retti</td>
                </tr>
                <tr>
                    <td>13.00 - 15.00</td>
                    <td>Bahasa Indonesia</td>
                    <td>Bu Mulya</td>
                </tr>

                <tr>
                    <td rowspan="3">Rabu</td>
                    <td>07.10 - 08.30</td>
                    <td>Bahasa Inggris</td>
                    <td>Bu Annia</td>
                </tr>
                <tr>
                    <td>08.30 - 13.40</td>
                    <td>Produktif</td>
                    <td>Bu Retno</td>
                </tr>
                <tr>
                    <td>13.40 - 15.00</td>
                    <td>PPKN</td>
                    <td>Bu Heni</td>
                </tr>

                <tr>
                    <td rowspan="3">Kamis</td>
                    <td>07.10 - 08.30</td>
                    <td>Bahasa Inggris</td>
                    <td>Bu Annia</td>
                </tr>
                <tr>
                    <td>08.30 - 11.30</td>
                    <td>Produktif</td>
                    <td>Bu Retno</td>
                </tr>
                <tr>
                    <td>12.20 - 15.00</td>
                    <td>Produktif</td>
                    <td>Bu Yani</td>
                </tr>

                <tr>
                    <td rowspan="3">Jumat</td>
                    <td>07.30 - 10.10</td>
                    <td>Produktif</td>
                    <td>Pa Dzikri</td>
                </tr>
                <tr>
                    <td>10.10 - 11.30</td>
                    <td>Bimbingan Konseling (BK)</td>
                    <td>Bu Septi</td>
                </tr>
                <tr>
                    <td>12.10 - 14.00</td>
                    <td>Kewirausahaan (KWU)</td>
                    <td>Pa Rizal</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection