@extends('layouts.app')

@section('title','Homepage')

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

        <li class="list">
            <a href="/admin/importData">
                <span class="icon">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                </span>
                <span class="title">importData</span>
            </a>
        </li>

        <li class="list active">
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
                <span class="title">Sign Out</span>
                <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </li>

    </ul>
</div>

<div class="my-content">


    <style>
        @media screen and (max-width: 900px) {
            .gantifoto {
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
                    <h4>Ubah Foto Login</h4>
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
                    <img src="/foto/profil.png" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>Admin</p>
                </a>

            </div>
        </div>
    </nav>

    @if(session()->has('ubah'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show ml-4 mt-5 mr-4" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            {{ session()->get('ubah') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    <div class="gantifoto mt-5 ml-3 mr-4">
        <!-- <div class="col-md-8 col-sm-12 bg-white p-4"> -->
            @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
            @endif
            <form class="was-validated" method="post" action="{{route('admin.savefoto')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Upload Gambar (Hanya JPG, JPEG, PNG)</label>
                    <input type="file" name="file" class="form-control" required>
                </div>
                <div class="form-group">

                    <input type="submit" class="form-control btn btn-primary" value="Simpan">
                </div>
                
            </form>
        <!-- </div> -->
    </div>
    <!-- end my-content / semua content -->
</div>


@endsection