<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uthr – Fashion eCommerce HTML Template </title>
    <meta name="description" content="Uthr Fashion eCommerce Bootstrap 5 Template is an innovative and modern e-commerce online store website template." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/font.awesome.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--modernizr min js here-->
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- jQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>

</head>
<body>
    <!--header area start-->
    <header class="header_section header_transparent">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_top_inner d-flex justify-content-between align-items-center">
                            <div class="header_contact_info">
                                <ul class="d-flex">
                                    <li class="text-white"> <i class="icons icon-phone"></i> <a
                                            href="tel:+05483716566">+05 ** ** ** **</a></li>
                                    <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a
                                            href="#">*********@*****.com</a></li>
                                </ul>
                            </div>
                            <div class="free_shipping_text">
                                <p class="text-white">Free shipping worldwide for orders over $99</p>
                            </div>
                            <div class="header_top_sidebar d-flex align-items-center">
                                <div class="header_social d-flex">
                                    <span>Follow us</span>
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_container d-flex justify-content-between align-items-center">
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                            <div class="header_logo">
                                <a class="sticky_none" href="/Ecommerce/index.php/"><img src="../assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!--main menu start-->
                            <div class="main_menu d-none d-lg-block">
                                <nav>
                                    <ul class="d-flex">
                                        <li><a class="active" href="/Ecommerce/index.php/">Home</a> </li>
                                        <li><a href="/Ecommerce/index.php/aboutUs">about us</a></li>
                                        <li><a href="/Ecommerce/index.php/shop">shop</a></li>
                                        <li><a href="#">pages</a>
                                            <ul class="sub_menu">
                                                <li><a href="/Ecommerce/index.php/cart">Cart Pages</a></li>
                                                <li><a href="/Ecommerce/index.php/checkout">Checkout Pages</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </li>
                                    <li class="account_link"><a href="#"><i class="icon-user icons"></i></a>
                                        <ul class="dropdown_account_link">
                                            <?php if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] === 'customer'){ ?>
                                                <li><a href="/Ecommerce/index.php/"><?php echo $_SESSION['userInfo']['full_name']; ?></a></li>
                                                <li><a href="/Ecommerce/index.php/logout">logout</a></li>
                                                <li><a href="#">Contact</a></li>
                                            <?php }elseif(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] === 'admin'){ ?>
                                                <li><a href="/Ecommerce/index.php/"><?php echo $_SESSION['userInfo'][1]; ?></a></li>
                                                <li><a href="/Ecommerce/index.php/logout">logout</a></li>
                                                <li><a href="/Ecommerce/index.php/dashboardUser">dashboard</a></li>
                                            <?php }else{ ?>
                                                <li><a href="/Ecommerce/index.php/loginRegister">Login</a></li>
                                                <li><a href="#">Contact</a></li>
                                            <?php } ?>    
                                        </ul>
                                    </li>
                                    <li class="shopping_cart"><a href="/Ecommerce/index.php/cart">
                                        <i class="icon-basket-loaded icons"></i></a>
                                        <span id="cart" class="item_count">
                                            <?php echo $cartCount; ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page search box -->
        <div class="page_search_box">
            <div class="search_close">
                <i class="ion-close-round"></i>
            </div>
            <form class="border-bottom" method="post" action="/Ecommerce/index.php/searsh">
                <input class="border-0" name="searshBar" placeholder="Search products..." type="text">
                <button type="submit"><span class="icon-magnifier icons"></span></button>
            </form>
        </div>

    </header>
    <!--header area end-->
        <!--offcanvas menu area start-->
    <div class="body_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="header_contact_info">
                        <ul class="d-flex">
                            <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+05483716566">+054
                                    8371 65 66</a></li>
                            <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a
                                    href="#">uthrstore@domain.com</a></li>
                        </ul>
                    </div>
                    <div class="header_social d-flex">
                        <span>Follow us</span>
                        <ul class="d-flex">
                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                            <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                            <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="language_currency">
                        
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="/Ecommerce/index.php/">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/Ecommerce/index.php/aboutUs">About us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/Ecommerce/index.php/shop">Shop</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="/Ecommerce/index.php/cart">cart</a></li>
                                    <li><a href="/Ecommerce/index.php/aboutUs">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->
    <!-- content start her -->
    <?php
        echo $content;
    ?>
    <!-- content end her -->

 

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="footer_widget_list">
                        <div class="footer_logo">
                            <a href="#"><img src="../assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <div class="footer_contact_list">
                                <span>Our Location</span>
                                <p>*** ********* Village. ***, ********, MOROCCO</p>
                            </div>
                            <div class="footer_contact_list">
                                <span>24/7 hotline:</span>
                                <a href="tel:(+99)0521282399">(+99) *** *** ****</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="footer_widget_list text-right">
                        <div class="footer_menu">
                            <ul class="d-flex justify-content-end">
                                <li><a href="index.html">home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="/Ecommerce/index.php/productDetails">About us</a></li>
                                <li><a href="#">pages</a></li>
                            </ul>
                        </div>
                        <div class="footer_social">
                            <ul class="d-flex justify-content-end">
                                <li><a href="https://twitter.com" data-tippy="Twitter" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com" data-tippy="Facebook" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-facebook"></i></a></li>
                                <li><a href="https://www.google.com" data-tippy="googleplus" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://www.instagram.com" data-tippy="Instagram" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="https://www.youtube.com" data-tippy="Youtube" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- JS
============================================ -->

    <script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/vendor/popper.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jquery.scrollup.min.js"></script>
    <script src="../assets/js/images-loaded.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/jquery.nice-select.js"></script>
    <script src="../assets/js/tippy-bundle.umd.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.instagramFeed.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/mailchimp-ajax.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    

</body>

</html>
