<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Rencana Strategi</span>

            </div>
        </div>
        <!-- </div> -->
        <div class="ftco-animate">
            <div class="card shadow  mb-4">

                <div class="card-body ">
                    <?php foreach ($renstra as $renstra) : ?>
                        <div class=" d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <li>
                                    <a href="<?= base_url('assets/file/renstra/') . $renstra['file']; ?>" width="100%" height="100%">
                                        <?php echo $renstra["file"]; ?></h4>
                                    </a>
                                </li>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>





    </div>
</section>