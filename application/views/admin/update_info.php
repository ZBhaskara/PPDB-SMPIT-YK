<div class="container-fluid">
    <div class="flash-gelombang" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="flash-img" data-flashdata="<?= $this->session->flashdata('flash-img') ?>"></div>
    <div class="flash-img-gagal" data-flashdata="<?= $this->session->flashdata('flash-img-gagal') ?>"></div>

    <div class="row p-3">
        <!-- DataTales Example -->
        <div class="col-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-7">
                            <h6 class="mt-2 font-weight-bold text-primary">Kelolah informasi pendaftaran</h6>
                        </div>
                        <div class="col-5">
                            <a href="" class="btn btn-success shadow-sm font-weight-bold float-right" data-toggle="modal" data-target="#Tambah"><i class="fas fa-plus-circle"></i> Tambah gelombang</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive float-right">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-info text-white">
                                    <th>No</th>
                                    <th>Gelombang</th>
                                    <th>Buka</th>
                                    <th>Tutup</th>
                                    <th>Hasil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($halaman_awal as $h) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $h['gelombang'] ?></td>
                                        <td><?= date(' d F Y', strtotime($h['buka'])) ?></td>
                                        <td><?= date('d F Y', strtotime($h['tutup'])) ?></td>
                                        <td><?= date('d F Y', strtotime($h['hasil'])) ?></td>

                                        <td class="ml-3">
                                            <a href="<?= base_url() ?>admin/hapusDatainfo/<?= $h['id'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                            <a href="" class="badge badge-info" data-toggle="modal" data-target="#Update<?= $h['id'] ?>"><i class="fas fa-edit"></i> Update</a>
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

        <div class="col-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="mt-2 font-weight-bold text-primary">Kelolah gambar alur pendaftaran</h6>
                </div>
                <div class="card-body">
                    <div class="div col-sm-12">
                        <div class="div row">
                            <div class="div">
                                <img src="<?= base_url('assets/img/info/') . $img['image'] ?>" class="shadow" width="349px" height="400px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <?= form_open_multipart('admin/aksiUpdateimg'); ?>
                    <div class="div mb-3 ml-2">
                        <div class="custom-file">
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label mt-2" for="image">Pilih Foto</label>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-info mt-2" type="submit">Update</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal tambah data -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-l" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title judul" id="exampleModalLabel"><strong>Tambah gelombang pendaftaran</strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 mt-2">
                    <div class="col">
                        <form action="" method="post">
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Gelombang</label>
                                <div class="col-8">
                                    <input type="text" class="form-control float-right" id="email" name="gelombang" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Buka</label>
                                <div class="col-8">
                                    <input type="date" class="form-control float-right" id="email" name="buka" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Tutup</label>
                                <div class="col-8">
                                    <input type="date" class="form-control float-right" id="email" name="tutup" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Pengumuman hasil</label>
                                <div class="col-8">
                                    <input type="date" class="form-control float-right" id="email" name="hasil" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Warna background</label>
                                <div class="col-8">
                                    <select name="warna">
                                        <option value="danger">Merah</option>
                                        <option value="success">Hijau</option>
                                        <option value="primary">Ungu</option>
                                        <option value="info">Biru laut</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit data -->
<?php foreach ($halaman_awal as $h) : ?>
    <div class="modal fade" id="Update<?= $h['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-l" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title judul" id="exampleModalLabel"><strong>Update gelombang pendaftaran</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3 mt-2">
                        <div class="col">
                            <form action="<?= base_url('admin/updateGelombang') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control float-right" id="email" name="id" value="<?= $h['id'] ?>">
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-4 col-form-label">Gelombang</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control float-right" id="email" name="gelombang" value="<?= $h['gelombang'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-4 col-form-label">Buka</label>
                                    <div class="col-8">
                                        <input type="date" class="form-control float-right" id="email" name="buka" value="<?= $h['buka'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-4 col-form-label">Tutup</label>
                                    <div class="col-8">
                                        <input type="date" class="form-control float-right" id="email" name="tutup" value="<?= $h['tutup'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-4 col-form-label">Pengumuman hasil</label>
                                    <div class="col-8">
                                        <input type="date" class="form-control float-right" id="email" name="hasil" value="<?= $h['hasil'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-4 col-form-label">Warna background</label>
                                    <div class="col-8">
                                        <select name="warna">
                                            <option selected value="<?= $h['warna'] ?>">
                                                <?php
                                                if ($h['warna'] == 'danger') : ?>
                                                    <?= 'Merah' ?>

                                                <?php
                                                elseif ($h['warna'] == 'primary') : ?>
                                                    <?= 'Biru' ?>

                                                <?php
                                                elseif ($h['warna'] == 'success') : ?>
                                                    <?= 'Hijau' ?>

                                                <?php
                                                elseif ($h['warna'] == 'info') : ?>
                                                    <?= 'Biru laut' ?>

                                                <?php else : ?>
                                                    <?php echo 'Tidak Aktif' ?>
                                                <?php endif; ?>
                                            </option>
                                            <option value="danger">Merah</option>
                                            <option value="success">Hijau</option>
                                            <option value="primary">Ungu</option>
                                            <option value="info">Biru laut</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Perbarui</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>