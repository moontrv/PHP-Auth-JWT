
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $base_url; ?>">Book Voting</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $base_url; ?>/">Home</a></li>
                <li><a href="<?php echo $base_url; ?>/books.php">Book List</a></li>
                <?php if (isAuthenticated()): ?>
                <li><a href="<?php echo $base_url; ?>/add.php">Add Book</a></li>
                <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!isAuthenticated()) : ?>
                <li><a href="<?php echo $base_url; ?>/login.php">Login</a></li>
                <li><a href="<?php echo $base_url; ?>/register.php">Register</a></li>
                <?php else: ?>
                <li><a href="<?php echo $base_url; ?>/account.php">My Account</a></li>
                <?php if (isAdmin()): ?>
                <li><a href="<?php echo $base_url; ?>/admin.php">Admin</a></li>
                <?php endif; ?>
                <li><a href="<?php echo $base_url; ?>/procedures/doLogout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>