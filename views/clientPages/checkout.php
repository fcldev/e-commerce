<?php
    ob_start();
?>
<!-- scripts paypal -->
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>


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
                        <h3>checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_section" id="accordion">
       <div class="container">
            
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <form method="post" action="/Ecommerce/index.php/confirmOrder">
                            <h3>Billing Details</h3>
                            <div class="shopping_coupon_calculate top">
                                    <select class="select_option border" id="side" name="side" onchange="changeside(this)" >
                                            <option value="null">choose your side adress</option>
                                        <?php foreach($listSides as $side){ ?>
                                            <option value="<?php echo $side['side']; ?>"><?php echo $side['side']; ?>  </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input id="firstName" name="firstName" type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name  <span>*</span></label>
                                <input id="lastName" name="lastName" type="text">
                            </div>
                            
                            <div class="checkout_form_input">
                               <label>Address  <span>*</span></label>
                                <input id="adress1" name="adress1" type="text">
                            </div>
                            <div class="checkout_form_input">
                                <input id="adress2" name="adress2" type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input id="city" name="city"  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Email Address   <span>*</span></label>
                                <input id="email" name="email"  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Phone <span>*</span></label>
                                <input id="phone" name="phone" type="text">
                            </div>
                            
                            <div class="checkout_form_input">
                                <label>Order Notes</label>
                                <textarea id="note" name="note"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="order_table_right">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($listProducts as $p){ ?>
                                            <tr>
                                                <td> <?php echo $p['product']['name'] ?>   </td>
                                                <td> <?php echo $p['quantity'] ?>   </td>
                                                <td class="text-right"> <?php echo $p['product']['price']*$p['quantity'] ?>MAD  </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Cart Subtotal  </td>
                                                <td class="text-right" id="subTotal"><?php echo $total ; ?> MAD</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td class="text-right" id="orderTotal" >Select a side</td>
                                            </tr>
                                        </tfoot>
                                    </table>
    
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment3" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment3" data-toggle="collapse" data-target="#method3" >cash on delivery</label>
                                        <div id="method3" class="collapse three" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment4" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment4" data-toggle="collapse" data-target="#method4" >Paypal</label>
                                        <div id="method4" class="collapse four" data-parent="#accordion">
                                            <div class="card-body1">
                                                <div id="smart-button-container">
                                                    <div style="text-align: center;">
                                                        <div id="paypal-button-container"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place_order_btn">
                                   <button class="btn btn-primary" type="button" onclick="confirmOrder()">place order</button>
                               </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!--Checkout page section end-->
    <script>
        function changeside(e){
            // alert(e.value)
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {side:e.value,function_name:"changeSide"},
                type:"POST",
                success:function(data, status){
                    total = document.getElementById('subTotal').innerHTML
                    document.getElementById('orderTotal').innerHTML = parseFloat(data)+parseFloat(total) + " MAD";
                }
            });
        }
        function confirmOrder(){
            // alert(e.value)
            var side = document.getElementById('side').value;
            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var adress1 = document.getElementById('adress1').value;
            var adress2 = document.getElementById('adress2').value;
            var city = document.getElementById('city').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var note = document.getElementById('note').value;
            var total = "<?php echo $total ?>";
            $.ajax({
                url: "./controlleur/client/clientControlleur.php",
                data: {
                    side:side,
                    firstName:firstName,
                    lastName:lastName,
                    adress1:adress1,
                    adress2:adress2,
                    city:city,
                    phone:phone,
                    email:email,
                    note:note,
                    total:total,
                    function_name:"confirmOrder"
                },
                type:"POST",
                success:function(data, status){
                    alert('success')
                    window.open("/Ecommerce/index.php/")
                }
            });
        }
    </script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'white',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":<?php echo $total/10 ?>}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
<?php
    $content = ob_get_clean();
    require('baseLayOut.php');
?>

