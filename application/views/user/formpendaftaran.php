<div class="container-fluid mb-3">
    <div class="row ml-2">
        <div class="col-11 float right">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>

            <h1 class="h3 mb-4 text-gray-800 font-weight-bold"><?= $title ?></h1>
            <div class="card shadow">
                <?php
                if ($status['status'] == 1) : ?>
                    <ul class="nav nav-tabs mb-3 mt-3 container" id="myTab" role="tablist">
                        <li class="nav-item mt-2">
                            <a class="nav-link active" id="siswa-tab" data-toggle="tab" href="#siswa" role="tab" aria-controls="siswa" aria-selected="true"><button class="btn btn-primary">Data Siswa/i</button></a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" id="orang_tua-tab" data-toggle="tab" href="#orang_tua" role="tab" aria-controls="orang_tua" aria-selected="false"><button class="btn btn-primary">Data Orang Tua</button></a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" id="wali-tab" data-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="false"><button class="btn btn-primary">Data Wali</button></a>
                        </li>
                    </ul>

                    <form action="" method="post" class="mb-3 mt-2">
                        <!--/Data target form-->
                        <div class="tab-content mb-3 container" id="myTabContent">
                            <!--/Data Siswa-->
                            <div class="tab-pane fade show active mt-3" id="siswa" role="tabpanel" aria-labelledby="siswa-tab">
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panjang</label>
                                    <div class="col-sm-9 float-right">
                                        <input type="text" class="form-control float-right" id="inputEmail3" placeholder="" name="nama_mhs">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">NISN</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="inputEmail3" placeholder="" name="nisn_mhs">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="tempatlahir_mhs">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggallahir_mhs">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="agama_mhs">
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
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Warga Negara</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="wn_mhs">
                                            <option selected value="">Pilih Warga Negara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="input-group mb-3 col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jeniskelamin_mhs" class="custom-control-input" value="Pria">
                                            <label class="custom-control-label" for="customRadioInline1" name="jk_mhs">Pria</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="jeniskelamin_mhs" class="custom-control-input" value="Wanita">
                                            <label class="custom-control-label" for="customRadioInline2" name="jk_mhs">Wanita</label>
                                        </div>
                                    </div>
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
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="id_kabupaten" id="kabupaten" disabled="">
                                            <option selected>Pilih Kabupaten/Kota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="id_kecamatan" id="kecamatan" disabled="">
                                            <option selected>Pilih kecamatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat detail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" name="alamat_mhs">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Pos</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="inputEmail3" placeholder="" name="kodepos_mhs">
                                    </div>
                                </div>
                                <!--/Button Slanjutnya-->
                            </div>


                            <!--/Data Orang tua siswa -->
                            <div class="tab-pane fade" id="orang_tua" role="tabpanel" aria-labelledby="orang_tua-tab">
                                <div class="tab-pane fade show active" id="orang_tua" role="tabpanel" aria-labelledby="orang_tua-tab">
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">DATA AYAH</label>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama_ayah">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="agama_ayah">
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
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ayah</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="pendidikan_ayah">
                                                <option selected>Pilih pendidikan</option>
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
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pekerjaan_ayah">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Penghasilan/Bulan</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="penghasilan_ayah">
                                                <option selected value="">Pilih Penghasilan</option>
                                                <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                                <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                                <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                                <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Warga Negara</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="wn_ayah">
                                                <option selected value="">Pilih Warga Negara</option>
                                                <option value="WNI">Warga Negara Indonesia</option>
                                                <option value="WNA">Warga Negara Asing</option>
                                            </select>
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
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="agama_ibu">
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
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="pendidikan_ibu">
                                                <option selected>Pilih pendidikan</option>
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
                                                <option selected value="">Pilih Penghasilan</option>
                                                <option value="Kurang dari Rp 1.000.000,00">Kurang dari Rp 1.000.000,00</option>
                                                <option value="Rp 1.000.000,00 - Rp 2.500.000,00">Rp 1.000.000,00 - Rp 2.500.000,00</option>
                                                <option value="Rp 2.500.000,00 - Rp 5.000.000,00">Rp 2.500.000,00 - Rp 5.000.000,00</option>
                                                <option value="Lebih dari Rp 5.000.000,00">Lebih dari Rp 5.000.000,00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Warga Negara</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="wn_ibu">
                                                <option selected value="">Pilih Warga Negara</option>
                                                <option value="WNI">Warga Negara Indonesia</option>
                                                <option value="WNA">Warga Negara Asing</option>
                                            </select>
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
                                                <option selected>Pilih pendidikan</option>
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
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Warga Negara</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="wn_wali">
                                                <option selected value="">Pilih Warga Negara</option>
                                                <option value="WNI">Warga Negara Indonesia</option>
                                                <option value="WNA">Warga Negara Asing</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="sidebar-divider mt-2">
                                    <div class="form-group row justify-content-end">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success float-right" name="tambah"><i class="fas fa-paper-plane"></i> Kirim</button>
                                            <button type="reset" class="btn btn-danger mr-2 float-right"><i class="fas fa-trash"></i> Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
            </div>
        <?php else : ?>
            <div class="alert alert-danger mt-3 ml-2 mr-2" role="alert">
                <h5>
                    <font color="red" class="font-weight-bold">Bukan periode pendaftaran, atau pendaftaran telah di tutup</font>
                </h5>
                <font color="grey" class="">Untuk Informasi dapat di lihat di menu informasi pendaftaran</font>

            </div>
        <?php endif; ?>
        </div>
    </div>
</div>
</div>
</div>
<!-- /.col-lg-12 -->