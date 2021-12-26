@extends('layouts.app')

@section('title','Berita')

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
    <div class="button_area">
        <a href="/admin/formBerita"><button type="button" class="btn btn-success">Tambah Data<i class="bi bi-plus ml-2"></i></button></a>
    </div>

    <!-- table -->
<div class="card-header">
                            <a href="{{ route('admin.tambahberita')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
    <div class="my-table mt-5 ml-3 mr-4">
        <!-- gk kepake -->
        <!-- <table id="tableAdmin" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($berita as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.lihatberita', $data->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                                                <a href="{{route('admin.editberita', $data->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('admin.hapusberita', $data->id)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
            </tbody>
        </table> -->

        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
            
            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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

            <a href="/admin/formUpdateBerita" style="text-decoration: none; color: black;">
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



        </div>
    </div>





    <!-- end my-content / semua content -->
</div>

@endsection