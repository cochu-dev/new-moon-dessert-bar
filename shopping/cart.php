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

        <div class="sectionShopping">
            <?php include 'shopping_headerNav.php' ?>
            

            <div class="row">
                <div class="col-sm-12">
                    <h1> Shopping Cart </h1>
                    <p>| ·  · |</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <form action="shopping.php" method="get">
                        <table style="margin:auto; border: 2px solid black;">
                            <thead>
                                <tr style="margin:auto; border: 2px solid black;">
                                    <td>Product</td>

                                    <td>Quantity</td>

                                    <td>Price</td>

                                </tr>
                            </thead>
                            <tbody>


                            <?php $totalprice = 0;?>

                                <?php foreach ($_SESSION['mycar'] as $product): ?>
                                <tr>
                                    <td>
                                        <?=$product['buy_name']?>
                                    </td>

                                    <td class="quantity">
                                        <?=$product['buy_num']?>

                                    </td>
                                    
                                    <td>
                                        &dollar;<?=$product['buy_price']?>
                                    </td>

                                    <td>
                                        <a href="cart_delProduct.php?id=<?php echo $product['buy_id'];?>">Delete</a></td>
                                    </td>

                                </tr>
                                <?php $totalprice += $product['buy_price']?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <br>
                        <div class="subtotal">
                            <span class="text" style="font-weight: 1em; font-family: cursive;">Subtotal: &dollar;<span><?= $totalprice ?></span></span>
                        </div>

                        <br>
                        <div class="buttons">
                            <input type="submit" value="Go Back To shopping!" name="placeorder">
                        </div>
                        
                        <?php $products = getProducts($_SERVER["QUERY_STRING"],$conn); ?>
                    </form>
                </div>
            </div>
            
        </div>

    <?php include '../footer.html' ?>
    </div>
</body>

</html>