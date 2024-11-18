<?php
$user_id = "";

$path = trim($_SERVER['REQUEST_URI'], '/');
$pattern = '#^user/profile/([a-zA-Z0-9]+)$#';

if (preg_match($pattern, $path, $matches)) {
    $user_id = $matches[1];
}
if (empty($user_id)) {
    if (app()->session->get('user_id')) {
        $user_id = app()->session->get('user_id');
    }
}


// Fetch user data
$userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$user_id]);
if ($user_id !== $userData[0]->user_id) {
    RedirectToView('');
    exit();
}
echo "<pre>";
print_r($userData);
echo "</pre>";
?>