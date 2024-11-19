<?php
$user_id = "";

$path = trim($_SERVER['REQUEST_URI'], '/');
$pattern = '#^user/profile/([a-zA-Z0-9]+)$#';

if (preg_match($pattern, $path, $matches)) {
    $user_id = $matches[1];
}

if (app()->session->get('user_id')) {
    $user_id = app()->session->get('user_id');
}


// Fetch user data
$userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$user_id]);
if (!$userData) {
    RedirectToView('');
    exit();
}
echo "<pre>";
print_r($userData);
echo "</pre>";