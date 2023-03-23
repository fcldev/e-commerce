<?php
        ob_start();
?>
<hr class="" style="margin-top:150px;">
<section class="">
    about us
</section>
<?php 
    $content = ob_get_clean();
    require('./views/clientPages/baseLayOut.php');
?>