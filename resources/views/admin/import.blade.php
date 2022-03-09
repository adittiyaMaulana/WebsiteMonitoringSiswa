@extends('layouts.app')

@section('title','importData')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
    <li class="list">
            <a href="/admin/homepage_admin">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/berita">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Berita</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/pusatUnduhan">
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
            <a href="/admin/hapusData">
                <span class="icon">
                    <ion-icon name="trash-outline"></ion-icon>
                </span>
                <span class="title">Hapus Data</span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/gantifoto">
                <span class="icon">
                    <ion-icon name="image-outline"></ion-icon>
                </span>
                <span class="title">Ubah Foto</span>
            </a>
        </li>

        <li class="list">
            <a href="{{ route('login') }}" onclick="event.preven-tDefault();
                            document.getElementById('logout-form').submit();">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Logout</span>
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
                <a class=" d-flex align-items-center mr-3 mt-2" href="/admin/saranDanMasukan">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- gambar user -->
                <a class=" d-flex align-items-center">
                    <img src="/foto/profil.png" class="rounded-circle" height="25" alt="" loading="lazy" />
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
    @if (session()->has('success'))
    <div class="alert alert-success">
    @if(is_array(session('success')))
        <ul>
            @foreach (session('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('success') }}
    @endif
    </div>
    @endif
    @if (session()->has('errors'))
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
        <div class="tab">
            <button class="tablinks" style="border-top-left-radius: 20px ;" onclick="openCity(event, 'orangTua')" id="defaultOpen">OrangTua</button>
            <button class="tablinks" onclick="openCity(event, 'Guru')">Guru</button>
            <button class="tablinks" onclick="openCity(event, 'Admin')">Admin</button>
            <button class="tablinks" onclick="openCity(event, 'Users')">Users</button>
            <button class="tablinks" onclick="openCity(event, 'Nilai')">Nilai</button>
            <button class="tablinks" onclick="openCity(event, 'DetailNilai')">Detail Nilai</button>
            <button class="tablinks" onclick="openCity(event, 'JadwalPelajaran')">Jadwal Pelajaran</button>
            <button class="tablinks" onclick="openCity(event, 'DetailJadwaPelajaran')">Detail Jadwa Pelajaran</button>
            <button class="tablinks" onclick="openCity(event, 'JadwalMengajar')">Jadwal Mengajar</button>
            <button class="tablinks" onclick="openCity(event, 'DetailJadwalMengajar')">Detail Jadwal Mengajar</button>
            <button class="tablinks" onclick="openCity(event, 'KalenderAkademik')">Kalender Akademik</button>
            <button class="tablinks" onclick="openCity(event, 'Kelas')">Kelas</button>
            <button class="tablinks" onclick="openCity(event, 'MataPelajaran')">Mata Pelajaran</button>
            <button class="tablinks" onclick="openCity(event, 'Finansial')">Finansial</button>
            <button class="tablinks" onclick="openCity(event, 'DetailFinansial')">Detail Finansial</button>
            <button class="tablinks" onclick="openCity(event, 'Siswa')">Siswa</button>
            <button class="tablinks" onclick="openCity(event, 'Absensi')">Absensi</button>
            <button class="tablinks" onclick="openCity(event, 'DetailAbsensi')">Detail Absensi</button>
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
            <form class="was-validated" method="POST" action="{{ route('importGuru') }}" enctype="multipart/form-data">
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
            <form class="was-validated" method="POST" action="{{ route('importAdmin') }}" enctype="multipart/form-data">
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
            <form class="was-validated" method="POST" action="{{ route('importUsers') }}" enctype="multipart/form-data">
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

        <div id="JadwalPelajaran" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Jadwal Pelajaran</h4>
            <form class="was-validated" method="POST" action="{{ route('importJadwalPelajaran') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="JadwalMengajar" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Jadwal Mengajar</h4>
            <form class="was-validated" method="POST" action="{{ route('importJadwalMengajar') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="KalenderAkademik" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Kalender Akademik</h4>
            <form class="was-validated" class="was-validated" method="POST" action="{{ route('importKalenderAkademik') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
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

        <div id="MataPelajaran" class="tabcontent">
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
            <form class="was-validated" method="POST" action="{{ route('importSiswa')}}" enctype="multipart/form-data">
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
            <form class="was-validated" method="POST" action="{{ route('importAbsensi') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="DetailAbsensi" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Detail Absensi</h4>
            <form class="was-validated" method="POST" action="{{ route('importDetailAbsensi') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="DetailFinansial" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Detail Finansial</h4>
            <form class="was-validated" method="POST" action="{{ route('importDetailFinansial') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="DetailJadwalPelajaran" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Detail Jadwal Pelajaran</h4>
            <form class="was-validated" method="POST" action="{{ route('importDetailJadwalPelajaran') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="DetailJadwalMengajar" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Detail Mengajar</h4>
            <form class="was-validated" method="POST" action="{{ route('importDetailJadwalMengajar') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control mb-3" type="file" name="file" id="formFile" required>
                    <button class="btn btn-success">Import Data</button>
                </div>
            </form>
        </div>

        <div id="DetailNilai" class="tabcontent">
            <div class="ml-3 mr-3 mt-5"></div>
            <h4 class="mb-5">Import Data Detail Nilai</h4>
            <form class="was-validated" method="POST" action="{{ route('importDetailNilai') }}" enctype="multipart/form-data">
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