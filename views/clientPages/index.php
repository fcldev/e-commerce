    <?php
        ob_start();
    ?>
    <!--slider area start-->
    <section class="slider_section mb-63">
        <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": true,
            "autoplay": false,
            "speed": 300,
            "infinite": true
        }'>
            <div class="single_slider d-flex align-items-center" data-bgimg="../assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="shop.html">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="../assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="shop.html">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="../assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="shop.html">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    

    <!--shipping section start-->
    <section class="shipping_section mb-102">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_inner d-flex justify-content-between">
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-cursor icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Shipping</h3>
                                <p>Orders over $100</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-reload icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-lock icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>100% Payment Secure</h3>
                                <p>Payment Online</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-tag icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Affordable Price</h3>
                                <p>Guaranteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping section end-->

    <!-- banner section start -->
    <section class="banner_section mb-109" >
        <div class="container">
            <div class="section_title mb-60">
                <h2>featured collections</h2>
            </div>
            <div class="banner_container d-flex">
                <figure class="single_banner position-relative mr-30">
                    <img src="../assets/img/bg/bg1.jpg" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3>Zara Pattern <br> backpacks</h3>
                        <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                        <a class="btn btn-primary" href="shop.html">Shop Now</a>
                    </figcaption>
                </figure>
                <figure class="single_banner position-relative">
                    <img src="../assets/img/bg/bg2.jpg" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3 class="text-white">Basic Color Caps</h3>
                        <p class="text-white">Minimalist never cool, choose and make <br> the simple great again!</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- product section best items start -->
    <section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>best selling items</h2>
                </div>
                <div class="product_tab_btn d-flex">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#best" role="tab" aria-controls="all"
                                aria-selected="true">
                                Best
                            </a>
                        </li>
                    <?php foreach($listCategories as $c){ ?>
                        <li>
                            <a data-toggle="tab" href="#<?php echo $c['categorie_name'] ; ?>" role="tab" aria-controls="clothings"
                                aria-selected="false">
                                <?php echo $c['categorie_name'] ; ?>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                    <div class="all_product">
                        <a href="/Ecommerce/index.php/allProducts">All Product</a>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="best" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                            {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                            {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                            {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                        <?php   $count = 0;
                                foreach($bestItems as $p){ 
                                    if($count != 8){
                                ?>
                            <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="/Ecommerce/index.php/productDetails?idProduct=<?php echo $p['id_product'] ;?>">
                                            <img class="primary_img" src="../assets/productsImages/<?php echo $p['general_image'] ; ?>"
                                                alt="consectetur">
                                        </a>
                                        <?php if($p['discount'] != "0"){ ?>
                                        <div class="product_label">
                                            <span>-<?php echo $p['discount'] ; ?>%</span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                            <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        <?php 
                            $count += 1;
                            }}
                         ?>
                        </div>
                    </div>
                <?php foreach($listCategories as $c){ ?>
                    <div class="tab-pane fade" id="<?php echo $c['categorie_name']; ?>" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                            {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                            {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                            {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                        <?php
                            $count = 0;
                            foreach($bestItems as $p){ 
                                if($p['categorie_name'] == $c['categorie_name'] && $count != 8){ ?>
                            <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="/Ecommerce/index.php/productDetails?idProduct=<?php echo $p['id_product'] ;?>">
                                            <img class="primary_img" src="../assets/productsImages/<?php echo $p['general_image'] ; ?>"
                                                alt="consectetur">
                                        </a>
                                        <?php if($p['discount'] != "0"){ ?>
                                        <div class="product_label">
                                            <span>-<?php echo $p['discount'] ; ?>%</span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                            <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        <?php
                            $count += 1;
                            }}
                        ?>
                            
                        </div>
                    </div>
                <?php } ?>   
                </div>
            </div>
        </div>
    </section>
    <!-- product  section best items  end -->

    <!-- banner section start -->
    <section class="banner_section banner_style2 mb-109">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
                        <img src="../assets/img/bg/bg3.jpg" alt="">
                        <div class="banner_text position-absolute">
                            <h3>Minimalist <br> sneaker</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="shop.html">Shop Now</a>
                        </div>
                        <div class="banner_tag">
                            <span>new arrivals <br> women</span>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
                        <img src="../assets/img/bg/bg4.jpg" alt="">
                        <div class="banner_text position-absolute text__style2">
                            <h3><span>50%</span> OFF <br> for Autumn</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="shop.html">Shop Now</a>
                        </div>
                        <div class="banner_tag">
                            <span>mega sale</span>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- product  section new arrivals  start -->
   
    <section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>best selling items</h2>
                </div>
                <div class="product_tab_btn d-flex">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#best1" role="tab" aria-controls="all"
                                aria-selected="true">
                                Best
                            </a>
                        </li>
                    <?php foreach($listCategories as $c){ ?>
                        <li>
                            <a data-toggle="tab" href="#<?php echo $c['categorie_name'] ; ?>1" role="tab" aria-controls="clothings"
                                aria-selected="false">
                                <?php echo $c['categorie_name'] ; ?>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                    <div class="all_product">
                        <a href="/Ecommerce/index.php/allProducts">All Product</a>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="best1" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                            {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                            {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                            {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                        <?php
                            $count = 0;
                            foreach($newArrivals as $p){
                                if($count != 8){ ?>
                            <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="/Ecommerce/index.php/productDetails?idProduct=<?php echo $p['id_product'] ;?>">
                                            <img class="primary_img" src="../assets/productsImages/<?php echo $p['general_image'] ; ?>"
                                                alt="consectetur">
                                        </a>
                                        <?php if($p['discount'] != "0"){ ?>
                                        <div class="product_label">
                                            <span>-<?php echo $p['discount'] ; ?>%</span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                            <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        <?php
                            $count += 1;
                            }}
                        ?>
                        </div>
                    </div>
                <?php 
                    foreach($listCategories as $c){
                        $count = 0;
                ?>
                    <div class="tab-pane fade" id="<?php echo $c['categorie_name']; ?>1" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                            {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                            {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                            {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                        <?php foreach($bestItems as $p){ 
                                if($p['categorie_name'] == $c['categorie_name'] && $count != 8){ ?>
                            <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="/Ecommerce/index.php/productDetails?idProduct=<?php echo $p['id_product'] ;?>">
                                            <img class="primary_img" src="../assets/productsImages/<?php echo $p['general_image'] ; ?>"
                                                alt="consectetur">
                                        </a>
                                        <?php if($p['discount'] != "0"){ ?>
                                        <div class="product_label">
                                            <span>-<?php echo $p['discount'] ; ?>%</span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                            <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        <?php
                            $count += 1; 
                            }}
                        ?>
                            
                        </div>
                    </div>
                <?php } ?>   
                </div>
            </div>
        </div>
    </section>
    
    <!-- product  section new arrivals  start -->

    <?php 
        $content = ob_get_clean();
        require('./views/clientPages/baseLayOut.php');
    ?>