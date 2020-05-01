<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Agenda</a>





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
                            <th>#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php
                        foreach ($agenda as $agenda) {
                            ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>

                            <td><?php echo $agenda->judul ?></td>
                            <!-- <td><?php echo substr($agenda->isi, 0, 50)  ?></td> -->
                            <td><?php echo $agenda->isi ?></td>
                            <td>
                                <?php echo anchor('action/editagenda/' . $agenda->id, '<div class="badge badge-pill badge-success">Edit</div>'); ?> |
                                <?php echo anchor('action/deleteagenda/' . $agenda->id, '<div class="badge badge-pill badge-danger">Delete</div>'); ?>
                            </td>

                        </tr>

                        <?php $i++; ?>
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
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Tambah Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open_multipart('action/insertagenda'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Isi Agenda"></textarea>
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