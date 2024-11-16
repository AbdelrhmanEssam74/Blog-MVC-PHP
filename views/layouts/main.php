<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= env('APP_NAME') ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="Lib/bootstrap/css/bootstrap.css">
<!--    <link rel="stylesheet" href="Lib/bootstrap/css/bootstrap.rtl.css">-->
    <link rel="stylesheet" href="Lib/bootstrapIcon/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!--FontAwesome-->
    <link rel="stylesheet" href="Lib/fontawesome/css/all.css">
</head>
<body class="">
<?php include view_path() . 'partials/navbar.php' ?>
<?php include view_path() . 'partials/dark_light_btn.php' ?>
<?php include view_path() . 'partials/back_to_top_btn.php' ?>
<div>
    {{content}}
</div>
<script src="assets/js/main.js"></script>
<script src="Lib/bootstrap/js/bootstrap.js"></script>
<script src="Lib/fontawesome/js/all.js"></script>
<script src="Lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Lib/bootstrap/js/color-modes.js"></script>
</body>
</html>