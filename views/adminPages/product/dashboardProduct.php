<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>baraka store</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/Ecommerce/index.php/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- add product button -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" title="Add product" href="/Ecommerce/index.php/addProduct" role="button">
          <i class="fa-solid fa-plus"></i>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" title="full screan" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if($_SESSION['userInfo']['profile_image'] != ''){ ?>
              <img src="../assets/usersProfileImage/<?php echo $_SESSION['userInfo']['profile_image'] ?>" class="img-circle elevation-2" alt="User Image">
          <?php }else{ ?>
              <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          <?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['userInfo']['full_name']; ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2" height="100%">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Ecommerce/index.php/dashboardUser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Ecommerce/index.php/dashboardProduct" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Ecommerce/index.php/dashboardCategorie" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="d-flex">
          <h1 class="mx-auto">Product management</h1>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                  <form method="post" action="/Ecommerce/index.php/dashboardSearshProduct" class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="input_val" class="form-control float-right" placeholder="Search by id">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 800px;">
                <table class="table table-head-fixed text-nowrap">
                      <thead>
                            <tr>
                                <th>actions</th>
                                <th>id</th>
                                <th>name</th>
                                <th>description</th>
                                <th>tags</th>
                                <th>price</th>
                                <th>video</th>
                                <th>quantity</th>
                                <th>visibility</th>
                                <th>date arrivale</th>
                                <th>sizes available</th>
                                <th>discount</th>
                                <th>categorie</th>
                            </tr>
                      </thead>
                  <tbody>
                   <?php foreach($products as $p){ ?>
                    <tr>
                        <td>
                            <div class="dropdown">
                                <a class="text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-sharp fa-solid fa-gear"></i>
                                </a>    
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/Ecommerce/index.php/checkProductImages?id_product=<?php echo $p['id_product']; ?>">Check product pictures</a>
                                    <a class="dropdown-item" href="/Ecommerce/index.php/deleteProduct?id_product=<?php echo $p['id_product']; ?>">delete</a>
                                    <a class="dropdown-item" href="/Ecommerce/index.php/alterProduct?id_product=<?php echo $p['id_product']; ?>">alter</a>
                                </div>
                            </div>
                        </td>
                        <td class="tflex"><?php echo $p['id_product']; ?></td>
                        <td><?php echo $p['name']; ?></td>
                        <td><?php echo $p['description']; ?></td>
                        <td><?php echo $p['tags']; ?></td>
                        <td><?php echo $p['price']; ?></td>
                        <td><?php echo $p['video']; ?></td>
                        <td><?php echo $p['quantity']; ?></td>
                        <td><?php echo $p['visibility']; ?></td>
                        <td><?php echo $p['date_arrivale']; ?></td>
                        <td><?php echo $p['sizes_available']; ?></td>
                        <td><?php echo $p['discount']; ?></td>
                        <td><?php echo $p['categorie_name']; ?></td> 
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
                <!-- content here--------------------------------------------------------------------------------------------  -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">baraka stor</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
