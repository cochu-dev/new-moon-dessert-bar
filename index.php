<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!--=== Main Style CSS ===-->
    <link href="style/style.css" rel="stylesheet">

    <!-- Font Awesome styles CDN Link -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>New Moon Dessert Bar</title>
  </head>


  <div style="position:fixed; width:100%; height:100%; background-color:rgb(0,0,0,0.5)" id='zoomIn'>
    <div class='zoomIn' id="zoomInDiv">
        <img id='imgItem' />
    </div>
  </div>

  <body class="index-page">
    <?php require_once "php/recaptchalib.php" ?>
    <div class="container-fluid">
      <div class="video-container-bg">
        <div class="row navbar-row">
          <div class="col"></div>
          <div class="col-sm-10">
            <div class="container navbar-container">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">&#127854;HOME</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="dropdownicon">&#9776;</div>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">&#127854;Home</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#index-sectionMenu">MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#index-sectionSource">SOURCE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#index-sectionDocumentation">DOCUMENTATION</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <div class="col"></div>
        </div>
        <div class="sectionMain">
          <h1>New Moon Dessert Bar</h1>
          <br>
          <h2>WE OFFER EASY PACKAGES FOR THOSE SHORT ON TIME
            <br>
          AS WELL AS FULL CUSTOM PLANNING FOR THOSE SEEKING SOMETHING UNIQUE. <br>EITHER WAY, SPOT DESSERT CATERING IS  ALWAYS DELICIOUS,
            <br>
          BEAUTIFUL AND SPECIAL.
          </h2>
          <br>
          <h3>TAKE-OUT & DELIVERY ARE AVAILABLE!</h3>
          <button class="btn btn-lg my-btn" type="button" id="btn-home-login" data-bs-toggle="modal" data-bs-target="#logInModal"> LOGIN</button>
        </div>
        <video aria-hidden="true" autoplay="" loop="" muted="" playsinline="" class="video-bg"  >
          <source src="img/index_bg1.mp4" type="video/mp4" alt="New Moon video" >
        </video>
      </div>
      <div class="sectionMenu" id="index-sectionMenu">
        <div class="row">
          <div class="col-sm-12">
            <h1>Menu</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/applePie.jpg" >
              <h3>ApplePie</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/cakes.jpg" >
              <h3>Cakes</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/cookies.jpg" >
              <h3>Cookies</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/croissants.jpg" >
              <h3>Croissants</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/cupcakes.jpg" >
              <h3>Cupcakes</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/iceCream.jpg" >
              <h3>IceCream</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/pancake.jpg" >
              <h3>Pancake</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <img onclick='showBgImg(this)' class="imgItem" src="img/pudding.jpg" >
              <h3>Pudding</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="sectionSource" id="index-sectionSource">
        <div class="row">
          <div class="col-sm-12">
            <h1>Image Source</h1>
          </div>
        </div>
        <p>
          <h4>headerImg</h4>
          https://unsplash.com/photos/P4usAX3qaVg<br>

          <h4>applePie</h4>
          https://unsplash.com/photos/WblRRvaMkaQ<br>

          <h4>cakes</h4>
          https://unsplash.com/photos/kPxsqUGneXQ<br>

          <h4>cookies</h4>
          https://unsplash.com/photos/kID9sxbJ3BQ<br>

          <h4>Croissants</h4>
          https://unsplash.com/photos/lE5O9DktAQY<br>

          <h4>cupcakes</h4>
          https://unsplash.com/photos/S2jw81lfrG0<br>

          <h4>iceCream</h4>
          https://unsplash.com/photos/cLpdEA23Z44<br>

          <h4>pancke</h4>
          https://unsplash.com/photos/jsgJtBOR6jY<br>

          <h4>pudding</h4>
          https://unsplash.com/photos/-XazBwHUtJs<br>

          <h4>index_bg1</h4>
          https://www.pexels.com/video/4547597/<br>

          <h4>index - Instruction</h4>
          https://www.spotdessertbar.com/catering-events
        </p>

      </div>

      <div class="sectionDocumentation" id="index-sectionDocumentation">

        <div class="row">
          <div class="col-sm-12">
            <h1>Instruction</h1>
          </div>
        </div>
        <p> This is the webpage of a dessert bar.<br>
            People need to log in to order. Before logging in, you can browse the menu page first. On the menu page, you can click to enlarge the picture.<br>
            On the login page, if you do not have an account, you should register an account.<br>
            After logging in, you can click on one of the pictures of desserts, and then select the quantity you want.<br>
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.827007455358!2d-123.14033818373676!3d49.22280778293132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867485c515efbb%3A0xf3b09cc69214b862!2s1419%20W%2053rd%20Ave%2C%20Vancouver%2C%20BC%20V6P%201L2!5e0!3m2!1sen!2sca!4v1627983377168!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <?php include_once 'footer.php'?>

      <!-- Modal -->
      
      <!-- LogIn Modal -->
      
      <div class="modal fade" id="logInModal" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="php/login.php" method="post">
              <div class="modal-header">
                  <h5 class="modal-title" id="logInLabel">LogIn</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-12">
                        <h3>Please enter your credentials</h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="modalFormWrapper">
                            <div class="mb-3">
                              <label for="forUsername" class="form-label">Your Username</label>
                              <input type="text" name="username" class="form-control" id="logInUsername" placeholder="Username">
                            </div>
                            <div class="mb-3">
                              <label for="forPassword" class="form-label">Your Password</label>
                              <input type="password" name="password" class="form-control" id="logInPassword" placeholder="Password">
                            </div>
                            <div class="mb-3">
                              <div class="g-recaptcha myrecaptcha" data-sitekey="6LdDrc8bAAAAAJb0qkGSSgN4YqqeqvzhxDm2KG4i"></div>  
                            </div>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="modal-footer">
                <div>Does't have an account? <a href="#" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal">Register now!</a></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Log In</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="php/register.php" method="post">
              <div class="modal-header">
                  <h5 class="modal-title" id="registerLabel">Register</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-12">
                        <h3>Customer Register</h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="modalFormWrapper">
                            <div class="mb-3">
                              <label for="forUsername" class="form-label">Your Username</label>
                              <input type="text" name="username" class="form-control" id="registerUsername" placeholder="Username">
                            </div>
                            <div class="mb-3">
                              <label for="forPassword" class="form-label">Your Password</label>
                              <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Password">
                            </div>
                            <div class="mb-3">
                              <div class="g-recaptcha myrecaptcha" data-sitekey="6LdDrc8bAAAAAJb0qkGSSgN4YqqeqvzhxDm2KG4i"></div> 
                            </div>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="modal-footer">
                <div>Already have an account? <a href="#" data-bs-target="#logInModal" data-bs-toggle="modal" data-bs-dismiss="modal">Log In here!</a></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>    

    
    <div class="my-floating-btn" id="index-my-floating-btn">
      <a href="#">
        <button type="button" class="btn btn-lg my-btn btn-floating">
          Back to Top
        </button>
      </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="style/style.js"></script>
  </body>
</html>