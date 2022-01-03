@extends('layouts.app')

@section('title','importData')

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
            <a href="/admin/beritaAdmin">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Berita</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/dokumenFiturBantuan">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Pusat Unduhan</span>
            </a>
        </li>

        <li class="list active">
            <a href="/admin/importData">
                <span class="icon">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                </span>
                <span class="title">importData</span>
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

    <style>
        @media screen and (max-width: 900px) {
            .importdata {
                width: 900px;
            }

        }
    </style>
    <!-- ====================================================================================== -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2">
                    <h4>Import Data</h4>
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

                <!-- gambar user -->
                <a class=" d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>Admin</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- vertical tab -->
    <div class=" importdata mr-4 ml-4 mt-5 mb-4">

        <div class="tab">
            <button class="tablinks" style="border-top-left-radius: 20px ;" onclick="openCity(event, 'orangTua')" id="defaultOpen">OrangTua</button>
            <button class="tablinks" onclick="openCity(event, 'Guru')">Guru</button>
            <button class="tablinks" onclick="openCity(event, 'Admin')">Admin</button>
            <button class="tablinks" onclick="openCity(event, 'Users')">Users</button>
            <button class="tablinks" onclick="openCity(event, 'Nilai')">Nilai</button>
            <button class="tablinks" onclick="openCity(event, 'JadwalKelas')">Jadwal Kelas</button>
            <button class="tablinks" onclick="openCity(event, 'JadwalAkaNoAka')">Jadwal Akademik / Non Akademik</button>
            <button class="tablinks" onclick="openCity(event, 'Kelas')">Kelas</button>
            <button class="tablinks" onclick="openCity(event, 'mapel')">Mata Pelajaran</button>
            <button class="tablinks" onclick="openCity(event, 'Finansial')">Finansial</button>
            <button class="tablinks" onclick="openCity(event, 'Siswa')">Siswa</button>
            <button class="tablinks" style="border-bottom-left-radius: 20px ;" onclick="openCity(event, 'Absensi')">Absensi</button>
        </div>

        <div id="orangTua" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Orang Tua</h4>
            <form class="was-validated" method="POST" action="{{ route('importOrangTua') }}" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Guru" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Guru</h4>
            <form class="was-validated" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Admin" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Admin</h4>
            <form class="was-validated" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Users" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Users</h4>
            <form class="was-validated" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Nilai" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Nilai</h4>
            <form class="was-validated" method="POST" action="{{ route('importNilai') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="JadwalKelas" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Jadwal Kelas</h4>
            <form class="was-validated">
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="JadwalAkaNoAka" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Jadwal Akademik / Non Akademik</h4>
            <form class="was-validated">
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Kelas" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Kelas</h4>
            <form class="was-validated" method="POST" action="{{ route('importKelas') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="mapel" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Mata Pelajaran</h4>
            <form class="was-validated" method="POST" action="{{ route('importMataPelajaran') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Finansial" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Finansial</h4>
            <form class="was-validated" method="POST" action="{{ route('importFinansial') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Siswa" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Siswa</h4>
            <form class="was-validated" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="Absensi" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Absensi</h4>
            <form class="was-validated" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>
    </div>

    <div style=" height: 900px;">
    </div>


    <!-- end my-content / semua content -->
</div>

@endsection