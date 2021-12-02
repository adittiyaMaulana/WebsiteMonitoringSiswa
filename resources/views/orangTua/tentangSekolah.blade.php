@extends('layouts.app')

@section('title','Tentang Sekolah')

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
            <a href="/orangTua/jadwalKelas">
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

        <li class="list">
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

        <li class="list active">
            <a href="/orangTua/tentangSekolah">
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

    <div class="tentangSekolah mr-4 ml-4">
        <!-- gambar -->
        <div class="gambar">
            <img class=" mt-3 mr-3" src="{{asset('image/school1.jpg')}}" alt="">
        </div>

        <!-- tentang sekolah -->
        <div class="container-tentang-sekolah">
            <div class="box-tentang-sekolah">
                <div class="center">
                    <p>Tentang Kami</p>
                </div>
            </div>

            <div class="box-tentang-sekolah">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga aperiam soluta laudantium numquam nam asperiores quidem, eveniet dolor atque ducimus at ullam saepe? Vero magnam, quod odit dolore quidem illum.
                    Odio inventore ut dolor reprehenderit quae! Libero quisquam cum cumque saepe vel, dolores labore neque consequuntur alias tempora obcaecati, sed explicabo totam repudiandae molestiae consectetur, veritatis suscipit iure facilis nulla?</p>
            </div>
        </div>


        <!-- visi misi -->
        <div class="visi-misi">
            <div class="box-visi-misi">
                <div class="judul-visi-misi">
                    <p>Visi</p>
                </div>

                <div class="isi-visi-misi">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat corporis voluptas quam at pariatur dolorem nemo atque, laborum id molestiae assumenda animi! Voluptatum excepturi pariatur perspiciatis, repudiandae vel suscipit.</p>
                </div>
            </div>

            <div class="box-visi-misi">
                <div class="judul-visi-misi">
                    <p>Misi</p>
                </div>

                <div class="isi-visi-misi">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia cum soluta sed eos porro laborum, quas quod cumque debitis sunt? Ullam, qui ad! Natus nostrum minus nam voluptatibus placeat possimus?
                </div>
            </div>

        </div>

        <div class="struktur-organisasi">
            <p>Struktur organisasi</p>



        </div>
    </div>


</div>

@endsection