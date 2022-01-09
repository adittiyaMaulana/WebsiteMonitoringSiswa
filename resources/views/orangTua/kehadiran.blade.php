@extends('layouts.app')

@section('title','Kehadiran')

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

        <li class="list active">
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
                <span class="title">Pusat Unduhan</span>
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
                    <h4>Kehadiran</h4>
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
                    <p>user</p>
                </a>

            </div>
        </div>
    </nav>

    <!-- table -->

    <div class="my-table mt-5 ml-4 mr-4">

        <select class="form-select mb-5" aria-label="Default select example" id="semester">
            <option selected>Pilih Semester</option>
            <option value="71">Kelas 7 Semester Ganjil</option>
            <option value="72">Kelas 7 Semester Genap</option>
            <option value="81">Kelas 8 Semester Ganjil</option>
            <option value="82">Kelas 8 Semester Genap</option>
            <option value="91">Kelas 9 Semester Ganjil</option>
            <option value="92">Kelas 9 Semester Genap</option>
        </select>

        <table id="tableOrangTua" class="table table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Bulan</th>
                    <th>Kehadiran</th>
                    <th>Alpa</th>
                    <th>Sakit</th>
                    <th>Izin</th>
                </tr>
            </thead>
            <tbody id="absensi">
                @forelse($absensi as $data)
                <tr>
                    <td>{{$data->bulan }}</td>
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


<script>
	$(document).ready(function(){
		$('#semester').on('change', function(e){
			var id = e.target.value;
			$.get('{{ url("orangTua/filterabsensi")}}/'+id, function(data){
			console.log(id);
			console.log(data);
			$('#absensi').empty();
			$.each(data, function(index, element){
				$('#absensi').append("<tr><td>"+element.bulan+"</td><td>"+element.kehadiran+"</td><td>"+element.alpa+"</td><td>"+element.sakit+"</td><td>"+element.izin+"</td></tr>")
			});
			});
		});	
	});
</script>

@endsection