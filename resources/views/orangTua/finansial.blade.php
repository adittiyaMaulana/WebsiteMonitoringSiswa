@extends('layouts.app')

@section('title','Finansial')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list">
            <a href="/orangTua/homepage_ortu">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/jadwalPelajaran">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Jadwal</span>
            </a>
        </li>

        <li class="list active">
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
            <a href="/orangTua/daftarNilai">
                <span class="icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </span>
                <span class="title">Nilai</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/absensi">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Kehadiran</span>
            </a>
        </li>

        <li class="list">
            <a href="/orangTua/pusatUnduhan">
                <span class="icon">
                    <ion-icon name="download-outline"></ion-icon>
                </span>
                <span class="title">Pusat Unduhan</span>
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
            .finansial {
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
                    <h4>Pembayaran Sekolah</h4>
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


    <div class="finansial">
        <div class="my-table mt-5 ml-4 mr-4">
    
            <select class="form-select mb-5" aria-label="Default select example" id="status">
                <option value="" selected>Pilih Status</option>
                <option value="terbayar">Sudah dibayar</option>
                <option value="belum terbayar">Belum dibayar</option>
            </select>
    
            <table id="tableOrangTua" class="table table-hover" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>Pembayaran</th>
                        <th>Jumlah</th>
                        <th>Jatuh Tempo</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="finansial">
                    @forelse ($finansial as $data)
                    <tr>
                        <td>{{$data->nama_bayaran }}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->jatuh_tempo}}</td>
                        <td>{{$data->status}}</td>
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

<script>
    $(document).ready(function() {
        $('#status').on('change', function(e) {
            var id = e.target.value;
            $.get('{{ url("orangTua/filterfinansial")}}/' + id, function(data) {
                console.log(id);
                console.log(data);
                $('#finansial').empty();
                $.each(data, function(index, element) {
                    $('#finansial').append("<tr><td>" + element.nama_bayaran + "</td><td>" + element.jumlah + "</td><td>" + element.jatuh_tempo + "</td><td>" + element.status + "</td></tr>")
                });
            });
        });
    });
</script>
@endsection