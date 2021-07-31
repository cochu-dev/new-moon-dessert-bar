<div class="shopping_headerNav">
    <div class="col-xl-12" id="shopping_headerImg">
        <span id="span-shopping-username" > Username <?php echo $_SESSION['username']; ?></span>
        <form action="../php/logout.php" method="post">
            <button class="btn btn-lg my-btn" type="submit" id="btn-shopping-logout"> LOGOUT</button>
        </form>
        <img id="headerImg" src="../img/headerImg.jpg">
    </div>
</div>