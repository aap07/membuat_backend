<div class="login-box">
    <div class="login-logo">
        <h1 class="text-white text-auth"><b>Sistem</b><b class="text-dark">Backend</b></h1>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <h1 class="text-center text-title">Sign In</h1>

            <form action="<?= base_url('login'); ?>" method="post">
                <div class="input-group">
                    <input type="text" name="username" id="username" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('username') ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" name="password" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <a class="fas fa-eye text-gray-dark" id="click-password"></a>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-gray-dark"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password') ?>
                <button type="submit" class="btn btn-dark btn-block mt-3">Sign In</button>
            </form>

            <p class="mt-4">
                <a href="<?= base_url('register') ?>" class="text-center text-gray-dark">Register a new account</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->