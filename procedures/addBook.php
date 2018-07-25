<?php
require_once __DIR__ .'/../inc/bootstrap.php';
requireAuth();

$bookTitle = request()->get('title');
$bookDescription = request()->get('description');

try {
    $newBook = addBook($bookTitle, $bookDescription);
    $session->getFlashBag()->add('success', 'Book Added');
    redirect($base_url.'/books.php');
} catch (\Exception $e) {
    $session->getFlashBag()->add('error', 'Unable to Add Book');
    redirect($base_url.'/add.php');
}