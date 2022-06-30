<div class="container-fluid">
    <div class="flash-data-hapus" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800 font-weight-bold judul">Data Akun</h1> -->

    <div class="row p-3">
        <!-- DataTales Example -->
        <div class="col">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="mt-2 font-weight-bold text-primary">Data Akun Admin</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive float-right">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-info text-white">
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Email User</th>
                                    <th>Status Akun</th>
                                    <th>Foto user</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $us) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $us['name'] ?></td>
                                        <td><?= $us['email'] ?></td>
                                        <td>
                                            <?php
                                            if ($us['is_active'] == 1) : ?>
                                                <h6>
                                                    <font color="green">Aktif</font>
                                                </h6>
                                            <?php else : ?>
                                                <h6>
                                                    <font color="red">Tidak Aktif</font>
                                                </h6>
                                            <?php endif; ?>
                                        </td>
                                        <td> <img src=" <?= base_url('assets/') ?>img/profile/<?= $us['image'] ?> " width="70px" height="70px"></td>
                                        <td class="ml-3">
                                            <a href="<?= base_url() ?>admin/hapusDataUser/<?= $us['id'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus</a>
                                            <a href="<?= base_url() ?>admin/UbahDataAkun<?= $us['id'] ?>" class="badge badge-success" data-toggle="modal" data-target="#Editakun<?= $us['id'] ?>"><i class=" fas fa-edit"></i> Edit</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ======================MODAL EDIT========================================================================================== -->
<?php foreach ($user as $us) : ?>
    <div class="modal fade" id="Editakun<?= $us['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <form action="<?= base_url('admin/updateDataAkun') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row mt-3 mr-2">

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id" id="id" value="<?= $us['id'] ?>">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $us['email'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $us['name'] ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Status Akun</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="is_active">
                                            <option selected value="<?= $us['is_active'] ?>">
                                                <?php
                                                if ($us['is_active'] == 1) : ?>
                                                    <?php echo 'Aktif' ?>
                                                <?php else : ?>
                                                    <?php echo 'Tidak Aktif' ?>
                                                <?php endif; ?>
                                            </option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" form-group row mt-3  mr-2">
                                    <div class="div col-sm-3">Pictures</div>
                                    <div class="div col-sm-9">
                                        <div class="div row">
                                            <div class="div col-sm-3">
                                                <img src=" <?= base_url('assets/') ?>img/profile/<?= $us['image'] ?> " class="img-thumbnail">
                                            </div>
                                            <div class="div col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4 float-right mr-2" data-dismiss="modal"> <i class="fas fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary mt-4 float-right"><i class="fas fa-edit"></i> Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>