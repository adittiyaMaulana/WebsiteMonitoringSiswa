@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list active">
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
                    <h4>Pesan</h4>
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

    <!-- ===================================================================== -->
    <!-- content 1 profile dan kehadiran siswa -->

    <div class="container1">
        <div class="box">

            <!-- ==================== bagian profile======================== -->
            <div class="profile">
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="105" alt="" loading="lazy" />
                <h4>Username</h4>
                <h5 class="nis">Nomer induk guru</h5>
                <h5>Email</h5>

            </div>
        </div>

        <!-- ====================== kehadiran siswa ========================== -->
        <div class="box">
            <div class="kehadiran_sebagian">
                <p style="text-align:left;">
                    Kehadiran Siswa
                    <a href="/guru/kehadiranSiswa"><span style="float:right;">
                            Lihat Semua >>>
                        </span></a>
                </p>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>17283945</td>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>17283947</td>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>17283960</td>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <!-- enddd content 1 -->
    </div>

    <!-- ===================================================================== -->
    <!-- Nilai Siswa -->



    <!-- end my-content / semua content -->
</div>

@endsection