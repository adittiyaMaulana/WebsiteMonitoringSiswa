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
                    <h4>Data Siswa</h4>
                </a>
            </div>
<<<<<<< HEAD

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

=======

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
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>Admin</p>
                </a>

            </div>
        </div>
    </nav>
<<<<<<< HEAD

    <div class="navbar_pilihan mt-5 ml-3">
        <ul>
            <li><a class="active" href="/admin/data">Siswa</a></li>
            <li><a href="/admin/dataGuru">Guru</a></li>
            <li><a href="/admin/dataOrangtua">Orang Tua</a></li>
        </ul>
    </div>
=======
>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714

    <div class="navbar_pilihan mt-5 ml-3">
        <ul>
            <li><a class="active" href="/admin/data">Siswa</a></li>
            <li><a href="/admin/dataGuru">Guru</a></li>
            <li><a href="/admin/dataOrangtua">Orang Tua</a></li>
        </ul>
    </div>

<<<<<<< HEAD
    <!-- button -->
    <div class="button_area">
        <a href="#"><button type="button" class="btn btn-primary">Kirim<i class="bi bi-send-fill ml-4"></i></button></a>
        <a href="/admin/formData"><button type="button" class="btn btn-success">Tambah Data<i
                    class="bi bi-plus ml-2"></i></button></a>
    </div>

    <!-- table -->

=======

    <!-- button -->
    <div class="button_area">
        <a href="/admin/formData"><button type="button" class="btn btn-success">Tambah Data<i class="bi bi-plus ml-2"></i></button></a>
    </div>

    <!-- table -->

>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
    <div class="my-table mt-5 ml-3 mr-4 mb-5">
        <table id="tableAdmin" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
<<<<<<< HEAD
                    <th>ID</th>
                    <th>ID KELAS</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
=======
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Salary</th>
>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<<<<<<< HEAD
                @foreach($siswa as $data)
                <tr data-href="/admin/formUpdateDataGuru">
                    <td>
                        <p class="limit_kehadiran">{{ $data->id }}</p>
                    </td>
                    <td>
                        <p class="limit_kehadiran">{{ $data->id_kelas }}</p>
                    </td>
                    <td>
                        <p class="limit_kehadiran">{{ $data->nama }}</p>
                    </td>
                    <td>
                        <p class="limit_kehadiran">{{ $data->ttl }}</p>
                    </td>
=======
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>
                        <p class="limit_text">dfgsdfgsdfgherta rtearnrarbsjkabrjkbasjkrbjkasdjklrsdjkl</p>
                    </td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>

                <tr data-href="/admin/formUpdateData">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
                    <td>
                        <a href="#"><i class="bi bi-trash-fill" style="color: black;"></i></a>
                    </td>
                </tr>
<<<<<<< HEAD
                @endforeach
=======
>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
            </tbody>
        </table>
    </div>





    <!-- end my-content / semua content -->
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 2cab32ecbd7693ff081cf7893822e3999caa7714
