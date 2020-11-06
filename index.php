<?php require('top.php') ?>
<div class="body__overlay"></div>

<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>For The Gamers</h2>
                                <h1>DIAMOND WOLF STORE</h1>
                                <div class="cr__btn">
                                    <a href="http://127.0.0.1/phpecompart6/product.php?id=16">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/ps5.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Upcoming Games.</h2>
                    <p>PS5 exclusives!! From Nov 11th.. HURRY!!</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    <?php
                    $get_product = get_product($con, 4);
                    foreach ($get_product as $list) {
                    ?>
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product.php?id=<?php echo $list['id'] ?>">
                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images">
                                    </a>
                                </div>

                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
                                    <ul class="fr__pro__prize">
                                        <li class="old__prize"><?php echo $list['mrp'] ?></li>
                                        <li><?php echo $list['price'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller, Absolute Best of the Decade</h2>
                    <p>PS4 games at all time low price, you better Hurry</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__wrap clearfix">
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="http://127.0.0.1/phpecompart6/product.php?id=20.html">
                                <img src="images/product/TLOU.jpg" alt="product images">
                            </a>
                        </div>

                        <div class="fr__product__inner">
                            <h4><a href="#">The Last of US</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"></li>
                                <li>Rs 1250/-</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="http://localhost/phpecompart6/product.php?id=21.html">
                                <img src="images/product/UC4.jpg" alt="product images">
                            </a>
                        </div>

                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">Uncharted 4</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"></li>
                                <li>Rs 1500/-</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="http://127.0.0.1/phpecompart6/product.php?id=22.html">
                                <img src="images/product/BB.jpg" alt="product images">
                            </a>
                        </div>

                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">BloodBorne</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"></li>
                                <li>Rs 899/-</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product-details.html">
                                <img src="images/product/P5.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="http://127.0.0.1/phpecompart6/product.php?id=23.html">Persona 5 </a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"></li>
                                <li>Rs 1500/-</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->
<?php require('footer.php') ?>