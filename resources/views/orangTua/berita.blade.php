@extends('layouts.app')

@section('title','Berita')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/orangTua/homepage">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/jadwal">
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

        <li class="list active">
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

        <!-- <li class="list">
            <a href="/orangTua/tentangSekolah">
                <span class="icon">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                </span>
                <span class="title">Tentang</span>
            </a>
        </li> -->

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
                    <h4>Pengumuman</h4>
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

    <!-- table -->

    <div class="my-table mt-5 ml-4 mr-4">
        <!-- <table id="tableOrangTua" class="table table-hover" style="width:100%">
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
                <tr data-href="/orangTua/beritaDetail">
                    <td>7-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>67</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/orangTua/beritaDetail">
                    <td>9-3</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>56</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/orangTua/beritaDetail">
                    <td>9-2</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>66</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/orangTua/beritaDetail">
                    <td>8-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>20</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/orangTua/beritaDetail">
                    <td>7-2</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>1</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr data-href="/orangTua/beritaDetail">
                    <td>9-1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>6</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>

            </tbody>
        </table> -->

        <!-- <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('image/logo.png')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
            <!-- <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div> -->

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural hjdbnf sdjbfhjksd bnfsdjkbfjksdlead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/orangTua/beritaDetail" style="text-decoration: none; color: black;">
                <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

 
            <!-- <div class="card mb-3 ml-4" style="width: 540px; height: 165px;">
                <div class="row g-0" data-href="/orangTua/beritaDetail">
                    <div class="col-md-4">
                        <img src="{{asset('image/school1.jpg')}}" class="img-fluid" style="height: 164px; margin-left: -12px;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div> -->



        </div>
    </div>

</div>


@endsection