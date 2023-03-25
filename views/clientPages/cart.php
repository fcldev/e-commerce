<?php
    ob_start();
?>

      <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="#">pages</a></li>
                        </ul>
                        <h3>Shopping Cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="cart_page_inner mb-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart_page_tabel">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>product </th>
                                            <th>information</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
                                $total = 0;
                                foreach($listProducts as $p){ 
                                        $total += ($p['quantity'] + 0)*($p['product']['price'] + 0);
                        ?>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="../assets/productsImages/<?php echo $p['product']['image_url'] ?>" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4><?php echo $p['product']['name'] ?></h4>
                                                    <ul>
                                                        <li>
                                                            <select onchange="changeCartColor(this,'<?php echo $p['product']['id_product']; ?>')" class="select_option border">
                                                                <option value="">color</option>
                                                            <?php foreach(explode(',',$p['product']['colors']) as $color){ ?>
                                                                <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                                                            <?php } ?>
                                                            </select>                                                      
                                                        </li>  
                                                        <li>
                                                            <select onchange="changeCartSize(this,'<?php echo $p['product']['id_product']; ?>')" class="select_option border" style="width:100px">
                                                                <option value="">size</option>
                                                            <?php foreach(explode(',',$p['product']['sizes_available']) as $size){ ?>
                                                                <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                                            <?php } ?>
                                                            </select>   
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span><?php echo $p['product']['price'] ?> MAD</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" oninput="changeCartQuantity(this,'<?php echo $p['product']['id_product'] ?>')" max="100" value="<?php echo $p['quantity'] ?>" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span><?php echo ($p['quantity'] + 0)*($p['product']['price'] + 0) ?> MAD</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="/Ecommerce/index.php/deleteFromCart?id_product=<?php echo $p['product']['id_product']; ?>"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_page_button border-top d-flex justify-content-between">
                                <div class="shopping_cart_btn">
                                    <a href="/Ecommerce/index.php/clearCart" style="z-index: 8 !important; " class="btn btn-primary border">CLEAR SHOPPING CART</a>
                                </div>
                                <div class="shopping_cart_btn">
                                    <a href="/Ecommerce/index.php/shop" class="btn btn-primary border">CONTINUE SHOPPING</a>
                                </div>
                                
                            </div>
                         </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate top">
                                <h3 class="border-bottom">Calculate Shipping </h3>
                                <select class="select_option border">
                                    <option value="1">United Kingdom (UK)  </option>
                                    <option value="2">Åland Islands  </option>
                                    <option value="3">Afghanistan  </option>
                                    <option value="4">Belgium </option>
                                    <option value="5">Albania  </option>
                                </select>
                                <input class="border" placeholder="State / Country" type="text">
                                <input class="border" placeholder="Postcode / Zip" type="text">
                                <button class="btn btn-primary" type="submit">get a quote</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate">
                                <h3 class="border-bottom">Coupon Discount   </h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input class="border" placeholder="Enter your code" type="text">
                                <button class="btn btn-primary" type="submit">apply coupon</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="grand_totall_area">
                               <div class="grand_totall_inner border-bottom">
                                   <div class="cart_subtotal d-flex justify-content-between">
                                       <p>sub total </p>
                                       <span>$126.00</span>
                                   </div>
                                   <div class="cart_grandtotal d-flex justify-content-between">
                                       <p>grand total</p>
                                       <span>$126.00</span>
                                   </div>
                               </div>
                               <div class="proceed_checkout_btn">
                                   <a class="btn btn-primary" href="#">Proceed to Checkout</a>
                               </div>
                               <a href="#">Checkout with Mutilple Adresses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
     <!--shopping cart area end -->
     <script>
        function changeCartQuantity(e,id){
            // alert(e.value)
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {id_product:id,quantity:e.value,function_name:"changeCartQuantity"},
                type:"POST",
                success:function(data, status){
                    
                }
            });
        }
        function changeCartColor(e,id){
            // alert(e.value)
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {id_product:id,color:e.value,function_name:"changeCartColor"},
                type:"POST",
                success:function(data, status){
                    
                }
            });
        }
        function changeCartSize(e,id){
            // alert(e.value)
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {id_product:id,size:e.value,function_name:"changeCartSize"},
                type:"POST",
                success:function(data, status){
                    
                }
            });
        }
    </script>                                                            

    
    
    <?php
        $content =ob_get_clean();
        require("./views/clientPages/baseLayOut.php");
    ?>