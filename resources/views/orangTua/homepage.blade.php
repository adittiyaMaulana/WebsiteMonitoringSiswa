@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list active">
            <a href="/orangTua/homepage">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/jadwalKelas">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/finansial">
                <span class="icon">
                    <ion-icon name="wallet-outline"></ion-icon>
                </span>
                <span class="title">Finansial</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/berita">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Berita</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/nilai">
                <span class="icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </span>
                <span class="title">Nilai</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/kehadiran">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Kehadiran</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/fiturBantuan">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Fitur Bantuan</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/tentangSekolah">
                <span class="icon">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                </span>
                <span class="title">Tentang</span>
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
                    <h4>MOS</h4>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon pengaduan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/orangTua/saranDanMasukan">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- Icon pesan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/orangTua/pesan">
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
    <!-- content 1 profile dan finansial -->

    <div class="container1">
        <div class="box">

            <!-- ==================== bagian profile======================== -->
            <div class="profile">
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="105" alt="" loading="lazy" />
                <h4>Username</h4>
                <h5 class="nis">NIS</h5>
                <h5>Email</h5>

            </div>
        </div>

        <!-- ====================== bagian finansial ========================== -->
        <div class="box">
            <div class="finansial_sebagian">
                <p style="text-align:left;">
                    History Pembayaran
                    <a href="/orangTua/finansial"><span style="float:right;">
                            Lihat Semua >>>
                        </span></a>
                </p>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>17283945</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>17283947</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="limit_kehadiran">teeeeeeeeeeeeeeeeeeeeeeeeeeeeees</p>
                            </td>
                            <td>17283960</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <!-- enddd content 1 -->
    </div>

    <!-- ===================================================================== -->
    <!-- Berita -->

    <h3 class="title_berita">Berita</h3>

    <div class="berita ml-4 mr-4">
        <div class="card mr-5" style="width: 416px; height: 400px; border-radius: 20px;">
            <img src="{{ asset('image/school1.jpg')}}" class="card-img-top" style="border-top-left-radius: 20px; border-top-right-radius: 20px;" alt="...">
            <div class="card-body">
                <div class="text-berita">
                    <p class="card-text limit_berita_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorum sed sapiente aut, nihil inventore tempore quidem consectetur autem iste molestiae
                        aliquid quisquam, itaque eaque dolore odit, numquam voluptatum reprehenderit eveniet.</p>
                </div>
            </div>
        </div>

        <div class="card mr-5" style="width: 416px; height: 400px; border-radius: 20px;">
            <img src="{{ asset('image/school1.jpg')}}" class="card-img-top" style="border-top-left-radius: 20px; border-top-right-radius: 20px;" alt="...">
            <div class="card-body">
                <div class="text-berita">
                    <p class="card-text limit_berita_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorum sed sapiente aut, nihil inventore tempore quidem consectetur autem iste molestiae
                        aliquid quisquam, itaque eaque dolore odit, numquam voluptatum reprehenderit eveniet.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- end my-content / semua content -->
</div>

@endsection