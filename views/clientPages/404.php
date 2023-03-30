<?php
    ob_start();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-top:200px;">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-top:200px;margin-left:200px;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>404 Error Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Ecommerce/index.php/">Home</a></li>
              <li class="breadcrumb-item active">404 Error Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="margin-left:200px;">
      <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
      </div>
      <!-- /.error-page -->
    </section>
    

<?php
    $content = ob_get_clean();
    require('baseLayOut.php');
?>