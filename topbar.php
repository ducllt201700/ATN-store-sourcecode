<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
        <a class="navbar-brand logo" href="index.php?page=home">ATN company</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?page=sales">Sales</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pos/index.php">POS</a></li>
                <?php if($_SESSION['login_type'] == 1): ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?page=inventory">Inventory</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?page=products">Products</a></li>
                <?php endif; ?>
                <?php if($_SESSION['login_type'] == 1): ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?page=users">Users</a></li>
                <?php endif; ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ajax.php?action=logout">Logout</a></li>

            </ul>
        </div>
    </div>
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>