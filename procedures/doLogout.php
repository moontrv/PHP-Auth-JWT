<?php
require __DIR__ . '/../inc/bootstrap.php';

$accessToken = new \Symfony\Component\HttpFoundation\Cookie("access_token", "Expired", time()-3600, '/', getenv('COOKIE_DOMAIN'));
$session->getFlashBag()->add('success', 'Successfully Logged Out');
redirect($base_url.'/login.php', ['cookies' => [$accessToken]]);