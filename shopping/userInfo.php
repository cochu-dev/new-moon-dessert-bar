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

<body class="shopping_body">

    <div class="container-fluid">

        <div class="sectionShopping">
            <?php include 'shopping_headerNav.php' ?>
            

            <div class="row">
                <div class="col-sm-12" id="">
                    <h1>My billing address</h1>
                    <form class="row g-3" action="../php/saveUserInfo.php" method="post">
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $row["C_EMAIL"]?>">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPhone4" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" id="inputPhone" placeholder="123-456-7890" maxlength="12" value="<?php echo $row["C_PHONE"]?>">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" value="<?php echo $row["C_ADDRESS"]?>">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress2" class="form-label"></label>
                        <input type="text" class="form-control" name="unit" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $row["C_UNIT"]?>">
                      </div>
                      <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity" value="<?php echo $row["C_CITY"]?>">
                      </div>
                      <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="country">
                          <option <?php if ($row["C_COUNTRY"] === '') echo 'selected'; ?> >Choose...</option>
                          <option <?php if ($row["C_COUNTRY"] === 'Canada') echo 'selected'; ?> >Canada</option>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="zip" id="inputZip" value="<?php echo $row["C_ZIP"]?>">
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="isChecked" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php
                          if($_GET['error'] === "notChecked") {
                            echo '<div class="errorFont">Please check the box!</div>';
                          }

                          if($_GET['error'] === '0') {
                            echo '<div class="successFont">Updated Successfully!</div>';
                          }
                        ?>
                      </div>
                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" id="shopping_cart">

                </div>
            </div>
            
        </div>

    
    </div>
    <?php include '../footer.php' ?>
</body>

</html>