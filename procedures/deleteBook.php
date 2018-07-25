<?php
require_once __DIR__ . '/../inc/bootstrap.php';
requireAuth();

$book = getBook(request()->get('bookId'));

deleteBook($book['id']);

$session->getFlashBag()->add('success', 'Book Deleted');
redirect($base_url.'/books.php');