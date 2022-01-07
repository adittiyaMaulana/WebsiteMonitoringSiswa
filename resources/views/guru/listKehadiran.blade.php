@extends('layouts.app')

@section('title','Nilai')

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

        <li class="list active">
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
                <span class="title">Pusat Unduhan</span>
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

        <li class="list ">
            <a href="/guru/beritaGuru">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Berita</span>
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
            .detail-nilai-siswa {
                width: 1000px;
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
                    <h4>Nilai</h4>
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

    <div class="detail-nilai-siswa">
        <div class="my-table mt-5 ml-4 mr-4 mb-5">
    
    
            <p>Nama : {{$siswa->nama}}</p>
            <table id="nilai" class="table table-hover" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>Bulan</th>
                        <th>Kehadiran</th>
                        <th>Alpa</th>
                        <th>Sakit</th>
                        <th>Izin</th>
                    </tr>
                </thead>
                <tbody id="nilai">
    
                    @forelse ($absen as $data)
                    <tr>
                        <td>{{$data->bulan}}</td>
                        <td>{{$data->kehadiran}}</td>
                        <td>{{$data->alpa}}</td>
                        <td>{{$data->sakit}}</td>
                        <td>{{$data->izin}}</td>
    
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
    
                </tbody>
            </table>
    
    
    
    
        </div>
    </div>



</div>

</div>

<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        $('#sem').on('change', function(e) {
            var id = e.target.value;
            $.get('{{ url("orangTua / filternilai ")}}/' + id,
                function(data) {
                    console.log(id);
                    console.log(data);
                    $('#nilai').empty();
                    $.each(data, function(index, element) {
                        $('#nilai').append("<tr><td>" + element.kelas + "</td><td>" + element.semester + "</td><td>" + element.nama + "</td><td>" + element.nilai_tugas + "</td><td>" + element.nilai_uts + "</td><td>" + element.nilai_uas + "</td></tr>")
                    });
                });
        });
    });
</script>
@endsection