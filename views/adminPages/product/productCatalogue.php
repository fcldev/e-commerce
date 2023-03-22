<html>
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
</head>
<body>
    <div class="">
            <div class="card card-primary">
                <div class="card-header d-flex flex-wrap flex-row justify-content-between">
                    <h4 class="card-title">Pictures of product with id = <?php echo $_GET['id_product'] ; ?></h4>
                    <a class="btn btn-success" href="/Ecommerce/index.php/addMoreImages?id_image=<?php echo $_GET['id_product'] ; ?>">Add more pictures</a>
                </div>
                <div class="card-body">
                    <div class="row mx-1">
                        <?php foreach($listImages as $image){ ?> 
                            <div class="col-sm-2 row mr-1">
                                <a href="../assets/productsImages/<?php echo $image['image_url'] ; ?>" data-toggle="lightbox" data-title="" data-gallery="gallery">
                                <img src="../assets/productsImages/<?php echo $image['image_url'] ; ?>" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                                <a class='col-12 text-center bg-danger rounded' href="/Ecommerce/index.php/deleteImage?id_image=<?php echo $image['id_image'] ; ?>" >Delete this picture</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>
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
</script>
</body>
</html>