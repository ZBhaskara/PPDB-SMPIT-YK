<!-- Begin Page Content -->
<div class="container-fluid">
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    <!-- Page Heading -->
    <div class="flash-data-open" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>

    <div class="row p-3">
        <div class="col-6">
            <div class="card shadow-sm">
                <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <div class="row mt-4 align-self-center">
                    <form action="<?= base_url() ?>admin/updateperiode" method="POST">
                        <input type="hidden" name="id" value="<?= $status['id'] ?>">
                        <table class="mb-4 ml-3">
                            <tr>
                                <td class="font-weight-bold mr-2"> Tutup</td>
                                <td> <label class="switch mt-2 ml-2 mr-2">
                                        <?php
                                        if ($status['status'] == null) : ?>
                                            <input type="checkbox" value="1" name="status">
                                            <span class="slider round"></span>
                                    </label>

                                <?php else : ?>
                                    <input type="checkbox" value="" name="status" checked>
                                    <span class="slider round"></span>
                                    </label>
                                <?php endif; ?>

                                </td>
                                <td class="font-weight-bold ml-4"> Buka</td>
                            </tr>
                        </table>
                        <button class="btn btn-info mb-4 align-self-center shadow-sm" type="submit" name="ubah"><i class="fas fa-recycle"></i> Simpan Perubahan</button>
                </div>
                <div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->