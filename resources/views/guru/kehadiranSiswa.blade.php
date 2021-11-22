@extends('layouts.default')

@section('title','Kehadiran Siswa')

@section('content')
    <!-- ============================================================================================= -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li class="list">
                <a href="/homepageGuru">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li class="list">
                <a href="/nilaiSiswa">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Nilai Siswa</span>
                </a>
            </li>

            <li class="list active">
                <a href="/kehadiranSiswa">
                    <span class="icon">
                        <ion-icon name="create-outline"></ion-icon>
                    </span>
                    <span class="title">Kehadiran Siswa</span>
                </a>
            </li>


            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
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
                        <h4>Kehadiran Siswa</h4>
                    </a>
                </div>

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon pengaduan -->
                    <a class=" d-flex align-items-center mr-3 mt-2" href="/saranDanMasukanGuru">
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
                        <p>user</p>
                    </a>

                </div>
            </div>
        </nav>

        <!-- table -->

        <div class="my-table mt-5 ml-3 mr-3">
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
                    <tr data-href="/updatekehadiranSiswa">
                        <td>7-1</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>67</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-href="/updatekehadiranSiswa">
                        <td>9-3</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>56</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-href="/updatekehadiranSiswa">
                        <td>9-2</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>66</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-href="/updatekehadiranSiswa">
                        <td>8-1</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>20</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-href="/updatekehadiranSiswa">
                        <td>7-2</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>1</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-href="/updatekehadiranSiswa">
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