<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/content.css')}}">
    <link rel="stylesheet" href="css/orangtua/detailBerita.css">


    <title>Detail Berita</title>
</head>

<body>
    <!-- ============================================================================================= -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li class="list">
                <a href="/homepage">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li class="list">
                <a href="/jadwal">
                    <span class="icon">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                    <span class="title">Jadwal</span>
                </a>
            </li>

            <li class="list">
                <a href="/finansial">
                    <span class="icon">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </span>
                    <span class="title">Finansial</span>
                </a>
            </li>

            <li class="list active">
                <a href="/berita">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Berita</span>
                </a>
            </li>

            <li class="list">
                <a href="/nilai">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Nilai</span>
                </a>
            </li>

            <li class="list">
                <a href="/kehadiran">
                    <span class="icon">
                        <ion-icon name="create-outline"></ion-icon>
                    </span>
                    <span class="title">Kehadiran</span>
                </a>
            </li>

            <li class="list">
                <a href="/fiturBantuan">
                    <span class="icon">
                        <ion-icon name="download-outline"></ion-icon>
                    </span>
                    <span class="title">Fitur Bantuan</span>
                </a>
            </li>

            <li class="list">
                <a href="/tentangSekolah">
                    <span class="icon">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Tentang</span>
                </a>
            </li>

            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
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
                        <h4>Detail Pengumuman</h4>
                    </a>
                </div>

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon pengaduan -->
                    <a class=" d-flex align-items-center mr-3 mt-2" href="/saranDanMasukan">
                        <span class="icon">
                            <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                        </span>
                    </a>

                    <!-- Icon pesan -->
                    <a class=" d-flex align-items-center mr-3 mt-2" href="/pesan">
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

        <!-- detail beritanya -->
        <div class="berita ml-4 mr-5">

            <!-- gambar default -->
            <img class="gambar" src="image/school1.jpg" alt="">

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

    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>