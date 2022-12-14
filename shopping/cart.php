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
                <div class="col-sm-12" id="shopping_cartTitle">
                    <?php 
                        $totalprice = 0;
                        foreach ($_SESSION['mycar'] as $product):
                            $totalprice += $product['buy_price'];
                        endforeach;
                    ?>
                    <h1>Total</h1> <h1>CA$<?php echo $totalprice?></h1>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" id="shopping_cart">
                    <form action="checkout.php" method="get">
                        <table class="cartTable">
                            <tbody>
                                <?php $totalprice = 0;?>

                                <?php foreach ($_SESSION['mycar'] as $product): ?>
                                <tr>
                                    <td class="cart_quantity">
                                        <h3> <?=$product['buy_num']?> </h3>

                                    </td>

                                    <td class="cart_img">
                                        <img src="../img/<?=$product['buy_img'];?>" style="width: 70px; padding:5px; border: 1px solid black;">
                                    </td>

                                    <td>
                                        <span> <?=$product['buy_name']?> </span>
                                    </td>

                                    <td class="cart_priceP">
                                        <span> &dollar;<?=$product['buy_price']?> </span>
                                    </td>

                                    <td class="cart_deleteP">
                                        <a href="../php/cart_delProduct.php?id=<?php echo $product['buy_id'];?>">Delete</a></td>
                                    </td>

                                </tr>
                                <?php $totalprice += $product['buy_price']?>
                                <?php endforeach; ?>

                            </tbody>
                            
                        </table>

                        <br>
                        

                        <br>
                        <div class="d-grid gap-2 col-lg-4 mx-auto">
                            <a class="btn btn-primary cart_button_1" type="button" href="shopping.php"> &#10094;   Continue Shopping</a>
                            <input class="btn btn-primary cart_button_2" type="submit" value="Go To Checkout" name="placeorder">
                        </div>
                        
                        <?php $products = getProducts($_SERVER["QUERY_STRING"],$conn); ?>
                    </form>
                </div>
            </div>
            
        </div>
    
    </div>
    <?php include_once '../footer.php' ?>
    <?php include_once '../scripts.php' ?>
</body>

</html>