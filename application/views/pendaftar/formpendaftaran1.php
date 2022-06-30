<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<div class="flash-data-gagal-daftar" data-flashdata="<?= $this->session->flashdata('flashgagal') ?>"></div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 text-center p-0 mt-3 mb-3">
            <?php
            if ($status['status'] == 0) : ?>
                <div class="card bg-danger text-white ml-2 mt-2 mb-2 mr-2">
                    <div class="card-body ">
                        <h6 class="text-bold"><strong>MASA PENDAFTARAN PERIODE INI TELAH DI TUTUP</strong></h6>
                        <h6 class="font">Untuk Informasi dapat di lihat di informasi pendaftaran</h6>
                    </div>
                </div>
            <?php else : ?>
                <div class="card px-0 pt-4 mt-2 p-4 mb-lg-5 shadow-sm p-md-4 justify-content-center">
                    <h2><strong>Form Pendaftaran Siswa</strong></h2>
                    <p class="formp">Lakukan pengisian data sesuai alur</p>
                    <form id="msform" class="p-1" method="post" enctype="multipart/form-data">
                        <!-- progressbar -->
                        <ul id="progressbar" class="mt-4">
                            <li class="active" id="data_siswa"><strong>Data siswa</strong></li>
                            <li id="data_orangtua"><strong>Data orang tua</strong></li>
                            <li id="data_wali"><strong>Data wali</strong></li>
                            <li id="berkas_pendaftaran"><strong>Berkas pendaftaran</strong></li>
                        </ul>
                        <!-- <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                        <!-- fieldsets Data siswa -->
                        <br>
                        <fieldset class="mt-2">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="steps">Step 1 - 4</h5>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9 float-right">
                                        <input type="text" class="form-control float-right" id="inputEmail3" placeholder="" name="nama_siswa">
                                        <?= form_error('nama_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Induk Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="inputEmail3" placeholder="" name="nik_siswa">
                                        <?= form_error('nik_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="tempatlahir_siswa">
                                        <?= form_error('tempatlahir_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggallahir_siswa">
                                        <?= form_error('tanggallahir_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="agama_siswa">
                                            <option selected value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu chu">Kong Hu Chu</option>
                                        </select>
                                        <?= form_error('agama_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="input-group mb-3 col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jeniskelamin_siswa" class="custom-control-input" value="Pria">
                                            <label class="custom-control-label" for="customRadioInline1" name="jk_siswa">Pria</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="jeniskelamin_siswa" class="custom-control-input" value="Wanita">
                                            <label class="custom-control-label" for="customRadioInline2" name="jk_siswa">Wanita</label><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Status Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="status_keluarga">
                                        <?= form_error('asal_sekolah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="asal_sekolah">
                                        <?= form_error('asal_sekolah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Prestasi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="prestasi">
                                        <?= form_error('prestasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Isi email untuk mengirim kode pendaftaran" name="email">
                                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="next action-button">Lanjut <i class="fas fa-fw fa-angle-right"></i></button>
                        </fieldset>

                        <!-- fieldsets Data orang tua -->
                        <fieldset class="mb-2 mt-2">
                            <div class="form-card mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="steps">Step 2 - 4</h3>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_ayah">
                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="agama_ayah">
                                            <option>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu chu">Kong Hu Chu</option>
                                        </select>
                                        <?= form_error('agama_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ayah</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="pendidikan_ayah">
                                            <option>Pilih Pendidikan</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="Strata 1">Strata 1</option>
                                            <option value="Strata 2">Strata 2</option>
                                            <option value="Strata 3">Strata 3</option>
                                        </select>
                                        <?= form_error('pendidikan_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pekerjaan_ayah">
                                        <?= form_error('pekerjaan_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="penghasilan_ayah">
                                            <option>Pilih Penghasilan</option>
                                            <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                            <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                            <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                            <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                        </select>
                                        <?= form_error('penghasilan_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Hp Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_ayah">
                                        <?= form_error('nohp_ayah', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>


                                <hr class="sidebar-divider mt-2">
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">DATA IBU</label>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_ibu">
                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="agama_ibu">
                                            <option>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu chu">Kong Hu Chu</option>
                                        </select>
                                        <?= form_error('agama_ibu', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="pendidikan_ibu">
                                            <option>Pilih pendidikan</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="Strata 1">Strata 1</option>
                                            <option value="Strata 2">Strata 2</option>
                                            <option value="Strata 3">Strata 3</option>
                                        </select>
                                        <?= form_error('pendidikan_ibu', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="penghasilan_ibu">
                                            <option>Pilih Penghasilan</option>
                                            <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                            <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                            <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                            <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                        </select>
                                        <?= form_error('penghasilan_ibu', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Hp Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_ibu">
                                        <?= form_error('nohp_ibu', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <hr class="sidebar-divider mt-2">
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Alamat Ayah dan Ibu</label>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Provinsi Asal</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="id_prov" id="provinsi">
                                            <option>Pilih Provinsi</option>
                                            <?php foreach ($provinsi as $p) : ?>
                                                <option value="<?= $p['id_prov'] ?>"><?= $p['nama_provinsi'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_prov', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="id_kabupaten" id="kabupaten" disabled="">
                                            <option selected>Pilih Kabupaten/Kota</option>
                                        </select>
                                        <?= form_error('id_kabupaten', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="id_kecamatan" id="kecamatan" disabled="">
                                            <option selected>Pilih kecamatan</option>
                                        </select>
                                        <?= form_error('id_kecamatan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat detail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="alamat_siswa">
                                        <?= form_error('alamat_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>

                            <button type="button" name="previous" class="previous action-button-previous"> <i class="fas fa-fw fa-angle-left"></i>kembali</button>
                            <button type="button" name="next" class="next action-button">Lanjut <i class="fas fa-fw fa-angle-right"></i></button>
                        </fieldset>
                        <!-- Data wali -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="steps">Step 3 - 4</h3>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Wali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_wali">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Agama Wali</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="agama_wali">
                                            <option selected value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu chu">Kong Hu Chu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Wali</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="pendidikan_wali">
                                            <option selected value="">Pilih pendidikan</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="Strata 1">Strata 1</option>
                                            <option value="Strata 2">Strata 2</option>
                                            <option value="Strata 3">Strata 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pekerjaan_wali">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="penghasilan_wali">
                                            <option selected value="">Pilih Penghasilan</option>
                                            <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                            <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                            <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                            <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Hp Wali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_wali">
                                        <?= form_error('nohp_wali', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                            </div>
                            <button type="button" name="previous" class="previous action-button-previous"> <i class="fas fa-fw fa-angle-left"></i>kembali</button>
                            <button type="button" name="next" class="next action-button">Lanjut <i class="fas fa-fw fa-angle-right"></i></button>
                        </fieldset>


                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="steps">Step 4 - 4</h3>
                                    </div>
                                </div>


                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Foto</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan Raport</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="image" name="raport">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan bukti prestasi</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="image" name="bprestasi">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan Kartu keluarga</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="image" name="kk">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Scan akta kelahiran</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="image" name="akta">
                                        <label class="custom-file-label" for="image">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>

                            <button type="button" name="previous" class="previous action-button-previous"> <i class="fas fa-fw fa-angle-left"></i>kembali</button>
                            <button type="button" class="kirim" data-toggle="modal" data-target="#exampleModal">Daftar <i class="fas fa-fw fa-paper-plane"></i></button>
                        </fieldset>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>

<!-- Modal konfirmasi -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                Konfirmasi
            </div>
            <div class="modal-body">
                <h5>Apakah sudah yakin dengan data yang telah di isi ?</h5>
            </div>
            <div class="modal-footer align-self-center">
                <button type="submit" name="next" class="btn btn-success shadow-sm" value="">Yakin</i></button>
                <button type="button" class="btn btn-danger shadow-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
</form>