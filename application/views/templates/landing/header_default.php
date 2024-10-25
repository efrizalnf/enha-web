<div>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-9 address-info">
                    <div class="info box">
                        <ul>
                            <li><a href="tel:<?= $profile->phone ?>"><i class="fas fa-phone"></i><?= $profile->phone ?></a></li>
                            <li><a href="mailto:<?= $profile->email ?>"><i class="fas fa-envelope-open"></i><?= $profile->email ?></li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 simple-link text-right ">
                    <a href="https://www.facebook.com/mi.nurulhuda.589" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.youtube.com/watch?v=MngGrau0l3U" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav mb-3">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="top-header">
                        <a href="<?php echo base_url('enhas/index') ?>" class="navbar-brand">
                            <img src="<?php echo base_url() ?>assets/landing/img/logo-enha2.png" class="ml-15 mr-2" width="49" height="49" style="margin-right: 15px; ">
                            <div class="nav-text" style="margin-top:10px">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="font-weight-bold brand"><?= $profile->nama_madrasah ?></h5>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdownd">
                            <a href="<?php echo base_url('enhas/index') ?>" class="dropdown-toggle active" data-toggle="dropdown">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Tentang Kami</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/index#section-profil') ?>" class="page-scroll">Profil</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/index#section-sejarah') ?>" class="page-scroll">Sambutan Kamad</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/index#section-fasilitas') ?>" class="page-scroll">Fasilitas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Direktori</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/dirguru') ?>">Direktori Guru</a></li>
                                <li><a class="dropdown-item" href="#">Direktori Siswa</a></li>
                            </ul>
                        </li>
                        <li class="dropdownd">
                            <a class="nav-link" href="http://ppdb.yapinda.online/" target="_blank">PPDB</a>
                        </li>
                        <li class="dropdownd">
                            <a class="nav-link" href="<?php echo base_url('enhas/index#section-gallery') ?>" class="page-scroll">Galeri</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/informasi') ?>">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('enhas/download') ?>">File Download</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
</div>