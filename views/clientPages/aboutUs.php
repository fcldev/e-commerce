<?php
        ob_start();
?>
<hr class="" style="margin-top:150px;">
<section class="">
    <p class="mx-auto" style="font-size:20px; width:800px;">
        Welcome to [company name], your go-to destination for all things [product niche]. We are a team of passionate [product niche] enthusiasts 
        who are dedicated to providing our customers with high-quality products and exceptional customer service. <br>
    </p>
    <p class="mx-auto my-5" style="font-size:20px; width:800px;">
        At [company name], we believe that shopping for [product niche] should be an enjoyable and hassle-free experience.
        That's why we've curated a selection of the best [product niche] products on the market, and we're constantly updating our inventory to bring you the latest and greatest in [product niche]. <br>
    </p>
    <p class="mx-auto my-5" style="font-size:20px; width:800px;">
        In addition to our fantastic selection of products, we also offer fast and reliable shipping, competitive pricing,
        and a 100% satisfaction guarantee. We want you to love your purchase from [company name], and we'll do whatever it takes to ensure that you're happy with your shopping experience. <br>
    </p>
    <p class="mx-auto my-5" style="font-size:20px; width:800px;">
        We're a small but dedicated team, and we're always here to help if you have any questions or concerns. Whether you're
        a long-time [product niche] enthusiast or a newcomer to the world of [product niche], we're confident that you'll find
        something you love at [company name]. Thank you for choosing us for all your [product niche] needs! <br>
    </p>
</section>
<?php 
    $content = ob_get_clean();
    require('./views/clientPages/baseLayOut.php');
?>