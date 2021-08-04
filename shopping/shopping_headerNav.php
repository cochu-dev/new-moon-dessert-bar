<div class="shopping_headerNav">
    <div class="row">
        <div class="col-xl-12" id="shopping_headerImg">
            <!-- <span id="span-shopping-username" ><i class="fas fa-user-circle"></i> Username <?php echo $_SESSION['username']; ?></span> -->
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="span-shopping-username" data-bs-toggle="dropdown" aria-expanded="false">
                     <?php echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="span-shopping-username">
                    <li><a class="dropdown-item" href="shopping.php">Shopping</a></li>
                    <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
                    <li><a class="dropdown-item" href="userInfo.php">My Shipping Address</a></li>
                </ul>
            </div>
            <form action="../php/logout.php" method="post">
                <button class="btn btn-lg my-btn" type="submit" id="btn-shopping-logout"> LOGOUT</button>
            </form>
            <img id="headerImg" src="../img/headerImg.jpg">
        </div>
    </div>
</div>