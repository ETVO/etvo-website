<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $page_title; ?></title>

<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>/assets/fonts/Inter/font.css">
<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>/assets/fonts/Lora/font.css">
<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>/assets/fonts/bootstrap-icons/bootstrap-icons.css">

<link rel="stylesheet" href="<?= HOME_URL; ?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?= HOME_URL; ?>/assets/css/main.css">
<?php if (isset($stylesheets)) : foreach ($stylesheets as $filename) : ?>
    <link rel="stylesheet" href="<?= HOME_URL; ?>/assets/css/<?= $filename ?>">
<?php endforeach;
endif; ?>

<link rel="shortcut icon" href="<?= HOME_URL; ?>/assets/img/favicon.webp" type="image/webp">