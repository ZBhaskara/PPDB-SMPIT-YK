<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logo/logo.png') ?>" height="180px" width="180px" class=""><br>
                                    <h1 class="h4 text-gray-900 mb-4 mt-4">Silakan Login</h1>
                                </div>
                                <?= $this->session->flashdata('message') ?>
                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control " id="email" placeholder="Masukan Email" name="email" value="<?= set_value('email') ?>" autocomplete="off">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group input-group mb-0">
                                        <input type="password" class="form-control form-control mt-2" id="password" name="password" placeholder="Masukan Password" autocomplete="off">
                                        <div class="input-group-prepend ">
                                            <div class="input-group-text mt-2">
                                                <a href="#" class="text-dark" id="icon-click">
                                                    <i class="fas fa-eye" id="icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>

                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-info btn-user btn-block mt-4">
                                                Login <i class="far fa-arrow-alt-circle-right"></i>
                                            </button>
                                        </div>

                                    </div>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Buat akun baru!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>