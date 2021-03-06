@extends('layouts.app')

@section('title','Jadwal Kelas')

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

        <li class="list active">
            <a href="/orangTua/jadwalPelajaran">
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

    <!-- ====================================================================================== -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2">
                    <h4>Jadwal Pelajaran</h4>
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

    <!-- navbar pilihan -->
    <div class="navbar_pilihan mt-5 ml-4">
        <ul>
            <li><a class="active" href="/orangTua/jadwalPelajaran">Pelajaran</a></li>
            <li><a href="/orangTua/kalenderAkademik">Kalender Akademik</a></li>
        </ul>
    </div>

    <!-- table -->

    <div class="my-table mt-5 ml-4 mr-4">
        <select class="form-select mb-5" aria-label="Default select example" id="hari">
            <option value="" selected>Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>

        <table id="tableOrangTua" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Jenis Pelajaran</th>
                    <th>Jam Pelajaran</th>
                    <th>Hari</th>
                </tr>
            </thead>
            <tbody id="jadwal">
                @forelse($jadwal as $data)
                <tr>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jenis}}</td>
                    <td>{{$data->jam_pelajaran}}</td>
                    <td>{{$data->hari}}</td>
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

<script>
	$(document).ready(function(){
		$('#hari').on('change', function(e){
			var id = e.target.value;
			$.get('{{ url("orangTua/filterjadwal")}}/'+id, function(data){
			console.log(id);
			console.log(data);
			$('#jadwal').empty();
			$.each(data, function(index, element){
				$('#jadwal').append("<tr><td>"+element.nama+"</td><td>"+element.jenis+"</td><td>"+element.jam_pelajaran+"</td><td>"+element.hari+"</td></tr>")
			});
			});
		});	
	});
</script>

@endsection