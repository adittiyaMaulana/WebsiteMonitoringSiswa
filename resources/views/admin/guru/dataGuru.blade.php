@extends('layouts.app')

@section('title','Data Siswa')

@section('content')

<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/admin/homepageAdmin">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/jadwalKelasSiswa">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/finansialSiswa">
                <span class="icon">
                    <ion-icon name="wallet-outline"></ion-icon>
                </span>
                <span class="title">Finansial</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/beritaAdmin">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Berita</span>
            </a>
        </li>

        <li class="list active">
            <a href="/admin/data">
                <span class="icon">
                    <ion-icon name="clipboard-outline"></ion-icon>
                </span>
                <span class="title">Data</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/dokumenFiturBantuan">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Fitur Bantuan</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/tentangSekolahAdmin">
                <span class="icon">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                </span>
                <span class="title">Tentang</span>
            </a>
        </li>

        <li class="list">
            <a class="nav-link" href="{{ route('login') }}" onclick="event.preven-tDefault();
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
                    <h4>Data Guru</h4>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon pengaduan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/admin/saranDanMasukanAdmin">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- Icon pesan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/admin/pesanAdmin">
                    <span class="icon">
                        <ion-icon name="mail" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- gambar user -->
                <a class=" d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt=""
                        loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>Admin</p>
                </a>

            </div>
        </div>
    </nav>

    <div class="navbar_pilihan mt-5 ml-3">
        <ul>
            <li><a href="/admin/data">Siswa</a></li>
            <li><a class="active" href="/admin/dataGuru">Guru</a></li>
            <li><a href="/admin/dataOrangtua">Orang Tua</a></li>
        </ul>
    </div>


    <!-- button -->
    <div class="button_area">
        <a href="#"><button type="button" class="btn btn-primary">Kirim<i class="bi bi-send-fill ml-4"></i></button></a>
        <a href="/admin/formDataGuru"><button type="button" class="btn btn-success">Tambah Data<i
                    class="bi bi-plus ml-2"></i></button></a>
    </div>

    <!-- table -->

    <div class="my-table mt-5 ml-3 mr-4 mb-5">
        <table id="tableAdmin" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Guru</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Alamat Tinggal</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guru as $data)
                    <tr data-href="/admin/formUpdateDataGuru">
                        <td>{{ $data->id }}</td>
                        <td>
                            <p class="limit_kehadiran">{{ $data->nama }}</p>
                        </td>
                        <td>
                            <p class="limit_kehadiran">{{ $data->ttl }}</p>
                        </td>
                        <td>
                            <p class="limit_kehadiran">{{ $data->email }}</p>
                        </td>
                        <td>
                            <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>





    <!-- end my-content / semua content -->
</div>
@endsection
