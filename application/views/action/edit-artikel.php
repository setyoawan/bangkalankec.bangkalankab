<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php foreach ($artikel as $artikel) { ?>
    <form action="<?php echo base_url() . 'action/updateartikel'; ?>" method="post">
        <div class="row">
            <div class="col-lg-12">

                <p><?php echo $this->session->flashdata('msg') ?></p>
                <div class="form-group">
                    <label for="" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $artikel->id ?>">
                        <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $artikel->judul ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-12">
                        <textarea type="text" class="form-control" id="isi" name="isi" required><?php echo $artikel->isi ?></textarea>
                    </div>
                </div>



                <div class="form-group justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
    </form>
    <?php } ?>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
    CKEDITOR.replace('isi_artikel');
</script>