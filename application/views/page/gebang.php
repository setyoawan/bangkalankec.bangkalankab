<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= base_url('assets/img/profile/') .  $user['image']; ?>');">
            </div>
            <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                <div class="heading-section p-md-5">
                    <h2 class="mb-4"><?= $keldes2; ?></h2>

                    <p><?= $user['name'] ?>.</p>
                    <p><?= $user['profil'] ?>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row bg-primary">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['lakilaki'] ?>">0</strong>
                        <span>Jumlah <br>Laki-Laki</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['perempuan'] ?>">0</strong>
                        <span>Jumlah <br>Perempuan</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['kepala_keluarga'] ?>">0</strong>
                        <span>Jumlah <br>Kepala Keluarga</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['perempuan'] + $sdm['lakilaki']  ?>">0</strong>
                        <span>Jumlah <br>Penduduk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row bg-primary">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['sd'] ?>">0</strong>
                        <span>Tingkat <br>SD</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['smp'] ?>">0</strong>
                        <span>Tingkat <br>SMP</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['sma'] ?>">0</strong>
                        <span>Tingkat <br>SMA</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['akademi']  ?>">0</strong>
                        <span>Tingkat <br>Akademi</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="<?= $sdm['sarjana'] ?>">0</strong>
                        <span>Tingkat <br>Sarjana</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="4" class="text-center font-weight-bold">Tabel Perangkat Desa</td>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">SYAIFUL, SH</th>
                    <td>KEPALA DESA</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">SYAMSUL ARIFIN</th>
                    <td>SEKRETARIS DESA</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">FENDRA ZAUKI</th>
                    <td>KASI PEMERINTAHAN</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">ARIZKA HANDAYANI</th>
                    <td>KASI PELAYANAN DAN KESMAS</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">ERNI WIJAYA</th>
                    <td>KAUR KEUANGAN</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">SRI KUDRIYANTI</th>
                    <td>KAUR UMUM DAN PERENCANAAN</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">MOH BUHARI</th>
                    <td>KADUS GEBANG BARAT</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">SUBAIRI</th>
                    <td>KADUS LEBAK</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">MOH. HANAFI</th>
                    <td>KADUS GUPOT</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">MOH. WAHYUDI</th>
                    <td>KADUS DUKO</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">MOH. JUMASAN</th>
                    <td>KADUS JUTANG</td>
                    <td>DESA GEBANG</td>

                </tr>
                <tr>
                    <th scope="row">MOH. AMIN</th>
                    <td>KADUS GEBANG UTARA</td>
                    <td>DESA GEBANG</td>

                </tr>

            </tbody>
        </table>
        <!-- </div> -->
    </div>
</section>