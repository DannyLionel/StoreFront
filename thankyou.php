<html>
<head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Web Store</title>
<!--BootStrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Fontawesome-->
<script src="https://kit.fontawesome.com/30c615d078.js" crossorigin="anonymous"></script>
<!--Slick slider-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>


<body>
  <?php require 'header.php';?>

<main>

  <div  align="center">
    <h2 class="my-md-3 site-title text-color">Your Order Has Been Placed!</h2>
  </div>

  <!-- Facilities -->

     <div class="container-fluid p-0">
        <div class="site-info">
          <div class="row text-center py-3 bg-primary-color m-0">
            <div class="col-md-4 col-sm-12 my-md-0 my-4">
              <div class="row justify-content-center text-light">
                <i class="fas fa-shipping-fast fa-4x px-4"></i>
                <div class="py-2 font-roboto text-left">
                  <h6 class="m-0">Free Shipping & Return</h6>
                  <small>Free Shipping on orders over $1000</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 my-md-0 my-4">
                <div class="row justify-content-center text-light">
                    <i class="fas fa-tools fa-4x px-4"></i>
                    <div class="py-2 font-roboto text-left">
                      <h6 class="m-0">Free Warranty</h6>
                      <small>We repair or replace all phones</small>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12 my-md-0 my-4">
                <div class="row justify-content-center text-light">
                    <i class="fas fa-gift fa-4x px-4"></i>
                    <div class="py-2 font-roboto text-left">
                      <h6 class="m-0">Gift Wrapping</h6>
                      <small>Free gift wrapping available</small>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>

    <!-- /Facilities -->




     

</main>

<?php include 'details-modal-1.php';
      include 'details-modal-2.php';
      include 'details-modal-3.php';
      include 'details-modal-4.php';
 ?>
   <?php require 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./js/main.js"></script>
       


</body>
</html>