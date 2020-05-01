<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Laporan Akuntabilitas Instansi Pemerintahan</span>

            </div>
        </div>
        <!-- </div> -->
        <div class="ftco-animate justify-content-center">
            <div class="card shadow  mb-4">

                <div class="card-body ">
                    <?php foreach ($lakip as $lakip) : ?>
                        <div class=" d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <li>
                                    <a href="<?= base_url('assets/file/lakip/') . $lakip['file']; ?>" width="100%" height="100%">
                                        <?php echo $lakip["file"]; ?></h4>
                                    </a>
                                </li>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>





    </div>
</section>