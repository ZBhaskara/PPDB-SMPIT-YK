<div class="row ml-3">
    <div class="col-xl-12 mt-2 mb-4">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
        <div class="flash-data-gagal-daftar" data-flashdata="<?= $this->session->flashdata('flashgagal') ?>"></div>
        <div class="card shadow scroll">
            <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between ">
                <h5 class="m-0 font-weight-bold text-black judul">FORM EDIT DATA</h5>
                <a class="btn btn-primary shadow-sm" href="<?= base_url('admin/datapendaftarDiterima') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>

            <ul class="nav nav-tabs mb-3 mt-3 container" id="myTab" role="tablist">
                <li class="nav-item mt-2">
                    <a class="nav-link active" id="siswa-tab" data-toggle="tab" href="#siswa" role="tab" aria-controls="siswa" aria-selected="true"><button class="btn btn-info">Data Siswa/i</button></a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" id="orang_tua-tab" data-toggle="tab" href="#orang_tua" role="tab" aria-controls="orang_tua" aria-selected="false"><button class="btn btn-info">Data Orang Tua</button></a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" id="wali-tab" data-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="false"><button class="btn btn-info">Data Wali</button></a>
                </li>
            </ul>

            <!-- <form action="" method="post" class="mb-3 mt-2"> -->
            <?= form_open_multipart('admin/aksiEditDatasiswa') ?>
            <!--/Data target form-->
            <div class="tab-content mb-3 container " id="myTabContent">
                <!--/Data Siswa-->
                <div class="tab-pane fade show active mt-3" id="siswa" role="tabpanel" aria-labelledby="siswa-tab">
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panjang</label>
                        <div class="col-sm-9 float-right">
                            <input type="hidden" value="<?= $formulir['id_siswa'] ?>" name="id_siswa">
                            <input type="text" class="form-control float-right" id="inputEmail3" placeholder="" name="nama_siswa" value="<?= $formulir['nama_siswa'] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputEmail3" placeholder="" name="nik_siswa" value="<?= $formulir['nik_siswa'] ?>">
                        </div>
                    </div>
                    <div class=" form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="tempatlahir_siswa" value="<?= $formulir['tempatlahir_siswa'] ?>">
                        </div>
                    </div>
                    <div class=" form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggallahir_siswa" value="<?= $formulir['tanggallahir_siswa'] ?>">
                        </div>
                    </div>
                    <div class=" form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="agama_siswa">
                                <option selected value="<?= $formulir['agama_siswa'] ?>"><?= $formulir['agama_siswa'] ?></option>
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
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Prestasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="prestasi" value="<?= $formulir['prestasi'] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kekamin</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="jeniskelamin_siswa">
                                <option selected value="<?= $formulir['jeniskelamin_siswa'] ?>"><?= $formulir['jeniskelamin_siswa'] ?></option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="asal_sekolah" value="<?= $formulir['asal_sekolah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-4 ml-1">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label ml-2" for="image">Pilih Foto</label>

                        </div>
                    </div>
                </div>


                <!--/Data Orang tua siswa -->
                <div class="tab-pane fade" id="orang_tua" role="tabpanel" aria-labelledby="orang_tua-tab">
                    <div class="tab-pane fade show active" id="orang_tua" role="tabpanel" aria-labelledby="orang_tua-tab">
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Data Ayah</label>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ayah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_ayah" value="<?= $formulir['nama_ayah'] ?>">
                                <?= form_error('nama_ayah', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="agama_ayah">
                                    <option selected value="<?= $formulir['agama_ayah'] ?>"><?= $formulir['agama_ayah'] ?></option>
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
                                    <option selected value="<?= $formulir['pendidikan_ayah'] ?>"><?= $formulir['pendidikan_ayah'] ?></option>
                                    <option value="SD Sederajat">Sd Sederajat</option>
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
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pekerjaan_ayah" value="<?= $formulir['pekerjaan_ayah'] ?>">
                                <?= form_error('pekerjaan_ayah', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="penghasilan_ayah">
                                    <option selected value="<?= $formulir['penghasilan_ayah'] ?>"><?= $formulir['penghasilan_ayah'] ?></option>
                                    <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                    <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                    <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                    <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">No hp ayah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_ayah" value="<?= $formulir['nohp_ayah'] ?>">
                            </div>
                        </div>
                        <hr class="sidebar-divider mt-2">
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Data Ibu</label>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_ibu" value="<?= $formulir['nama_ibu'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="agama_ibu">
                                    <option selected value="<?= $formulir['agama_ibu'] ?>"><?= $formulir['agama_ibu'] ?></option>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="pendidikan_ibu">
                                    <option selected value="<?= $formulir['pendidikan_ibu'] ?>"><?= $formulir['pendidikan_ibu'] ?></option>
                                    <option value="SD Sederajat">Sd Sederajat</option>
                                    <option value="SMP Sederajat">SMP Sederajat</option>
                                    <option value="SMA Sederajat">SMA Sederajat</option>
                                    <option value="Strata 1">Strata 1</option>
                                    <option value="Strata 2">Strata 2</option>
                                    <option value="Strata 3">Strata 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="penghasilan_ibu">
                                    <option selected value="<?= $formulir['penghasilan_ibu'] ?>"><?= $formulir['penghasilan_ibu'] ?></option>
                                    <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                    <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                    <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                    <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">No hp ibu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_ibu" value="<?= $formulir['nohp_ibu'] ?>">
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
                                    <option selected value="<?= $formulir['id_prov'] ?>"><?= $formulir['nama_provinsi'] ?></option>
                                    <?php foreach ($provinsi as $p) : ?>
                                        <option value="<?= $p['id_prov'] ?>"><?= $p['nama_provinsi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kabupaten/Kota</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="id_kabupaten" id="kabupaten">
                                    <option selected value="<?= $formulir['id_kabupaten'] ?>"><?= $formulir['nama_kabupaten'] ?></option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="id_kecamatan" id="kecamatan">
                                    <option selected value="<?= $formulir['id_kecamatan'] ?>"><?= $formulir['nama_kecamatan'] ?></option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat detail</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="alamat_siswa" value="<?= $formulir['alamat_siswa'] ?>">

                            </div>
                        </div>
                    </div>
                </div>

                <!--/Data wali siswa-->
                <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="wali-tab">
                    <div class="tab-pane fade show active" id="wali" role="tabpanel" aria-labelledby="wali-tab">
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Wali</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_wali" value="<?= $formulir['nama_wali'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Agama Wali</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="agama_wali">
                                    <option selected value="<?= $formulir['agama_wali'] ?>"><?= $formulir['agama_wali'] ?></option>
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
                                    <option selected value="<?= $formulir['pendidikan_wali'] ?>"><?= $formulir['pendidikan_wali'] ?></option>
                                    <option value="SD Sederajat">Sd Sederajat</option>
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
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pekerjaan_wali" value="<?= $formulir['pekerjaan_wali'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                            <div class="col-sm-9">
                                <select class="custom-select" name="penghasilan_wali">
                                    <option selected value="<?= $formulir['penghasilan_wali'] ?>"><?= $formulir['penghasilan_wali'] ?></option>
                                    <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                    <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                    <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                    <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">No hp wali</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nohp_wali" value="<?= $formulir['nohp_wali'] ?>">
                            </div>
                        </div>

                        <hr class="sidebar-divider mt-2">
                        <div class="form-group row justify-content-end">
                            <div class="col">
                                <button type="submit" class="btn btn-success float-right shadow-sm" name="tambah"><i class="fas fa-paper-plane"></i> Simpan Pembaruan</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>