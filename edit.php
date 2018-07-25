<?php
require_once __DIR__ . '/inc/bootstrap.php';
requireAuth();
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

$book = getBook(request()->get('bookId'));

if (!isAdmin() && !isOwner($book['owner_id'])) {
    $session->getFlashBag()->add('error', 'Not Authorized');
    redirect($base_url.'/books.php');
}

$bookTitle = $book['name'];
$bookDescription = $book['description'];
$buttonText = 'Update Book';
?>
<div class="container">
    <div class="well">
        <h2>Update book</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
        <form class="form-horizontal" method="post" action="<?php echo $base_url; ?>/procedures/editBook.php">
            <input type="hidden" name="bookId" value="<?php echo $book['id']; ?>" />
        <?php include_once __DIR__ .'/inc/bookForm.php'; ?>
        </form>
        
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';