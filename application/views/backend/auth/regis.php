<div class="register-box">
    <div class="register-logo">
        <h1 class="text-white text-auth"><b>Sistem</b><b class="text-dark">Backend</b></h1>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <h1 class="text-center text-title">Register</h1>

            <form action="<?= base_url('register') ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" name="username" id="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('username'); ?>
                <div class="input-group mt-3">
                    <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : null ?>" name="name" id="name" placeholder="Full Name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('name'); ?>
                <div class="input-group mt-3">
                    <input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>" name="email" id="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email'); ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control <?= form_error('password1') ? 'is-invalid' : null ?>" name="password1" id="password1" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <a class="fas fa-eye text-gray-dark" id="click-password1"></a>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1'); ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : null ?>" name="password2" id="password2" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <a class="fas fa-eye text-gray-dark" id="click-password2"></a>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password2'); ?>
                <button type="submit" class="btn btn-dark btn-block mt-3">Register</button>
            </form>

            <p class="mt-4">
                <a href="<?= base_url('login') ?>" class="text-center text-gray-dark">I already have a account</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->