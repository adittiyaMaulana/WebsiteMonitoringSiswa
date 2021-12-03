@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/guru/homepageGuru">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/nilaiSiswa">
                <span class="icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </span>
                <span class="title">Nilai Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/kehadiranSiswa">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Kehadiran Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/pusatBantuanGuru">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Pusat Bantuan</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/jadwalAkadaNonAkaGuru">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list active">
            <a href="/guru/beritaGuru">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Informasi</span>
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
                    <h4>Detail Informasi</h4>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon pengaduan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/guru/saranDanMasukanGuru">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                    </span>
                </a>

                <!-- Icon pesan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/guru/pesanGuru">
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


    <div class="detailInformasi ml-4 mr-5 mt-5">
        <img src="{{asset('image/school1.jpg')}}" class="gambarInformasi" alt="">
        <!-- judul berita -->
        <p class="judulBerita">Ini Judul Berita Ya Kawan</p>

        <!-- tanggal publishnya -->
        <p class="tanggal">tanggal</p>

        <!-- ucapan awal -->
        <p class="ucapanAwal">Dear Orang Tua,</p>

        <!-- isi beritanya -->
        <p class="isiBerita">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi libero ad laborum ab officiis ipsum, officia, magni repellendus alias quasi earum laudantium mollitia eligendi unde aliquid corrupti, voluptatibus autem quaerat!
            Tempora nobis facere optio illo, quas doloribus voluptatibus, rem nesciunt eius in autem, est officiis! Voluptatem distinctio, nihil modi consequuntur eius esse enim vitae labore minima nostrum facilis laborum quidem.
            Aliquam, beatae! Provident cum incidunt, cumque at quibusdam perferendis accusantium praesentium aspernatur dignissimos? Earum nulla illo, neque hic incidunt natus possimus suscipit quibusdam et voluptas dolorum accusamus expedita! Ab, repellendus.
            Recusandae atque iusto maxime aut quis architecto consequuntur, assumenda dolorum, distinctio aliquid placeat fugiat optio quidem esse delectus quibusdam. Velit at possimus voluptatum aut voluptatem. Praesentium molestias minima fuga doloribus?
            Quia saepe soluta voluptatem aut facere accusamus corrupti ex mollitia pariatur commodi harum vitae, modi, quas architecto dolorem repellendus accusantium quo ab, blanditiis ratione recusandae natus aperiam eveniet. Pariatur, ea.
            Debitis quaerat at ratione aliquam autem quia cupiditate tempora deleniti ducimus neque minima, eveniet dolore laboriosam. Nesciunt accusamus sunt quae natus explicabo, nisi vero hic velit. Impedit nobis atque unde.
            Accusantium neque sunt corporis. Voluptate tenetur facilis vitae, unde asperiores adipisci cum! Hic velit quisquam qui officia quasi architecto sapiente aliquam? Quia explicabo, hic magnam dolorum ducimus est alias culpa.
        </p>

        <!-- ucapan terimakasih (biarin aja ini)-->
        <p class="terimakasih">Terimakasih,</p>

        <!-- user pengirim -->
        <p class="pengirim">Tata Usaha Sekolah</p>

    </div>

    <!-- end my-content / semua content -->
</div>

@endsection