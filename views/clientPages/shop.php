<?php
        ob_start();
?>


    <!--shop  area start-->
    
    <div class="shop_section shop_reverse">
    <hr class="my-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            
                            <?php foreach($listCategories as $c){ ?>
                                
                                    <div class="widget_list widget_categories">
                                        <a href="/Ecommerce/index.php/shopFiltered?categorie=<?php echo $c['categorie_name']; ?>"><h2><?php echo $c['categorie_name']; ?></h2></a>
                                    </div>
                                
                            <?php } ?>
                            
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <!--breadcrumbs area start-->
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                    <!--breadcrumbs area end-->

                    <div class="shop_banner d-flex align-items-center" data-bgimg="../assets/img/bg/shop_bg.jpg">
                        <div class="shop_banner_text">
                            <h2>essential <br> wears</h2>
                            <p>The collections basic items <br> essential for all girls</p>
                        </div>
                    </div>
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper d-flex justify-content-between align-items-center">
                        <div class="page_amount">
                            <p><span>1.260</span> Products Found</p>
                        </div>
                        <div class=" sorting_by d-flex align-items-center">
                            <span>SORT BY :</span>
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">NAME       3</option>
                                    <option  value="2">NAME  4</option>
                                    <option value="3">NAME  5</option>
                                    <option value="4">NAME  6</option>
                                    <option value="5">NAME  7</option>
                                    <option value="6">NAME  8</option>
                                </select>
                            </form>
                        </div>
                        <div class="toolbar_btn_wrapper d-flex align-items-center">
                            <div class="view_btn">
                                <a class="view" href="#">VIEW</a>
                            </div>
                            <div class="shop_toolbar_btn">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#" class="active btn-grid-3" data-role="grid_3" data-tippy="3"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-grid"></i></a></li>

                                    <li><a href="#" class="btn-list" data-role="grid_list" data-tippy="List" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper">
                    <?php foreach($listProducts as $p){ ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html" >
                                        <img class="primary_img" src="../assets/productsImages/<?php echo $p['general_image'] ; ?>" alt="consectetur">
                                    </a>
                                <?php if($p['discount'] != "0"){ ?>
                                    <div class="product_label">
                                        <span>-<?php echo $p['discount'] ; ?>%</span>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                        <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.html"><?php echo $p['name'] ; ?></a></h4>
                                    <p><a href="#"><?php echo $p['categorie_name'] ; ?></a></p>
                                    <div class="price_box">
                                        <span class="current_price"><?php echo ($p['price']+0)-($p['price']+0)*($p['discount']+0)/100 ; ?> MAD</span>
                                        <span class="old_price"><?php echo $p['price'] ; ?> MAD</span>
                                    </div>
                                    <div class="product_desc">
                                        <p><?php echo $p['description'] ; ?></p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="/Ecommerce/index.php/addToCart?id_product=<?php echo $p['id_product'] ; ?>" data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

<?php 
    $content = ob_get_clean();
    require('./views/clientPages/baseLayOut.php');
?>