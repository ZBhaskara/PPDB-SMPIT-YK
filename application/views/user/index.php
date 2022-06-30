<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row p-3">
        <div class="col-lg-6 ">
            <?= $this->session->flashdata('message'); ?>
            <div class="card shadow-sm ">
                <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <div class="row no-gutters p-3">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name'] ?></h5>
                            <p class="card-text"><?= $user['email'] ?></p>
                            <p class="card-text"><small class="text-muted">Admin sejak <?= date('d F Y', $user['date_create']) ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>