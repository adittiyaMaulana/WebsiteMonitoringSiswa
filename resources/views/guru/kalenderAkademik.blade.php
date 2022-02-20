@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
    <li class="list">
            <a href="/guru/homepage_guru">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/daftarKelas_nilai">
                <span class="icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </span>
                <span class="title">Nilai Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/daftarKelas_absensi">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Kehadiran Siswa</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/pusatUnduhan">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Pusat Unduhan</span>
            </a>
        </li>

        <li class="list active">
            <a href="/guru/jadwalMengajar">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list">
            <a href="/guru/berita">
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
                <span class="title">Logout</span>
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
                    <h4>Kalender Akademik</h4>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon pengaduan -->
                <a class=" d-flex align-items-center mr-3 mt-2" href="/guru/saranDanMasukan">
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
                    <img src="/foto/profil.png" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>{{$username}}</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- navbar pilihan -->
    <div class="navbar_pilihan mt-5 ml-4">
        <ul>
            <li><a href="/guru/jadwalGuru">Mengajar</a></li>
            <li><a class="active" href="/guru/jadwalAkadaNonAkaGuru">Kalender Akademik</a></li>
        </ul>
    </div>

    <div class="tabel mt-5 ml-4 mr-4">
        <select class="form-select mb-5" aria-label="Default select example" id="periode">
            <option value="" selected>Pilih Periode</option>
            <option value="2020 - 2021">2020 / 2021</option>
            <option value="2021 - 2022">2021 / 2022</option>
        </select>
        <table id="tableGuru" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Kegiatan</th>
                    <th>Jadwal</th>
                    <th>Periode</th>
                </tr>
            </thead>
            <tbody id="jadwalAkademikNonAkademik">
                @forelse($jadwal as $data)
                <tr>
                    <td>{{$data->nama_kegiatan}}</td>
                    <td>{{$data->jadwal_kegiatan}}</td>
                    <td>{{$data->periode}}</td>
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
        $('#periode').on('change', function(e) {
            var id = e.target.value;
            $.get('{{ url("guru/filterJadwalAkaNonAka")}}/' + id, function(data) {
                console.log(id);
                console.log(data);
                $('#jadwalAkademikNonAkademik').empty();
                $.each(data, function(index, element) {
                    $('#jadwalAkademikNonAkademik').append("<tr><td>" + element.nama_kegiatan + "</td><td>" + element.jadwal_kegiatan + "</td><td>" + element.periode + "</td></tr>")
                });
            });
        });
    });
</script>

@endsection