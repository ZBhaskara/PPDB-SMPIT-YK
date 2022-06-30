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
                    <h6 class="mt-2 font-weight-bold text-primary">Data siswa yang telah mendaftar tetapi <font color="red"><strong>Ditolak</strong></font>
                    </h6>
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
                                            <!-- <a href="<?= base_url() ?>Laporan/cetakdatabyid/<?= $fr['id_siswa'] ?>" class="badge badge-success" target="_blank"><i class="fas fa-print"></i> Cetak</a> -->
                                            <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Editakun<?= $fr['id_siswa'] ?>"><i class=" fas fa-edit"></i> Verifikasi</a>
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
</div>

<!-- /.container-fluid -->
<!-- Modal verifikasi
<?php foreach ($formulir as $fr) : ?>
    <div class="modal fade" id="Editakun<?= $fr['id_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title judul" id="exampleModalLabel"><strong>Verifikasi Pendaftar</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-5 mr-5 ml-5 mt-2">
                        <div class="col">
                            <form action="<?= base_url('admin/verifikasi') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-uppercase judul"><strong>Data siswa/i</strong></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Siswa/i</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="id_mhs" id="id" value="<?= $fr['id_siswa'] ?>">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nisn Siswa/i</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nisn_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Tempat lahir</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['tempatlahir_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Agama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['agama_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Warga Negara</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['wn_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Jenis kelamin</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['jeniskelamin_mhs'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Provinsi asal</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_provinsi'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Kabupatem asala</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_kabupaten'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['nama_kecamatan'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['asal_sekolah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Alamat detail</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['alamat_mhs'] ?>" readonly>
                                    </div>
                                </div>


                                <div class="form-group row mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-uppercase judul"><strong>Data Ayah</strong></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>

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
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Warga negara</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['wn_ayah'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-uppercase judul"><strong>Data Ibu</strong></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>

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
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Warga negara</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['wn_ibu'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mr-2">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-uppercase judul"><strong>Data Wali</strong></label>
                                    <div class="col-sm-7">
                                    </div>
                                </div>

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
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Warga negara</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $fr['wn_wali'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Foto</label>
                                    <div class="div col-sm-3 ml-5">
                                        <img src="<?= base_url('assets/img/3x4/') . $fr['image'] ?>" class="img-thumbnail">
                                    </div>
                                </div>
                                <br>
                                <hr size="100">
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
</div> -->