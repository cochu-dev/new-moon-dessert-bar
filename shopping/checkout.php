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

            <div class="row">
                <div class="col-sm-12" id="shopping_cartTitle">
                    <?php 
                        $totalprice = 0;
                        foreach ($_SESSION['mycar'] as $product):
                            $totalprice += $product['buy_price'];
                        endforeach;
                    ?>
                    <h1>Comfirm Order</h1> 

                </div>
            </div>

            <div class="row checkoutProduct">
                <div class="col-sm-12 customer-col">
                    <table class="checkoutTable">
                        <thead>
                            <tr class="tr_title">
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
                                        <span> <?=$product['buy_name']?> </span>
                                    </td>

                                    <td id="td_num">
                                        <span > <?=$product['buy_num']?> </span>
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

                </div>
            </div>

            <div class="row customerInformation">
                <div class="col-sm-8"></div>
                <div class="col-sm-4 customer-col">
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
                    <label><?php if ($row["C_UNIT"] !== '') { echo $row["C_UNIT"] ; echo '-'; }?><?php echo $row["C_ADDRESS"]?></label>
                    <br>
                    <label><?php echo $row["C_CITY"]?>, <?php echo $row["C_ZIP"]?></label>
                    <br>
                    <label><?php echo $row["C_COUNTRY"]?></label>
                    <br>
                </div>
            </div>


            <div class="row checkoutSubtotal">
                <div class="col-sm-12 customer-col">
                    <span class="checkout_subtotalSpan" >Subtotal: &dollar;<span class="checkout_subtotalPrice"><?= $totalprice ?></span></span>
                </div>
                
            </div>

            <div class="row checkoutComfirm">
                <div class="col-sm-8"></div>
                <div class="col-sm-4 customer-col">
                    <a class="btn btn-primary checkout_back_button" type="button" href="cart.php"> &#11178;   Back To Cart</a>
                    <button class="btn btn-primary checkout_confirm_button" data-bs-toggle="modal" data-bs-target="#checkoutModal">Confirm</button>
                </div>
            </div>

        </div>

        <!-- Modal -->
        
        <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">

              <div class="modal-content">


                <div class="modal-body">
                    <h1 class="checkMarkIcon"></h1>
                    <h1>Checkout Successful!</h1>
                </div>

              </div>
          </div>
        </div>
    
    </div>
    <?php include_once '../footer.php' ?>
    <?php include_once '../scripts.php' ?>
</body>

</html>