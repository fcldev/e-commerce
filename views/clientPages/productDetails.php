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
                            <div class="zoom_tab_img">
                            <?php foreach($images as $image){ ?>    
                                <a class="zoom_tabimg_list" href="javascript:void(0)"><img width="100px" height="100px" src="../assets/productsImages/<?php echo $image['image_url'] ; ?>" alt="tab-thumb"></a>
                            <?php } ?>
                            </div>
                            <div class="product_zoom_main_img">
                            <?php foreach($images as $image){ ?>  
                                <div class="product_zoom_thumb">
                                    <img data-image="../assets/img/product/big-product/product1.png" width="300px" height="300px" src="../assets/productsImages/<?php echo $image['image_url'] ; ?>" alt="">
                                </div>
                            <?php } ?>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form>
                            <h1><?php echo $product['name'] ;?></h1>
                            <div class="product_ratting_review d-flex align-items-center">
                                <div class=" star_ratting">
                                    <ul class="d-flex">
                                        <?php for($x=0; $x < $product['evaluation'];$x++){ ?>
                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="product_review">
                                    <ul class="d-flex">
                                        <li><?php echo count($listR); ?> reviews</li>
                                        <li><a href="#reviews" >Write your review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="price_box">
                                <span class="current_price"><?php echo number_format($product['price'])-number_format($product['price'])*number_format($product['discount'])/100 ; ?> MAD</span>
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
                                        <input id="quantity" min="1" max="100" type="tex" value="1">
                                    </div>
                                    <button class="button btn btn-primary" type="button" onclick="addToCart('<?php echo $product['id_product'] ;?>')" ><i class="ion-android-add"></i> Add To Cart</button>
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
                                    <h2><?php echo count($comments); ?> review for <?php echo $product['name']; ?></h2>
                                    <?php foreach($comments as $c){ ?>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="../assets/usersProfileImage/<?php echo $c['profile_image'] ?>" width="50px" height="50px" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul class="d-flex">
                                                    <?php for($x = 0;$x<= $c['evaluation']-1;$x++){ ?>
                                                        <li><i class="ion-ios-star"></i></li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                                <p><strong><?php echo $c['full_name'] ?> </strong>- <?php echo $c['date'] ?></p>
                                                <span><?php echo $c['comment'] ?></span>
                                                <?php if($_SESSION['userInfo']['id_user'] == $c['id_user']){ ?>
                                                    <a class="star_rating" href="/Ecommerce/index.php/deleteComment?id_comment=<?php echo $c['id_comment']; ?>&id_user=<?php echo $c['id_user']; ?>&id_product=<?php echo $product['id_product']; ?>">delete</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                                       
                                    </div>
                                    <?php } ?>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul class="d-flex">
                                               <li><a href="/Ecommerce/index.php/addEvaluation?id_product=<?php echo $product['id_product'] ?>&evaluation=1"><i class="icon-star"></i></a></li>
                                               <li><a href="/Ecommerce/index.php/addEvaluation?id_product=<?php echo $product['id_product'] ?>&evaluation=2"><i class="icon-star"></i></a></li>
                                               <li><a href="/Ecommerce/index.php/addEvaluation?id_product=<?php echo $product['id_product'] ?>&evaluation=3"><i class="icon-star"></i></a></li>
                                               <li><a href="/Ecommerce/index.php/addEvaluation?id_product=<?php echo $product['id_product'] ?>&evaluation=4"><i class="icon-star"></i></a></li>
                                               <li><a href="/Ecommerce/index.php/addEvaluation?id_product=<?php echo $product['id_product'] ?>&evaluation=5"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form method="post" action="/Ecommerce/index.php/addComment?id_product=<?php echo $product['id_product'] ?>">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
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
    <script>
        function addToCart(id){
            var quantity = document.getElementById('quantity').value;
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {id_product:id,quantity:quantity,function_name:"addToCartWithQuantity"},
                type:"POST",
                success:function(data, status){
                    alert(status);
                }
            });
        }
    </script>
    <?php
        $content = ob_get_clean();
        require('./views/clientPages/baseLayOut.php');
    ?>