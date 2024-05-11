<?php

$img_dir = '/assets/img/';

$link_prefix = ($_SERVER['REQUEST_URI'] == HOME_DIR) ? '' : HOME_DIR;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page_title = "ETVO - Web Design & Development"; ?>

    <?php include 'default-head.php'; ?>
</head>

<body class="<?= $body_class ?? '' ?> ">