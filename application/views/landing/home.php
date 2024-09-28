<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="minurulhuda, nurul huda, yapinda, bandung, kota bandung">
    <meta name="copyright" content="efrizalnf|zlztech 2020">
    <meta name="author" content="efrizalnf|zlztech 2020">
    <meta name="url" content="https://www.everyzalz.blogspot.com">
    <link rel="icon" href="<?php echo base_url()?>assets/landing/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/w3.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/leaflet/leaflet.css">
    <script src="<?= base_url()?>assets/leaflet/leaflet.js"></script>
    <title><?= $profile->nama_madrasah?></title>
</head>

<body onload="hideloader();">
    <div class="loading overlay">
        <div class="ldio-ohmxfizoh9a">
            <div></div>
            <div></div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- <div class="loader">
    <div class="circle"></div><div class="circle"></div><div class="circle"></div></div>
    -->
    <!--     <div class="loader">
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <div class="section-home" id="section-home">
        <a id="scroll-top" href="#section-home"><i class="fas fa-angle-up m-auto"></i></a>
        <div class="nav-header d-flex flex-row justify-content-stretch align-items-center">
            <div class="top-contact mr-auto ml-4">
                <ul class="list-inline">
                    <li class="list-inline-item pl-3 pr-0"><a href="tel:+622<?= $profile->phone?>" target="_blank"><i
                                class="fas fa-phone"></i>-</a>
                    </li>
                    <li class="list-inline-item pl-3 pr-0"><a href="mailto:<?= $profile->email?>" target="_blank"><i
                                class="fas fa-envelope"></i><?= $profile->email?></a>
                    </li>
                </ul>
            </div>
            <div class="top-sosmed justify-content-end mr-5">
                <ul class="list-inline">
                    <li class="list-inline-item pl-3 pr-0"><a href="<?= $profile->link_fb?>"
                            target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item pl-3 pr-0"><a href="<?= $profile->link_youtube?>"
                            target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top w-100">
            <div class="navbar-toggler-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="top-header">
                <a href="<?php echo base_url('enhas/index')?>" class="navbar-brand ml-3 mt-2">
                    <img src="<?php echo base_url()?>assets/landing/img/<?= $profile->logo_sekolah?>" class="ml-15 mr-2" width="49"
                        height="49">
                    <div class="nav-text">
                        <ul class="list-unstyled ">
                            <li>
                                <h5 class="font-weight-bold brand"><?= $profile->nama_madrasah?></h5>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse flex-column" id="navbar">
                <ul class="navbar-nav w-100 justify-content-end px-3">
                    <li class="nav-item bg-success rounded text-warning active mr-1">
                        <a class="nav-link font-weight-bold" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://minurulhuda.sch.id" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu w3-animate-zoom" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#section-profil" class="page-scroll">Profil</a>
                            <a class="dropdown-item" href="#section-sejarah" class="page-scroll">Sambutan Kamad</a>
                            <a class="dropdown-item" href="#section-fasilitas" class="page-scroll">Fasilitas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="false" aria-expanded="false">
                            Direktori
                        </a>
                        <div class="dropdown-menu w3-animate-zoom" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('enhas/dirguru')?>">Direktori Guru</a>
                            <a class="dropdown-item" href="#">Direktori Siswa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://ppdb.yapinda.online/" target="_blank">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-gallery" class="page-scroll">Galeri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu w3-animate-zoom" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('enhas/informasi')?>">Pengumuman</a>
                            <a class="dropdown-item" href="<?php echo base_url('enhas/download')?>">File Download</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            eNHa Apps
                        </a>
                        <div class="dropdown-menu w3-animate-zoom" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://ard.minurulhuda.sch.id/portal/login/mi"
                                target="_blank">ARD</a>
                            <a class="dropdown-item" href="http://cbt.minurulhuda.sch.id/" target="_blank">eNHa-CBT</a>
                            <a class="dropdown-item" href="http://elearning.minurulhuda.sch.id/"
                                target="_blank">eNHa-Learning</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="carousel-atas w-100" id="carousel-atas">
            <div class="carousel-enha ">
                <section class="use" id="carouse">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="7000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-layer"></div>
                                <img src="<?php echo base_url() . 'assets/landing/img/' . $coverfirst->img_cover?>"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption satu">
                                    <h3><?= $coverfirst->txt_title ?></h3>
                                    <p><?= $coverfirst->txt_desc ?></p>
                                    <hr class="line-1">
                                    <!-- <button type="button" href="#section-profil" class="btn font-weight-bold btn-sm">TENTANG
                                    KAMI</button> -->
                                   <!-- <a href="#section-profil" class="btn font-weight-bold btn-sm">TENTANG
                                        KAMI</a> -->
                                    </div>
                                </div>
                                <?php foreach($cover as $item) :?>

                                <div class="carousel-item">
                                    <div class="carousel-layer"></div>
                                    <img src="<?php echo base_url() . 'assets/landing/img/'.$item['img_cover'];?>"
                                        class="d-block w-100" alt="...">
                                    <div class="carousel-caption dua">
                                        <h3><?= $item['txt_title'] ?></h3>
                                        <p><?= $item['txt_desc'] ?></p>
                                        <!-- <p>Ayo Buruan daftar..!!</p> -->
                                        <hr class="line-1">
                                        <!-- <a href="http://ppdb.yapinda.online" target="blank"
                                        class="btn font-weight-bold btn-lg">DAFTAR</a> -->
                                    </div>
                                </div>

                                <?php endforeach ;?>
                            </div>
                            <div class="car-prev">
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="car-next">
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                </section>
            </div>
            <nav>
                <div class="informasi">
                    <div class="row">
                        <div class="inform col-md-12 col-sm-12">
                            <p class="font-weight-bold"><?= $runtext->isi_rtext?>
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="profil" id="section-profil">
            <div class="container profil-container p-3">
                <div class="row ml-1 mt-3">
                    <div class="judul">
                        <h3 class="title-section">Profil</h3>
                        <hr class="hr-section">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-5 ">
                        <img src="<?php echo base_url()?>assets/landing/img/yapinda.jpg" alt="profil enha">
                    </div>
                    <div class="col-md-7 mt-3">
                        <h3>Profil</h3>
                        <table class="table mt-3">
                            <tbody>
                                <tr>
                                    <td>Nama Madrasah </td>
                                    <td>: <?= $profile->nama_madrasah?></td>
                                </tr>
                                <tr>
                                    <td>NPSN </td>
                                    <td>: <?= $profile->npsn?></td>
                                </tr>
                                <tr>
                                    <td>NSM </td>
                                    <td>: <?= $profile->nsm?></td>
                                </tr>
                                <tr>
                                    <td>Status Akreditasi </td>
                                    <td>: <?= $profile->nilai_akreditasi?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="sejarah" id="section-sejarah">
            <div class="container mt-3 sejarah-container p-3">
                <div class="row justify-content-center">
                    <div class="title mt-4 mb-4">
                        <h3 class="title-section mb-1">Sambutan Kepala Madrasah</h3>
                        <hr class="hr-section">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md m-auto text-center">
                        <img src="<?php echo base_url()?>assets/landing/img/<?= $profile->img_kepsek?>" alt="H. Enan Suryana Alm">
                    </div>
                    <div class="col-md m-2">
                        <p class="content-sejarah mt-1 mr-5">
                            Bismillahirahmanirahim. <br><br>

                            Segala puji bagi Allah SWT tuhan semesta alam yang mengajarkan kita dengan pena
                            pengetahuan.
                            Salawat dan salam semoga selalu tercurah kepada teladan sepanjang zaman, Nabi Muhammad
                            SAW. <br>
                            <br>

                            Pendidikan merupakan pilar penting bagi peradaban bangsa. Maju mundurnya suatu bangsa
                            bisa
                            ditentukan dengan perkembangan ilmu pengetahuan yang dimiliki oleh sumber daya
                            manusianya. Dan
                            puncak dari ilmu pengetahuan itu adalah ahlak mulia yang melekat sebagai karakter utama
                            pada
                            diri manusia. <br><br>

                            Akhirnya, hanya kepada Allah SWT kita bertawakal. Semoga kita semua sukses dan diberkahi
                            dalam
                            menjalankan semua aktivitas. <br><br>

                            Bandung, <br>
                            Kepala Madrasah MIS Nurul Huda. <br>

                            Iis Nurhayati, S.Ag, M.M.Pd
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="fasilitas" id="section-fasilitas">
            <div class="container mt-3 fasilitas-container">
                <div class="row mt-3 justify-content-center">
                    <div class="title mt-4 mb-4">
                        <h3 class="title-section mb-1">Fasilitas</h3>
                        <hr class="hr-section">
                    </div>
                </div>
                <div class="row isi">
                    <!-- <div class="col-md m-auto text-center">
                    <i class="fas fa-dollar-sign fa-5x"></i>
                    <h5>Gratis SPP&DSP</h5>
                </div> -->
                    <div class="col-md m-auto text-center">
                        <i class="fas fa-wifi fa-5x"></i>
                        <h5>Wifi</h5>
                    </div>
                    <div class="col-md m-auto text-center">
                        <i class="fas fa-cctv fa-5x"></i>
                        <h5>CCTV</h5>
                    </div>
                    <div class="col-md m-auto text-center">
                        <i class="fas fa-tv fa-5x"></i>
                        <h5>Media Pembelajaran</h5>
                    </div>
                    <div class="col-md m-auto text-center">
                        <i class="fas fa-guitar-electric fa-5x"></i>
                        <h5>Alat Kesenian</h5>
                    </div>
                </div>
            </div>
        </section>


        <!-- enha gallery -->

        <section class="gallery " id="section-gallery">

            <div class="container gallery-container mt-3 pt-5">
                <div class="row justify-content-center">
                    <div class="title ">
                        <h3 class="title-section">Gallery</h3>
                        <hr class="hr-section">
                    </div>
                </div>
                <div class="tz-gallery">
                    <div class="row">
                        <div class="row">
                            <?php foreach ($gallery as $item) :?>
                            <div class="col-sm-6 col-md-4 rounded ">
                                <h4 class="title-gallery align-middle text-center mb-3">
                                    <?= $item['nama_kegiatan']?></h4>
                                <hr class="hr-section">
                                <a class="lightbox"
                                    href="<?php echo base_url() . 'assets/landing/img/gallery/'.$item['foto_kegiatan'];?>">
                                    <img src="<?php echo base_url() . 'assets/landing/img/gallery/'.$item['foto_kegiatan'];?>"
                                        alt="enha-img-1">
                                </a>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
        </section>
        <section class="footer" id="section-footer">
            <div class="footer-container">
                <div class="row">
                    <div class="col-md">
                        <div class="logo-footer justify-content-center text-center">
                            <img class="mb-2" src="<?php echo base_url()?>assets/landing/img/<?= $profile->logo_sekolah?>"
                                alt="footer mas nurul huda">
                            <h3><?= $profile->nama_madrasah?></h3>
                            <h5 class="mb-1">"<?= $profile->visi_motto?>"</h5>
                            <h7><?= $profile->alamat_madrasah?>
                            </h7>
                        </div>
                    </div>
                    <div class="col-md">
                        <h4>Line Kontak</h4>
                        <hr>
                        <ul>
                            <li><a href="tel:+622<?= $profile->phone?>" target="_blank"><i
                                        class="fas fa-phone fa-lg"></i>022-<?= $profile->phone?></a>
                            </li>
                            <li><a href="mailto:<?= $profile->email?>" target="_blank"><i
                                        class="fas fa-envelope fa-lg"></i><?= $profile->email?></a>
                            </li>
                        </ul>
                        <h4>Sosial Media</h4>
                        <hr>
                        <ul>
                            <li><a href="<?= $profile->link_fb?>" target="_blank"><i
                                        class="fab fa-facebook fa-lg"></i> @minurulhudakotabandung</a></li>

                            <li><a href="<?= $profile->link_youtube?>" target="_blank"><i
                                        class="fab fa-youtube fa-lg"></i> @mi nurulhuda</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h4>Temukan Kami di Maps </h4>
                        <hr>
                        <div id="map"></div>
                    </div>
                </div>
                <div class="copyright justify-content-center text-center mt-3"><a href="http://www.minurulhuda.sch.id"
                        target="blank">
                        &copyMIS NURUL HUDA Kota Bandung 2020 | Allright reserved</a> |
                    <strong> Developed by </strong><a
                        href="https://play.google.com/store/search?q=pub%3Azlz%20tech&c=apps&hl=in"
                        target="blank">zlz</a>
                </div>
            </div>

        </section>
        <script src="<?php echo base_url()?>assets/landing/js/jquery-3.4.1.slim.min.js"></script>
        <script src="<?php echo base_url()?>assets/landing/js/popper.min.js"></script>
        <script src="<?php echo base_url()?>assets/landing/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/landing/js/smooth-scroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/landing/js/baguetteBox.min.js"></script>
  
        <script type="text/javascript">
        $(function() {
            var scroll = new SmoothScroll('a[href*="#section-"]', {
                // speed: 1000
                easing: 'easeInOutCubic',
                customEasing: function(time) {
                    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

                }
            });
        });

        var map = L.map('map').setView([-6.937930,107.595264], 17);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        L.marker([-6.937930,107.595264]).addTo(map)
            .bindPopup('<div class="text-center"><b>MI NURUL HUDA</b><br> Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I No.7</div>')
            .openPopup();
            
        </script>
        <script src="<?php echo base_url()?>assets/landing/js/loader.js"></script>
        <script src="<?php echo base_url()?>assets/landing/js/enha.js"></script>
        <!-- <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfz3Euq9lMt4i7V-rho11jkgRCTC5t4vo&callback=initMap">
        </script> -->
</body>
</div>