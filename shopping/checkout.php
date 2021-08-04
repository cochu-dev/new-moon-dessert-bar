<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  require_once '../php/functions.php';
  $conn = connectMysql();
  require_once '../php/logged_in_header.php';
  $resultData = query_getUserInfo($conn, $_SESSION['username']);
  $row = $resultData->fetch_assoc();
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

<body>

    <div class="container-fluid">
        <div class="sectionShopping">
            <?php include 'shopping_headerNav.php' ?>
            <h1>Checkout</h1>
            <div class="row customerInformation">
                <div class="col"></div>
                <div class="col-sm-4">
                    <h2>Customer Information</h2>
                    <label>Full Name:</label>
                    <label><?php echo $_SESSION['username']?></label>
                    <br>
                    <label>Email:</label>
                    <label><?php echo $row["C_EMAIL"]?></label>
                    <br>
                    <label>Phone #:</label>
                    <label><?php echo $row["C_PHONE"]?></label>
                    <br>
                    <label>Full Address:</label>
                    <br>
                    <label><?php echo $row["C_UNIT"]?>, <?php echo $row["C_ADDRESS"]?></label>
                    <br>
                    <label><?php echo $row["C_CITY"]?>, <?php echo $row["C_ZIP"]?></label>
                    <br>
                    <label><?php echo $row["C_COUNTRY"]?></label>
                    <br>
                </div>
                <div class="col"></div>
            </div>

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
                <div class="col-sm-12">
                    <table class="cartTable">
                        <thead>
                            <!-- <tr style="margin:auto; border: 2px solid black;">
                                <td>Product</td>

                                <td>Quantity</td>

                                <td>Price</td>

                            </tr> -->
                        </thead>
                        <tbody>


                        <?php $totalprice = 0;?>

                            <?php foreach ($_SESSION['mycar'] as $product): ?>
                            <tr>
                                <td class="cart_quantity">
                                    <h3> <?=$product['buy_num']?> </h3>

                                </td>
                                <td>
                                    <span> <?=$product['buy_name']?> </span>
                                </td>

                                
                                
                                <td class="cart_priceP">
                                    <span> &dollar;<?=$product['buy_price']?> </span>
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
                </div>
            </div>


        </div>

    
    </div>
    <?php include '../footer.php' ?>
</body>

</html>