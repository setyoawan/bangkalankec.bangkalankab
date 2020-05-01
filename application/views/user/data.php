<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('user/data'); ?>
            <h4 class="text-primary">Penduduk</h4>
            <div class="form-group row">
                <label for="lakilaki" class="col-sm-3 col-form-label">Jumlah Laki-laki</label>
                <div class="col-sm-9">
                    <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    <input type="text" class="form-control" id="lakilaki" name="lakilaki" value="<?= $data['lakilaki']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="perempuan" class="col-sm-3 col-form-label">Jumlah Perempuan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="perempuan" name="perempuan" value="<?= $data['perempuan']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="kepala_keluarga" class="col-sm-3 col-form-label">Jumlah Kepala Keluarga</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" value="<?= $data['kepala_keluarga']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <hr class="sidebar-divider mt-3">
            <h4 class="text-primary">Pendidikan</h4>
            <div class="form-group row">
                <label for="sd" class="col-sm-3 col-form-label">SD</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="sd" name="sd" value="<?= $data['sd']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="smp" class="col-sm-3 col-form-label">SMP</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="smp" name="smp" value="<?= $data['smp']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sma" class="col-sm-3 col-form-label">SMA</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="sma" name="sma" value="<?= $data['sma']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="akademi" class="col-sm-3 col-form-label">Akademi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="akademi" name="akademi" value="<?= $data['akademi']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sarjana" class="col-sm-3 col-form-label">Sarjana</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="sarjana" name="sarjana" value="<?= $data['sarjana']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>


            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->