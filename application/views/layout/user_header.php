<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Barber  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url("assets/userr/assets/")?>img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/slicknav.css">
    <link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/gijgo.css">
    <link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/animated-headline.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/slick.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url("assets/userr/assets/")?>css/style.css">
</head>
<body style="background-color: rgb(112, 103, 103); ">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=base_url('assets/userr/assets/')?>img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-20">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?=base_url('User/')?>"><img src="<?=base_url('assets/userr/assets/')?>img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?=base_url('User/')?>">Home</a></li>
                                            <li><a href="#service-info">Service</a></li>
                                            <li><a href="<?= base_url('Pemesanan/'); ?>">Booking</a></li>
                                            <li><a href="#team-info">Our Team</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <?php if ($this->session->userdata('email')) { ?>

                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a href="#">Welcome | <?= $this->session->userdata('email'); ?></a>
                                                <ul class="submenu">
                                                    <li><a href="<?=base_url('User/profile')?>">Profil</a></li>
                                                    <li><a href="<?=base_url('Auth/logout')?>">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <?php } else { ?>
                                    <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a href="<?=base_url('Auth/login')?>">Login</a>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <?php } ?>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>