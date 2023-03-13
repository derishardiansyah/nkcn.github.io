    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body ">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar User</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('register_user'); ?>">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username..." value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', ' </small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password..." value="<?= set_value('password'); ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', ' </small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="nip" class="form-control form-control-user" id="nip" name="nip" placeholder="Masukan NIP..." value="<?= set_value('nip'); ?>">
                                    <?= form_error('nip', '<small class="text-danger pl-3">', ' </small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Alamat Email..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', ' </small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="<?= base_url('login_user'); ?>">Sudah mempunyai akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>