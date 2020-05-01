<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <?= $this->session->flashdata('message'); ?>
        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#newMenuModal"><i class="fas fa-user-plus"></i> Tambah Account</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Log Activity</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark" id="dataTableLog" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>User</th>
                            <th>Deskripsi</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Time</th>
                            <th>User</th>
                            <th>Deskripsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($log as $log) {
                            ?>
                        <tr>
                            <td><?php echo $log->log_time ?></td>
                            <td><?php echo $log->log_user ?></td>
                            <td><?php echo $log->log_desc ?></td>

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
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url('auth/registration_admin') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control " id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control " id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control " id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control " id="profil" name="profil" placeholder="Profil atau Sambutan" required></textarea>
                        <?= form_error('profil', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Register Account
                    </button>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>