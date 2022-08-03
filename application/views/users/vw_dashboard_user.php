<main>
    <?= $this->session->flashdata('pesan'); ?>
    <!--? slider Area Start-->
    <div class="slider-area position-relative fix">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">with patrick potter</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Our Hair Style make your look elegance
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">with patrick potter</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Our Hair Style make your look elegance
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stroke Text -->
        <div class="stock-text">
            <h2>Get More confident</h2>
            <h2>Get More confident</h2>
        </div>
        <!-- Arrow -->
        <div class="thumb-content-box">
            <div class="thumb-content">
                <h3>make an appointment now</h3>
                <a href="#"> <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- About-2 Area End -->
    <!--? Services Area Start -->
    <section class="service-area pb-150" id="service-info" style="margin: top 30px;">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-90 mt-50">
                        <span>Professional Services</span>
                        <h2>Our Best services that we offering to you</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="">
                            <img src="<?=base_url('assets/')?>img/cut.png" width="100" height="100">
                        </div>
                        <div class="service-cap">
                            <h4>Stylish Haircut</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="">
                            <img src="<?=base_url('assets/')?>img/perm.png" width="100" height="100">
                        </div>
                        <div class="service-cap">
                            <h4>Perm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="">
                            <img src="<?=base_url('assets/')?>img/smoot.png" width="100" height="100">
                        </div>
                        <div class="service-cap">
                            <h4>Smoothing</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="">
                            <img src="<?=base_url('assets/')?>img/hair color.png" width="100" height="100">
                        </div>
                        <div class="service-cap">
                            <h4>Hair Coloring</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->
    <!--? Team Start -->
    <div class="team-area pb-150" id="team-info">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-100">
                        <span>Professional Teams</span>
                        <h2>Our award winner hair cut exparts for you</h2>
                    </div>
                </div>
            </div>

            <div class="row team-active dot-style">
                <!-- single Tem -->
                <?php foreach($pegawai as $pgw){?>
                <div class="col-xl-4 col-lg-4 col-md-6 mx-5 col-sm-">
                    <div class="single-team mb-80 text-center">
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/profile/') . $pgw['gambar'];?>" alt="">
                        </div>
                        <div class="team-caption">
                            <span><?= $pgw['nama'];?></span>
                            <h4 style="color:white"><?= $pgw['no_hp'];  ?></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>


        </div>
    </div>
    <!-- Team End -->
    <!-- Best Pricing Area Start -->
    <div class="best-pricing section-padding2 position-relative">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-tittle mb-50">
                        <span>Our Best Pricing</span>
                        <h2>We provide best price<br> in the city!</h2>
                    </div>
                    <!-- Pricing  -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="pricing-list">
                                <ul>
                                    <li>Styling. . . . . . . . . . . . . . . . . . . . . . . . . . . .
                                        <span>Rp.20000</span></span>
                                    </li>
                                    <li>Styling + Color. . . . . . . . . . . . . . . . . . . <span>Rp.300000</span></li>
                                    <li>Styling + Tint. . . . . . . . . . . . . . . . . . . . . .<span>Rp.350000</span>
                                    </li>
                                    <li> Semi-permanent wave. . . . . . . . . . . . .<span>Rp.50000</span></li>
                                    <li> Cut + Styling. . . . . . . . . . . . . . . . . . . . . .<span>Rp.45000</span>
                                    </li>
                                    <li> Cut + Styling + Color. . . . . . . . . . . . . <span>Rp.300000</span></li>
                                    <li> Cut + Styling + Tint. . . . . . . . . . . . . . . .<span>Rp.600000</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="pricing-list">
                                <ul>
                                    <li>Cut. . . . . . . . . . . . . . . . . . . . . . . . . . . .
                                        .<span>Rp.45000</span></li>
                                    <li>Shave. . . . . . . . . . . . . . . . . . . . . . . . . . <span>Rp.20000</span>
                                    </li>
                                    <li>Beard trim. . . . . . . . . . . . . . . . . . . . . . <span>Rp.40000</span></li>
                                    <li>Cut + beard trim. . . . . . . . . . . . . . . . . <span>Rp.40000</span></li>
                                    <li>Cut + shave. . . . . . . . . . . . . . . . . . . . . . .<span>Rp.40000</span>
                                    </li>
                                    <li>Clean up. . . . . . . . . . . . . . . . . . . . . . . . .<span>Rp.40000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing img -->
        <div class="pricing-img">
            <img class="pricing-img1" src="<?=base_url('assets/userr/assets/')?>img/gallery/pricing1.png" alt="">
            <img class="pricing-img2" src="<?=base_url('assets/userr/assets/')?>img/gallery/pricing2.png" alt="">
        </div>
    </div>
    <!-- Best Pricing Area End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <span>our image gellary</span>
                        <h2>some images from our barber shop</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img "
                            style="background-image: url(<?=base_url('assets/userr/assets/')?>img/gallery/gallery1.png);">
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img "
                            style="background-image: url(<?=base_url('assets/userr/assets/')?>img/gallery/gallery2.png);">
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img "
                            style="background-image: url(<?=base_url('assets/userr/assets/')?>img/gallery/gallery3.png);">
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img "
                            style="background-image: url(<?=base_url('assets/userr/assets/')?>img/gallery/gallery4.png);">
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <section class="service-area pb-150" style="margin: top 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <h2>Location</h2>
                    </div>
                </div>
            </div>
            <!-- Section Tittle -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.1837022214536!2d101.44968801937704!3d0.5353463507977636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac134de9ccd3%3A0xcf14207359c478ed!2sBarber%20Shop!5e0!3m2!1sid!2sid!4v1658547533980!5m2!1sid!2sid"
                width="1185" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
    </section>



    <!--? Blog Area Start -->

    <!-- Blog Area End -->
</main>