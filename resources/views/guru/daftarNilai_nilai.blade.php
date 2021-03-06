@extends('layouts.app')

@section('title','Nilai Siswa')

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

        <li class="list active">
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

        <li class="list">
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
                    <img src="/foto/profil.png" class="rounded-circle" height="25" alt="" loading="lazy" />
                </a>

                <!-- nama user -->
                <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                    <p>{{$username}}</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- table -->

    <div class="detail-nilai-siswa">
        <div class="my-table mt-5 ml-4 mr-4 mb-5">
    
    
            <p>Nama : {{$siswa->nama}}</p>
            <table id="tableGuru" class="table table-hover" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th>Mapel</th>
                        <th>N. Tugas</th>
                        <th>N. UTS</th>
                        <th>N. UAS</th>
                    </tr>
                </thead>
                <tbody id="nilai">
    
                    @forelse ($nilai as $data)
                    <tr>
                        <td>{{$data->kelas}}</td>
                        <td>{{$data->semester}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nilai_tugas}}</td>
                        <td>{{$data->nilai_uts}}</td>
                        <td>{{$data->nilai_uas}}</td>
    
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

<script>
    $(document).ready(function() {
        $('#sem').on('change', function(e) {
            var id = e.target.value;
            $.get('{{ url("orangTua/filternilai")}}/' + id,
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