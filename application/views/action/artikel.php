<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Artikel</a>



        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Article</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Article</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($artikel as $artikel) {
                            ?>
                        <tr>
                            <td><img src="<?php echo base_url('assets/img/news/') . $artikel->gambar ?>" height="72" width="128px"></td>

                            <td><?php echo $artikel->judul ?></td>
                            <td><?php echo substr($artikel->isi, 0, 50)  ?></td>
                            <td>
                                <?php echo anchor('action/editartikel/' . $artikel->id, '<div class="badge badge-pill badge-success">Edit</div>'); ?> |
                                <?php echo anchor('action/deleteartikel/' . $artikel->id, '<div class="badge badge-pill badge-danger">Delete</div>'); ?>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <?= form_open_multipart('action/upload'); ?>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-">
                            <img src="" class="img-thumbnail">
                        </div>
                        <div class="col-sm9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <textarea name="isi" id="isi" rows="10" cols="80"></textarea>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
            </form> -->
            <?= form_open_multipart('action/upload'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                    </div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Artikel"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('isi');
</script>