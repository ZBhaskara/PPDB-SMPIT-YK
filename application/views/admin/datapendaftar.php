<div class="container-fluid">
    <div class="flash-hapus" data-flashdata="<?= $this->session->flashdata('flash-hapus-pendaftar') ?>"></div>
    <div class="flash-data-verifikasi" data-flashdata="<?= $this->session->flashdata('flash-verifikasi') ?>"></div>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800 font-weight-bold judul">Data Pendaftar</h1> -->

    <div class="row p-3">
        <!-- DataTales Example -->
        <div class="col">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="mt-2 font-weight-bold text-primary">Data pendaftar yang belum di verifikasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive float-right">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-info text-white">
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kode Pendaftaran</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Asal Sekolah</th>
                                    <th>Prestasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($formulir as $fr) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $fr['nama_siswa'] ?></td>
                                        <td><?= $fr['kode_pendaftaran'] ?></td>
                                        <td><?= $fr['jeniskelamin_siswa'] ?></td>
                                        <td><?= $fr['asal_sekolah'] ?></td>
                                        <td><?= $fr['prestasi'] ?></td>

                                        <td class="ml-3">
                                            <a href="<?= base_url() ?>admin/hapusDataPendaftar/<?= $fr['id_siswa'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                            <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Verif<?= $fr['id_siswa'] ?>"><i class=" fas fa-edit"></i> Verifikasi</a>
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

<!-- Modal verifikasi -->
<?php foreach ($formulir as $fr) : ?>
    <div class="modal fade" id="Verif<?= $fr['id_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title judul" id="exampleModalLabel"><strong>Verifikasi Pendaftar</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3 mr-5 ml-5 mt-2">
                        <div class="col">
                            <form action="<?= base_url('admin/verifikasi') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-labeljudul judul">
                                        <h6><strong>Data siswa/i</strong></h6>
                                    </label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Siswa/i</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="id_siswa" id="id" value="<?= $fr['id_siswa'] ?>">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['nama_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nisn Siswa/i</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['nik_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Tempat lahir</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['tempatlahir_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['tanggallahir_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Agama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['agama_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Prestasi</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['prestasi'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Jenis kelamin</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['jeniskelamin_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['asal_sekolah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Foto</label>
                                    <div class="div col-sm-3 ml-5">
                                        <img src="<?= base_url('assets/img/3x4/') . $fr['image'] ?>" class="img-thumbnail">
                                    </div>
                                </div>

                                <div class="form-group row mr-2 mt-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label judul">
                                        <h6><strong>Data ayah</strong></h6>
                                    </label></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Agama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['agama_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Pendidikan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['pendidikan_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['pekerjaan_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Penghasilan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['penghasilan_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">No Hp</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nohp_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mr-2 mt-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label judul">
                                        <h6><strong>Data ibu</strong></h6>
                                    </label></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Agama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['agama_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Pendidikan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['pendidikan_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Penghasilan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['penghasilan_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">No Hp</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nohp_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mr-2 mt-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label judul">
                                        <h6><strong>Alamat orang tua</strong></h6>
                                    </label></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_provinsi'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Kabupaten</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['nama_kabupaten'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['nama_kecamatan'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Alamat detail</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="" value="<?= $fr['alamat_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mr-2 mt-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label judul">
                                        <h6><strong>Data wali</strong></h6>
                                    </label></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_wali'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Agama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['agama_wali'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Pendidikan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['pendidikan_wali'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['pekerjaan_wali'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">No Hp</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nohp_wali'] ?>" readonly>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row mt-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan kartu keluarga</label>
                                    <div class="div col-sm-9">
                                        <img src="<?= base_url('assets/img/3x4/') . $fr['kk'] ?>" class="img-thumbnail">
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan akta kelahiran</label>
                                    <div class="div col-sm-9">
                                        <img src="<?= base_url('assets/img/3x4/') . $fr['akta'] ?>" class="img-thumbnail">
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan raport</label>
                                    <div class="div col-sm-9">
                                        <img src="<?= base_url('assets/img/3x4/') . $fr['raport'] ?>" class="img-thumbnail">
                                    </div>
                                </div>

                                <br>
                                <hr size="100">
                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label"><strong>Kelengkapan berkas</strong></label>
                                    <div class="col-sm-7">
                                        <?php
                                        if ($fr['raport'] && $fr['kk'] && $fr['akta'] != null) {
                                            echo '<font color="green"><strong>Berkas lengkap</strong></font>';
                                        } else {
                                            echo '<font color="green"><strong>Berkas tidak lengkap</strong></font>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">
                                        <font color="red"><strong>Status Pendaftaran</strong></font>
                                    </label>
                                    <div class="col-sm-7">
                                        <select class="custom-select" name="status_pendaftaran">
                                            <option selected value="<?= $fr['status_pendaftaran'] ?>"><?= $fr['status_pendaftaran'] ?></option>
                                            <option value="Diterima">Diterima</option>
                                            <option value="Ditolak">Ditolak</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4 float-right mr-2" data-dismiss="modal"> <i class="fas fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-success mt-4 float-right"><i class="fas fa-edit"></i> Verifikasi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>