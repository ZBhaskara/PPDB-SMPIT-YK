<div class="container-fluid">
    <div class="flash-hapus" data-flashdata="<?= $this->session->flashdata('flash-hapus-pendaftar') ?>"></div>
    <div class="flash-data-verifikasi" data-flashdata="<?= $this->session->flashdata('flash-verifikasi') ?>"></div>
    <div class="flash-data-update" data-flashdata="<?= $this->session->flashdata('flash-update') ?>"></div>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800 font-weight-bold judul">Data Pendaftar</h1> -->


    <div class="row p-3">
        <!-- DataTales Example -->
        <div class="col">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6> -->
                    <!-- <a href="cetak.php" class="btn btn-primary mr-1 font-weight-bold" target="_blank"><i class="fas  fa-print"></i> Eksport to EXCEL</a> -->

                    <div class="row">
                        <div class="col-7">
                            <h6 class="mt-2 font-weight-bold text-primary">Data siswa yang telah mendaftar dan telah di verifikasi, serta di nyatakan <font color="green"><strong>Diterima</strong></font>
                            </h6>
                        </div>
                        <div class="col-5">
                            <a href="<?= base_url() ?>Laporan" class="btn btn-success shadow-sm font-weight-bold float-right" target="_blank"><i class="fas  fa-print"></i> Cetak Data PDF</a>

                        </div>
                    </div>
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
                                            <a href="<?= base_url() ?>admin/hapusDataPendaftarDIterima/<?= $fr['id_siswa'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                            <a href="<?= base_url() ?>admin/eidtPendaftarditerima/<?= $fr['id_siswa'] ?>" class="badge badge-info"><i class="fas fa-print"></i> Edit</a>
                                            <a href="<?= base_url() ?>Laporan/cetakdatabyid/<?= $fr['id_siswa'] ?>" class="badge badge-success" target="_blank"><i class="fas fa-print"></i> Cetak</a>
                                            <!-- <a href="#" class="badge badge-info" data-toggle="modal" data-target="#Editakun<?= $fr['id_mhs'] ?>"><i class=" fas fa-edit"></i> Edit</a> -->
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