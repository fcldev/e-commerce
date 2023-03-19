<?php
    ob_start();
?>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="shop.html">shop</a></li>
                            <li>Product Example</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <section class="product_details mb-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_zoom_gallery">
                       <div class="zoom_gallery_inner d-flex">
                           
                           <div class="product_zoom_main_img">
                                <div class="product_zoom_thumb">
                                    <img data-image="../assets/img/product/big-product/product1.png" src="../assets/img/product/<?php echo $product['general_image'] ;?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                            <h1>Edwin T-Shirt Logo Script Print in Navy</h1>
                            <div class="product_ratting_review d-flex align-items-center">
                                <div class=" product_ratting">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review">
                                    <ul class="d-flex">
                                        <li>4 reviews</li>
                                        <li>Write your review</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price_box">
                                <span class="current_price"><?php echo $product['price'] ;?> MAD</span>
                            </div>
                            <div class="product_availalbe">
                                <ul class="d-flex">
                                    <li><i class="icon-layers icons"></i> Only <span><?php echo $product['quantity'] ;?></span> left </li>
                                    <li>Availalbe: <span class="stock">In Stock</span></li>
                                </ul>
                            </div>
                            
                                <div class="filter__list widget_size d-flex align-items-center">
                                    <h3>sizes available</h3>
                                    <ul>
                                    <?php foreach(explode(',',$product['sizes_available']) as $tag){ ?>
                                        <li>
                                            <a href="javascript:void(0)"><?php echo $tag; ?></a>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>

                                <div class="variant_quantity_btn d-flex">
                                    <div class="pro-qty border">
                                        <input min="1" max="100" type="tex" value="1">
                                    </div>
                                    <button class="button btn btn-primary" type="submit"><i class="ion-android-add"></i> Add To Cart</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button border-bottom">
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Product Description</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews          </a>
                                </li>
                                 <li>
                                   <a data-toggle="tab" href="#tags" role="tab" aria-controls="tags" aria-selected="false">Tags </a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Custom Tab Video </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    <p><?php echo $product['description'] ;?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="../assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tags" role="tabpanel" >
                                <div class="product_info_content">
                                    <ul>
                                        <?php foreach(explode(',',$product['tags']) as $tag){ ?>
                                                <li><?php echo $tag; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="video" role="tabpanel" >
                                <div class="product_tab_vidio text-center">
                                    <iframe width="729" height="410" src="<?php echo $product['video'] ?>"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->
    <?php
        $content = ob_get_clean();
        require('./views/clientPages/baseLayOut.php');
    ?>