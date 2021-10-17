<?= $this->extend('costumer_component/layout'); ?>
<?= $this->section('content'); ?>
<!-- costom css -->


<body id="page-top">
    <?= $this->include("costumer_component/navbar"); ?>

    <section class="masthead">
        <div class="cotainer p-5">
            <div class="row justify-content-center align-content-center">
                <div class="col-lg-4 hvr-grow">
                    <h1 class="costom-title">Login Page</h1>
                    <img src="<?= base_url('assets/img/music2.svg') ?>" width="100%" class="">
                </div>
                <div class="col-md-4 ">

                    <div class="card">
                        <div class="card-body p-3">
                            <form action="" method="">
                                <div class="form-group mt-3 mb-3">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>


                                <div class="form-group mt-3 mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>

                                <div class="form-group mt-3 mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex col-md-12 mt-3 mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a href="<?= base_url('auth/register') ?>" class="btn btn-link text-decoration-none">
                                        Belum Punya Akun?
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?= $this->endSection(); ?>