@extends('layouts.app')

@section('title','Homepage')

@section('content')
<!-- ============================================================================================= -->
<!-- sidebar -->
<div class="sidebar">
    <ul>
        <li class="list active">
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
                <span class="title">Pusat Unduhan</span>
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
            .grafik-nilai {
                width: 900px;
            }

            .bagianberitas {
                width: 900px;
            }

            .container1 {
                width: 1000px;
            }
        }
    </style>

    <!-- ====================================================================================== -->
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light sizebar">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2">
                    <h4>MOS</h4>
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

    <!-- ===================================================================== -->
    <!-- content 1 profile dan finansial -->


    <div class="container1">
        <div class="box">

            <!-- ==================== bagian profile======================== -->
            <div class="profile">
                <img src="/foto/profil.png" class="rounded-circle" height="105" alt="" loading="lazy" />
                <h4>{{$username}}</h4>
                @foreach($nis as $data)
                <h5>{{$data->nis}}</h5>
                @endforeach
                <h5>{{$email_login}}</h5>
            </div>
        </div>

        <!-- ====================== bagian finansial ========================== -->
        <div class="box">
            <div class="finansial_sebagian">
                <p style="text-align:left;">
                    Pembayaran
                    <a href="/orangTua/finansial"><span style="float:right;">
                            Lihat Semua >>>
                        </span></a>
                </p>

                <table class="table table-borderless">
                    <thead class="table-dark">
                        <tr>
                            <th>Pembayaran</th>
                            <th>Jatuh Tempo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($finansial as $data)
                        <tr>
                            <td>{{$data->nama_bayaran}}</td>
                            <td>{{$data->jatuh_tempo}}</td>
                            <td>{{$data->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <!-- enddd content 1 -->
    </div>


    <!-- bagian grafik nilai -->
    <div class="grafik-nilai ml-4 mr-4 mt-4 mb-3">
        <div class="card">
            <div class="card-header">
                Nilai
            </div>
            <div class="card-body">
                <div id="bar-chart">
                    <div class="row mt-4">
                        <div class="col-sm-11 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title" align="center">Grafik Nilai</h4>
                                    <canvas id="mataChart" class="chartjs" width="5000" height="4000"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <!-- ===================================================================== -->
    <!-- Berita -->

    <div class="bagianberitas">
        <h3 class="title_berita">Informasi</h3>

        <div class="listberita ml-4 mr-4 mb-5">
            <div class="owl-informasi owl-carousel owl-theme">
                @foreach ($berita as $data)
                <div class="item">
                    <div class="card mr-5" style="width: 416px; height: 400px; border-radius: 20px;">
                        <a href="{{route('orangTua.lihatberita', $data->id)}}" style="text-decoration: none; color: black;">
                            <img src="/foto/{{$data->foto}}" class="card-img-top" style="border-top-left-radius: 20px; border-top-right-radius: 20px;" alt="...">
                            <div class="card-body">
                                <div class="text-berita">
                                    <p class="card-text limit_berita_text">
                                        {{$data->isi}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--  -->



    <!-- end my-content / semua content -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js" integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    var ctx = document.getElementById("mataChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
            datasets: [{
                label: 'Nilai',
                backgroundColor: '#2E90E8',
                borderColor: '#93C3D2',
                data: [<?php echo json_encode($nilai_7_1); ?>, <?php echo json_encode($nilai_7_2); ?>, <?php echo json_encode($nilai_8_1); ?>,
                    <?php echo json_encode($nilai_8_2); ?>, <?php echo json_encode($nilai_9_1); ?>, <?php echo json_encode($nilai_9_2); ?>,
                ]
            }],
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        },
    });
</script>



@endsection