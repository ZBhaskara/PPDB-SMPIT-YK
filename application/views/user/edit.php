<!-- Begin Page Content -->
<div class="container-fluid ">
    <!-- /.container-fluid -->
    <div class="row p-3">
        <div class="col-lg-6">
            <div class="card shadow-sm mb-5">
                <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <?= form_open_multipart('user/edit'); ?>

                <div class="form-group row mt-3 ml-2 mr-2">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row mt-3 ml-2 mr-2">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>

                <div class=" form-group row mt-3 ml-2 mr-2">
                    <div class="div col-sm-2">Pictures</div>
                    <div class="div col-sm-10">
                        <div class="div row">
                            <div class="div col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                            </div>
                            <div class="div col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <div class="col sm-5"> -->
                            <button type="submit" class="btn btn-info mt-4 shadow-sm"><i class="fas fa-edit"></i> Edit</button>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->