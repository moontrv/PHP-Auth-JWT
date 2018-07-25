<?php
require_once __DIR__ . '/inc/bootstrap.php';
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

//if (request()->cookies->has('access_token')) {
//    echo "logged in";
//} else {
//    echo "not logged in";
//}
?>
<div class="container">
    <div class="well">
        <h2>Personal Collection</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
        <p>Welcome to the personal collection. Submit book and vote for yor favorite one.</p>
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';