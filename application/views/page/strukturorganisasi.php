<?php
$jumlahDataPerHalaman = 1;
$querystrukturtampil = "SELECT * FROM struktur ORDER by id DESC LIMIT $jumlahDataPerHalaman";
$struktur = $this->db->query($querystrukturtampil)->result_array();
?>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Struktur Organisasi</span>

            </div>
        </div>
        <!-- </div> -->
        <?php foreach ($struktur as $struktur) : ?>
            <div class="ftco-animate">
                <!-- <p><img src="<?= base_url('assets/img/struktur/' . $struktur['file']); ?>" alt=""></p> -->
                <p><img src="<?= base_url('assets/img/struktur/' . $struktur['file']); ?>" alt=""></p>
            </div>
        <?php endforeach; ?>




    </div>
</section>