<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div class="row p-3">
        <div class="col-lg-6">
            <div class="card shadow-sm ">
                <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <form action="<?= base_url('user/changepassword'); ?>" method="post" class=" ml-4 mr-4 mb-4 mt-4">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="form-group">
                        <label for="CurrentPassword">Password lama</label>
                        <input type="password" class="form-control" id="curent_password" name="curent_password">
                        <?= form_error('curent_password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1">Password baru</label>
                        <input type="text" class="form-control" id="new_password1" name="new_password1">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1">Ulangi Password baru</label>
                        <input type="text" class="form-control" id="new_password2" name="new_password2">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info shadow-sm"><i class="fas fa-paper-plane"></i> Ganti Password</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->