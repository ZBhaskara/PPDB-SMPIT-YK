<div class="row">
    <div class="col">
        <?= form_open_multipart('admin/dataakun'); ?>
        <div class="form-group row mt-3 mr-2">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
            </div>
        </div>

        <div class="form-group row mt-3 mr-2">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>

        <div class="form-group row mt-3 mr-2">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Status Akun</label>
            <div class="col-sm-9">
                <select class="custom-select" name="status">
                    <option selected>Pilih Status Akun</option>
                    <option value="1">Aktif</option>
                    <option value="2">Tidak Aktif</option>
                </select>
            </div>
        </div>

        <div class=" form-group row mt-3  mr-2">
            <div class="div col-sm-3">Pictures</div>
            <div class="div col-sm-9">
                <div class="div row">
                    <div class="div col-sm-3">
                        <img src="<?= base_url('assets/img/profile/') ?>default.jpg" class="img-thumbnail">
                    </div>
                    <div class="div col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary mt-4 float-right mr-2" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary mt-4 float-right"><i class="fas fa-edit"></i> Edit</button>
</div>