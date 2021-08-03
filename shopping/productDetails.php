<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  $conn = connectMysql();
  require_once '../php/logged_in_header.php';
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

    <div class="sectionShopping">
      <?php include 'shopping_headerNav.php' ?>

      <div class="row">
        <?php 
          $products = getProducts($_SERVER["QUERY_STRING"],$conn); 
          foreach ($products as $product): 
        ?>
        <div class="col-sm-12">
          <section class="shopping_productDetails">
            <h1><?=$product['Product_Name']?></h1>
            <form action="../php/addingToCart.php" method="get">

                <img src="../img/<?= $product['Product_Img'];?>" style="width: 300px; height: 100%; padding:10px; border: 1px solid black;">
                <h2 style="font-size: 40px;text-transform: uppercase; "></h2>
                <h2>Price: &dollar;<?=$product['Product_Price']?></h3>

                <h3>Quantity: <input type="number" name="quantity" value="1" min="1" max="20" placeholder="Quantity" required>

                <input type="submit" value="Add To Cart"></h3>

                <input type="hidden" name="product_id" value="<?=$product['Product_ID']?>">
                <input type="hidden" name="product_name" value="<?=$product['Product_Name']?>">
                <input type="hidden" name="product_price" value="<?=$product['Product_Price']?>">

            </form>
          </section>
        </div>
        <?php             
            endforeach; ?>
      </div>
      


    </div>
  </div>

  <?php include_once '../footer.php'?>

</body>

</html>