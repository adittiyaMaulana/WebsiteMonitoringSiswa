@extends('layouts.app')

@section('title','Berita')

@section('content')

<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/admin/admin/homepageAdmin">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list active">
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
                <span class="title">Fitur Bantuan</span>
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

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>Admin</p>
                </a>

            </div>
        </div>
    </nav>


    <!-- buttonn -->
    <!-- <div class="button_area">
        <a href="/admin/formBerita"><button type="button" class="btn btn-success">Tambah Data<i class="bi bi-plus ml-2"></i></button></a>
    </div> -->

    <!-- table -->

    <div class="my-table mt-5 ml-3 mr-4">
        <table id="tableAdmin" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Salary</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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
                <tr data-href="/admin/formUpdateBerita">
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

            </tbody>
        </table>
    </div>





    <!-- end my-content / semua content -->
</div>

@endsection