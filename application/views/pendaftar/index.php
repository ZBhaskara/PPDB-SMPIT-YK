<div class="row justify-content-center m-3">
    <div class="col-xl-6 mt-4 mb-4 ml-sm-1">
        <div class="card shadow-sm mb-2">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-black judul">ALUR PENDAFTARAN</h5>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <img src="<?= base_url('assets/img/info/') ?><?= $img['image'] ?> " class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>

    <div class="col-xl-5 mb-4 mt-4 justify-content-center">
        <div class="card shadow-sm mb-2 ">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between ">
                <h5 class="m-0 font-weight-bold text-black judul">JADWAL DAN INFO PENDAFTARAN</h5>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <?php foreach ($halaman_awal as $h) : ?>
                    <div class="card bg-<?= $h['warna'] ?> text-white mb-1">
                        <div class="card-body shadow">
                            <h6 class="text-bold text-uppercase judul">
                                <strong><?= $h['gelombang'] ?></strong>
                            </h6>
                            <p>
                                Untuk pendaftaran <?= $h['gelombang'] ?> mulai dibuka pada
                                <?= date('d F Y', strtotime($h['buka'])) ?> sampai dengan <?= date('d F Y', strtotime($h['tutup'])) ?> ,serta untuk registrasi pendaftaran di lakukan pada <?= date('d F Y', strtotime($h['hasil'])) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>


                </hr>
            </div>
        </div>
    </div>
</div>
</div>