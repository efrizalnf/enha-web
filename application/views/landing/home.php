    <div class="banner-area standard text-default bg-gray-hard" style="padding-top: 190px;">
        <div class="item">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container" style="margin-bottom: 60px;">
                        <div class="row item-flex center">
                            <div class="col-md-6">
                                <div class="content-box">
                                    <h1><?= $cover[0]['txt_title'] ?></h1>
                                    <p>
                                        <?= $cover[0]['txt_desc'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 thumb">
                                <img src="<?php echo base_url() . 'assets/landing/img/' . $cover[0]['img_cover']; ?>" alt="Thumb">
                                <img src="<?php echo base_url() . 'assets/landing/img/' . $cover[1]['img_cover']; ?>" alt="Thumb">
                                <div class="join">
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="fun-fact">
                                        <h4 class="timer" data-to="1200" data-speed="5000"></h4>
                                        <span class="medium">Total Lulusan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start What Learn
    ============================================= -->
    <div class="what-learn-area bg-dark default-padding">
        <div class="container">
            <div class="content-box">
                <div class="row categories">
                    <div class="row categories-items">
                        <div class="col-md-4 col-sm-4 item">
                            <a href="<?php echo base_url("enhas/dirguru") ?>">
                                <i class="flaticon-feature"></i>
                                <!-- <i class="fa-solid fa-chalkboard-user"></i> -->
                                <h4>Direktori Guru</h4>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <a href="<?php echo base_url("enhas/dirsiswa") ?>">
                                <i class="flaticon-interaction"></i>
                                <!-- <i class="fa-solid fa-graduation-cap"></i> -->
                                <h4>Direktori Siswa</h4>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <a href="http://ppdb.yapinda.online">
                                <i class="flaticon-conveyor"></i>
                                <!-- <i class="fa-regular fa-address-card"></i> -->
                                <h4>Penerimaan Peserta Didik Baru</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End What Learn -->

    <!-- Start Registration 
    ============================================= -->
    <div id="register" class="reg-area default-padding-top bg-gray">
        <div class="container reg-area-one">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-6 thumb">
                        <img src="<?php echo base_url()?>assets/landing/img/yapinda.jpg" alt="Halaman depan gedung YAPINDA." width="334" height="251">
                    </div>
                    <div class="col-md-6 reg-form">
                        <div class="site-heading text-light">
                            <h2>Selamat datang!</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi accusantium nemo, deleniti sapiente accusamus ad molestiae facilis dolorum dolore dicta exercitationem voluptas illo dolorem in? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container reg-area-two">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-6 reg-form">
                        <div class="site-heading text-light">
                            <h2>Sambutan Kepala Madrasah</h2>
                            <p>Bismillahirahmanirahim.</p>
                            <p>Segala puji bagi Allah SWT tuhan semesta alam yang mengajarkan kita dengan pena pengetahuan. Salawat dan salam semoga selalu tercurah kepada teladan sepanjang zaman, Nabi Muhammad SAW.</p>
                            <p>Pendidikan merupakan pilar penting bagi peradaban bangsa. Maju mundurnya suatu bangsa bisa ditentukan dengan perkembangan ilmu pengetahuan yang dimiliki oleh sumber daya manusianya. Dan puncak dari ilmu pengetahuan itu adalah ahlak mulia yang melekat sebagai karakter utama pada diri manusia.</p>
                            <p>Akhirnya, hanya kepada Allah SWT kita bertawakal. Semoga kita semua sukses dan diberkahi dalam menjalankan semua aktivitas.</p>
                            <p style="white-space: pre-line;">Bandung,
                            Kepala Madrasah MIS Nurul Huda.
                            Iis Nurhayati, S.Ag, M.M.Pd</p>
                        </div>
                    </div>
                    <div class="col-md-6 thumb">
                        <img src="<?php echo base_url()?>assets/landing/img/<?= $profile->img_kepsek?>" alt="Foto dari kepala sekolah MIS Nurul Huda." width="485" height="647">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration -->

    <!-- Start Popular Courses 
    ============================================= -->
    <div class="popular-courses circle carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Popular Courses</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url() ?>assets/landing/img/100x100.png" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Munil Druva</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Java Programming Masterclass</a></h4>
                                <div class="cats">
                                    <a href="#">Education</a>
                                    <a href="#">Science</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        Free
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url() ?>assets/landing/img/100x100.png" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Akua Paul</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5 (1,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Social Science & Humanities</a></h4>
                                <div class="cats">
                                    <a href="#">Social</a>
                                    <a href="#">Online</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $12.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url() ?>assets/landing/img/100x100.png" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Jon Babu</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.7 (890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Actualized Leadership Network</a></h4>
                                <div class="cats">
                                    <a href="#">Online</a>
                                    <a href="#">Source</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 8,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 126:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        Free
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url() ?>assets/landing/img/100x100.png" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Babu Paol</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5 (980)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Machine Learning Management</a></h4>
                                <div class="cats">
                                    <a href="#">PHP</a>
                                    <a href="#">Programming</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 8,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 256:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $124.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url() ?>assets/landing/img/100x100.png" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Mickel Clark</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Online Programming</a></h4>
                                <div class="cats">
                                    <a href="#">Education</a>
                                    <a href="#">Science</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $12.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(<?= base_url() ?>assets/landing/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="site-heading text-light">
                    <h2>Fasilitas</h2>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-wifi fa-5x"></i>
                        </div>
                        <div class="info">
                            <span class="medium">WI-FI</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-cctv fa-5x"></i>
                        </div>
                        <div class="info">
                            <span class="medium">CCTV</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-tv fa-5x"></i>
                        </div>
                        <div class="info">
                            <span class="medium">MEDIA PEMBELAJARAN</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-guitar-electric fa-5x"></i>
                        </div>
                        <div class="info">
                            <span class="medium">ALAT KESENIAN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Experience Advisors</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="advisor-items text-center text-light">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. Nuri Paul</h4>
                                    <span>Chemistry specialist</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Monayem Pruda</h4>
                                    <span>Senior Developer</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Dr. Bubly Minu</h4>
                                    <span>Science specialist</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->

    <!-- Start Event
    ============================================= -->
    <section id="event" class="event-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?= base_url() ?>assets/landing/img/1500x700.png);">
                            <div class="date">
                                <h4><span>12</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">Secondary Schools United Nations</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 23 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="info">
                            <h4>
                                <a href="#">Social Science & Humanities</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 126 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="info">
                            <h4>
                                <a href="#">Actualized Leadership Network Seminar</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 72 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?= base_url() ?>assets/landing/img/1500x700.png);">
                            <div class="date">
                                <h4><span>24</span> Apr, 2019</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">International Conference on Art Business</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 56 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <div class="more-btn col-md-12 text-center">
                        <a href="#" class="btn btn-dark border btn-md">View All Events</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Event -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?= base_url() ?>assets/landing/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">

                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>24</span> Nov, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Objection happiness something</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>12</span> Sep, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Meant to learn of vexed</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?= base_url() ?>assets/landing/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>29</span> Dec, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Delightful up dissimilar</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->