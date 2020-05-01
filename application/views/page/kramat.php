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
                    <th scope="row">MOH NASIR</th>
                    <td>KEPALA DESA</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">MUHAMMAD FAKHRUR ROZI</th>
                    <td>SEKRETARIS DESA</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">YUSLIM HELMY EDDY P</th>
                    <td>KASI PEMERINTAHAN</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">MOH THOHA</th>
                    <td>KASI PELAYANAN DAN KESMAS</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">AHAMAD SYUKRON</th>
                    <td>KAUR KEUANGAN</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">JAINUL ARIFIN</th>
                    <td>KAUR UMUM DAN PERENCANAAN</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">ABDURROHMAN</th>
                    <td>KADUS MORKOLAK TIMUR</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">ABD. HADI</th>
                    <td>KADUS MORKOLAK BARAT</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">BUHORI</th>
                    <td>KADUS PALENGGGIEN TIMUR</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">HAMINAN</th>
                    <td>KADUS PALENGGIEN BARAT</td>
                    <td>DESA KRAMAT</td>

                </tr>
                <tr>
                    <th scope="row">HAKIM</th>
                    <td>KADUS KEPER</td>
                    <td>DESA KRAMAT</td>

                </tr>

            </tbody>
        </table>
        <!-- </div> -->
    </div>
</section>