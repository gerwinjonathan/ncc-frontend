<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/index.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animation.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

    <title>Selamat Datang APELMAS Pariwisata!</title>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <script>AOS.init();</script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js">
    </script>

    <!--Header-->
    <header class="py-3 bg-light slide-bottom sticky-top">
        <div class="row flex-nowrap justify-content-around align-items-center">
            <div class="col-4 jusitfy-content-start pl-5">
                <a class="text-muted" href="<?php echo base_url(); ?>">Beranda</a>
            </div>
            <div class="col-4 text-center">
                <a class="text-dark" href="<?php echo base_url(); ?>"><b>APELMAS</b> Kota Malang</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center pr-5">
                <a class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('cLogin/index'); ?>">Login</a>
            </div>
        </div>
    </header>

    <!--Carousel Image-->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/index.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/index.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/index.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--Tentang APELMAS-->
    <div class="jumbotron jumbotron-fluid" style="background-color: #56D9CD;" data-aos="fade-right">
        <div class="container pt-5">
            <h2 class="display-5">Tentang <b>APELMAS</b></h2>
            <p><b>APELMAS</b> adalah <b>A</b>plikasi <b>PEL</b>ayanan <b>MAS</b>yarakat yang dikelola oleh Pemerintah
                Kota Malang.</p>
        </div>
    </div>

    <!--Wisata-->
    <div class="wisata m-5">
        <div class="text-center" data-aos="zoom-in">
            <h2 class="display-5"><span class="counter">100</span>+</b> Destinasi di Kota Malang<b></b></h2>
            <p>Ayo kunjungi daerah-daerah tempat wisata di Kota Malang</p><br />
        </div>

        <div class="card-columns">
            <div id="container">
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/taman_tugu.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Wisata Taman</h5>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/toko_oen.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Wisata Kuliner</h5>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/monumen_tgp.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Wisata Sejarah</h5>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/hotel.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Hotel dan Penginapan</h5>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/oleh_oleh.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Wisata Belanja & Oleh-Oleh</h5>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in">
                    <img class="card-img-top" src="assets/image/kampung_jodipan.jpg" alt="Card image cap" width="270px"
                        height="160px">
                    <div class="card-body">
                        <h5 class="card-title"><b><span class="counter">100</span>+</b> Wisata Edukasi</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col text-center" data-aos="zoom-in">
            <a href="<?php echo site_url('cPariwisata/getDaftarPariwisata'); ?>" class="btn btn-outline-primary">CEK YANG LAINNYA</a>
        </div>
    </div>

    <!--Footer-->
    <footer class="bg-dark text-white py-5" data-aos="fade-up">
        <div class="container">
            <div class="row separated">
                <div class="col-lg-6 py-5">
                    <div class="row">
                        <div class="col-md-8">
                            <p><b>APELMAS</b> adalah <b>A</b>plikasi <b>PEL</b>ayanan <b>MAS</b>yarakat yang dikelola
                                oleh Pemerintah Kota Malang. </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="pb-3 text-left"><b>NCC</b> Squad 2019.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.counterup.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>