<div class="row justify-content-center">
    <div class="col-11 mt-3 mb-2 ml-1 mr-1">
        <div class="card shadow-sm mt-2 mb-lg-5 shadow-sm">
            <!-- Card Header - Dropdown -->
            <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
            <div class="card-header py-4 d-flex flex-row ">
                <h5 class="font-weight-bold text-black judul">CEK STATUS PENDAFTARAN </h5>
            </div>
            <!-- Card Body -->
            <div class="card-body mb-2">
                <div class="row p-lg-2">
                    <div class="col-12">
                        <div class="form-group" id="only-number">
                            <form id="msform2">
                                <input type="text" class="form-control mb-2 input-cek" id="title" placeholder="Masukan Kode Pendaftaran" name="nisn" onchange="handlechange()" onkeyup="EnableDisable(this)" />
                            </form>
                        </div>
                    </div>

                </div>
                <!-- Status DAta pendaftar   -->
                <di id="myDIV" style="display:none">
                    <div class="col-xl-12 mt-2">
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-black judul">
                                <font color="#36b9cc" class="">STATUS DATA PENDAFTAR</font>
                            </h6>
                        </div>
                        <hr class="mb-4 mt-2">
                        <!-- Card Body -->
                        <div class="form-group mt-2">

                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Nama Lengkap</label>
                                <div class="col-sm-5">
                                    : &nbsp;<input type="text" class="cek font-weight-bold" id="inputEmail3" placeholder="" name="nama_siswa" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    : &nbsp;<input type="text" class="cek font-weight-bold mt-lg-2" id="inputEmail3" placeholder="" name="ttl" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Status Pendaftaran</label>
                                <div class="col-sm-5">
                                    : &nbsp;<input type="text" class="cek font-weight-bold mt-lg-2" id="inputEmail3" placeholder="" name="status_pendaftaran" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-sm-12 col-form-label"><small>
                                        <font color="red">Bukti pendaftaran tidak dapat di cetak selama status pendaftaran masih menunggu verifikasi...!</font>
                                    </small>
                                </label>
                            </div>

                            <div class="form-group row mt-2">
                                <label for="inputEmail3" class="col-sm-12 col-form-label"><small>
                                        <form action="<?= base_url('Laporan/cetak') ?>" method="post" class="">
                                            <div class="form-group">
                                                <textarea name="id_siswa" id="niknya" cols="30" rows="10" style="display: none;">
                                        </textarea>
                                            </div>
                                            <button type="submit" name="btnKirim" id="btnSubmit" value="Submit" class="btn btn-info float-lg-center shadow-sm" disabled="disabled"> Cetak Bukti <i class="fas fa-print"></i></button>
                                        </form>
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>