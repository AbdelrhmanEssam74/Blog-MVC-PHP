<?php
$user_id = "";

$path = trim($_SERVER['REQUEST_URI'], '/');
$pattern = '#^user/profile/([a-zA-Z0-9]+)$#';

if (preg_match($pattern, $path, $matches)) {
    $user_id = $matches[1];
} else {
    RedirectToView('404');
    exit();
}
echo $user_id;
if (!preg_match('/^[a-zA-Z0-9]+$/', $user_id)) {
    RedirectToView('404');
    exit();
}


// Fetch user data
$userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$user_id]);
if (!$userData) {
    RedirectToView('404');
    exit();
}
echo "<pre>";
print_r($userData);
echo "</pre>";
?>
<i class="fa-solid fa-user"></i>