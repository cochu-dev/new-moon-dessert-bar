<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  $conn = connectMysql();
  session_start();
  ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap-5.0.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!--=== Main Style CSS ===-->
    <link href="../style/style.css" rel="stylesheet">

    <!-- Font Awesome styles CDN Link -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <title>New Moon Dessert Bar</title>
  </head>

<body class="shopping_body">

  <div class="container-fluid">

    <div class="sectionMenu" id="index-sectionMenu">
      <div class="row">
        <div class="col-sm-12">
          <h1> Shopping </h1>
          <p>| · Click on the picture to add to the cart · |</p>
        </div>
      </div>
      <?php 
            $products = getAllProducts($conn); 
                foreach ($products as $product): ?>
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <a class="imgDiv" href="addToCart.php?<?=$product['Product_ID']?>">
              <img class="imgItem" src="img/<?= $product['Product_Name']; ?>.jpg" alt="<?=$product['Product_Name']?>">
              <p><?= $product['Product_Name']; ?></p>
              <p class="price">&dollar;<?= $product['Product_Price']; ?></p>
          </a>
        </div>
      <?php endforeach; ?> 
        <!-- <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/applePie.jpg" >
            <h3>ApplePie</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/cakes.jpg" >
            <h3>Cakes</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/cookies.jpg" >
            <h3>Cookies</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/croissants.jpg" >
            <h3>Croissants</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/cupcakes.jpg" >
            <h3>Cupcakes</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/iceCream.jpg" >
            <h3>IceCream</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/pancake.jpg" >
            <h3>Pancake</h3>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/pudding.jpg" >
            <h3>Pudding</h3>
          </div>
        </div> -->
      </div>

    </div>
  </div>



</body>

</html>