@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/guru/homepageGuru">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/nilaiSiswa">
                <span class="icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </span>
                <span class="title">Nilai Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/kehadiranSiswa">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Kehadiran Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/pusatBantuanGuru">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Pusat Bantuan</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/jadwalAkadaNonAkaGuru">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list active">
            <a href="/guru/beritaGuru">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Informasi</span>
            </a>
        </li>


        <li class="list">
            <a href="{{ route('login') }}" onclick="event.preven-tDefault();
                            document.getElementById('logout-form').submit();">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
                <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </li>

    </ul>
</div>

<!-- contentt -->

<div class="my-content">

    <!-- ====================================================================================== -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2">
                    <h4>Informasi</h4>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon pengaduan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/guru/saranDanMasukanGuru">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- Icon pesan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/guru/pesanGuru">
                    <span class="icon">
                        <ion-icon name="mail" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- gambar user -->
                <a class=" d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>user</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- table -->

    <div class="my-table mt-5 ml-4 mr-4">
        <table id="tableGuru" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>9-3</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>56</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>9-2</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>66</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>8-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>20</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>7-2</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>1</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/guru/beritaDetailGuru">
                    <td>9-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>6</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>

            </tbody>
        </table>
    </div>


    <!-- end my-content / semua content -->
</div>

@endsection