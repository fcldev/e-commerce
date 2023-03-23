<?php
        ob_start();
?>
about us
<?php 
    $content = ob_get_clean();
    require('./views/clientPages/baseLayOut.php');
?>