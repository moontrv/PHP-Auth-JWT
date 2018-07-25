<?php
require_once __DIR__ .'/../inc/bootstrap.php';
requireAuth();

$bookId = request()->get('bookId');
$bookTitle = request()->get('title');
$bookDescription = request()->get('description');

try {
    $newBook = updateBook($bookId, $bookTitle, $bookDescription);
    $session->getFlashBag()->add('success', 'Book Updated');
    redirect($base_url.'/books.php');
} catch (\Exception $e) {
    $session->getFlashBag()->add('error', 'Unable to Update Book');
    redirect($base_url.'/edit.php?bookId='.$bookId);
}