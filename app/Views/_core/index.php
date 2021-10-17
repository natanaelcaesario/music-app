<?= $this->extend('costumer_component/layout'); ?>
<?= $this->section('content'); ?>

<body id="page-top">
    <?= $this->include("costumer_component/navbar"); ?>
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center ">
                <div class="col-lg-6 hvr-grow">
                    <div class="mb-5 mb-lg-0 text-center">
                        <h1 class="display-1 lh-1 mb-3">Sewa Alat Musik Sekarang Jadi Mudah</h1>
                        <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                        <a class="btn btn-lg btn-primary me-lg-3 mb-4 mb-lg-0" href="#!">Sewa Alat Kamu Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/music.svg" width="100%" class="hvr-grow">
                </div>
            </div>
        </div>
    </header>

    <section class="produk">
        <div class="container ">
            <div class="row">


                <div class="col-lg-3 mt-2 hvr-grow">
                    <div class="card shadow border-primary ">
                        <img class="card-img-top" src="product/guitar.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary"> <i class="bi bi-shop"></i> Sewa Alat</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </section>


    <?= $this->endSection(); ?>