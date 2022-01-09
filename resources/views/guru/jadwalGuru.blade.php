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
                <span class="title">Pusat Unduhan</span>
            </a>
        </li>

        <li class="list active">
            <a href="/guru/jadwalAkadaNonAkaGuru">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list">
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
            .tabel {
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
                    <h4>Jadwal Mengajar</h4>
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
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt=""
                        loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>user</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- navbar pilihan -->
    <div class="navbar_pilihan mt-5 ml-4">
        <ul>
            <li><a class="active" href="/guru/jadwalGuru">Mengajar</a></li>
            <li><a href="/guru/jadwalAkadaNonAkaGuru">Akademik dan Non Akademik</a></li>
        </ul>
    </div>

    <div class="tabel mt-5 ml-4 mr-4">
        <select class="form-select mb-5" aria-label="Default select example" id="hari">
            <option value="" selected>Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>
        <table id="tableGuru" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Hari</th>
                    <th>Jam Pelajaran</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody id="jadwal_guru">
                @forelse ($jadwal_guru as $data)
                <tr>
                    <td>{{$data->hari }}</td>
                    <td>{{$data->jam_pelajaran}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->nama_kelas}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada jadwal</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <!-- end my-content / semua content -->
</div>
<script>
    $(document).ready(function() {
        $('#hari').on('change', function(e) {
            var id = e.target.value;
            $.get('{{ url("guru/filterJadwalGuru")}}/' + id, function(data) {
                console.log(id);
                console.log(data);
                $('#jadwal_guru').empty();
                $.each(data, function(index, element) {
                    $('#jadwal_guru').append("<tr><td>" + element.hari + "</td><td>" + element.jam_pelajaran + "</td><td>" + element.nama + "</td><td>" + element.nama_kelas + "</td></tr>")
                });
            });
        });
    });
</script>
@endsection
