
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Gallery</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- font awsome link -->
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
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
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
                <a href="/Ecommerce/index.php/dashboardUser" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Ecommerce/index.php/dashboardProduct" class="nav-link ">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alter User</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary mx-5">
        <div class="card-header">
        <h3 class="card-title">Alter user informations</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="" method="post" action="/Ecommerce/index.php/confirmAlterUser?id_user=<?php echo $user1['id_user']; ?>" enctype="multipart/form-data">
        
			<div class="card-body">
				<div class="form-group">
					<label for="fullName">Full name</label>
					<input type="text" class="form-control" value="<?php echo $user1['full_name']; ?>" name="full_name" id="fullName" placeholder="Full name">
				</div>
				<div class="form-group">
					<label for="birthDay">Birth day</label>
					<input type="date" class="form-control" value="<?php echo $user1['birth_day']; ?>" name="birth_day" id="birthDay" placeholder="Birth day">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" value="<?php echo $user1['email']; ?>" name="email" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="quantity">Role</label>
					<select name="role" id="" class="form-control">
						<?php if($user1['role'] == 'admin'){ ?>
							<option value="admin">admin</option>
							<option value="customer">customer</option>
						<?php }else{ ?>
							<option value="customer">customer</option>
							<option value="admin">admin</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="productImage">Profile image</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="profile_image" id="profileImage">
							<label class="custom-file-label" for="profileImage">select a profile picture</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" value="<?php echo $user1['username']; ?>" name="username" id="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" value="<?php echo $user1['password']; ?>" name="password" id="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" value="<?php echo $user1['password']; ?>" name="password2" id="password" placeholder="Password">
				</div>
			</div>
			
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
        </form>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
<?php if($_GET['err'] == '2'){ ?>
	alert('password you entered is not similar')
<?php } ?>
</script>
</body>
</html>