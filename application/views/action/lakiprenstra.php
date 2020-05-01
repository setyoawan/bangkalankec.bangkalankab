<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Upload Lakip</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>

                    <!-- <?php foreach ($lakip as $lakip) : ?> -->
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>
                            <?= $lakip['file']; ?>
                        </td>
                        <td>

                            <?php echo anchor('action/deletelakip/' . $lakip['id'], '<div class="badge badge-pill badge-danger">Delete</div>'); ?>
                        </td>

                    </tr>
                    <?php $i++; ?>
                    <!-- <?php endforeach; ?> -->
                </tbody>
            </table>



        </div>
        <div class="col-lg-6">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal2">Upload Renstra</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>

                    <!-- <?php foreach ($renstra as $renstra) : ?> -->
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>
                            <?= $renstra['file']; ?>
                        </td>
                        <td>
                            <?php echo anchor('action/deleterenstra/' . $renstra['id'], '<div class="badge badge-pill badge-danger">Delete</div>'); ?>
                        </td>

                    </tr>
                    <?php $i++; ?>
                    <!-- <?php endforeach; ?> -->
                </tbody>
            </table>



        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Lakip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open_multipart('action/insertlakip'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" for="file">Choose File</label>
                    </div>
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


<div class="modal fade" id="newMenuModal2" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Renstra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open_multipart('action/insertrenstra'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" for="file">Choose File</label>
                    </div>
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