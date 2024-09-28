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
    <section class="download" id="section-dl">
        <div class="container borderbox mt-3">
            <div class="title justify-content-center">
                <div class="title mb-4 mt-4">
                    <h3 class="title-section mb-1">Unduhan File</h3>
                    <hr class="hr-section">
                </div>
            </div>
            <div class="row ">
                <?php foreach ($download as $dl) :?>
                <div class="dlfiles col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a href="<?php echo base_url()?>assets/landing/files/<?php echo $dl['lokasi_file']?>" alt="filepdf" download>
                    <i class="fa fa-file fa-5x" style="font-size:48px;color:green"></i>
                </a>
                    <h4><?php echo $dl['nama_file']?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br><br>
    </section>
</body>