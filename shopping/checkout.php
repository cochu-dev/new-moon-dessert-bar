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

        </div>

    
    </div>
    <?php include '../footer.php' ?>
</body>

</html>