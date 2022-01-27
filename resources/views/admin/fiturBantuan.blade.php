@extends('layouts.app')

@section('title','Fitur Bantuan')

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

        <li class="list active">
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

        <li class="list">
            <a href="/admin/gantifoto">
                <span class="icon">
                    <ion-icon name="image-outline"></ion-icon>
                </span>
                <span class="title">Ganti Foto</span>
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
            .tabel {
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
                    <h4>Pusat Unduhan</h4>
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


    <!-- alert -->

    @if(session()->has('simpan'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show ml-4 mt-5 mr-4" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            {{ session()->get('simpan') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

    @elseif(session()->has('hapus'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show ml-4 mt-5 mr-4" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            {{ session()->get('hapus') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

    @endif

    <div class="ml-4 mt-5">
        <a href="{{ route('admin.tambahunduhan')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
    </div>


    <!-- table -->
    <div class="tabel mt-5 ml-4 mr-4">
        <table id="tableAdmin" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($unduhan as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{ number_format((float)$data->ukuran/1000, 2, '.', '')}} Kb</td>
                    <td>
                        <a href="/unduhan/{{$data->nama}}" class="btn btn-success" download><i class="far fa-download"></i> Download</a>
                        <a href="{{route('admin.hapusunduhan', $data->id)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- end my-content / semua content -->
</div>

@endsection