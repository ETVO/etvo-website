<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php include_once 'meta-tags.php'; ?>

<title><?= $page_title; ?></title>

<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>assets/fonts/Inter/font.min.css">
<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>assets/fonts/Lora/font.min.css">
<link as="style" rel="stylesheet preload" href="<?= HOME_URL; ?>assets/fonts/bootstrap-icons/bootstrap-icons.min.css">

<link rel="stylesheet" href="<?= HOME_URL; ?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?= HOME_URL; ?>assets/css/main.css">
<?php if (isset($stylesheets)) : foreach ($stylesheets as $filename) : ?>
    <link rel="stylesheet" href="<?= HOME_URL; ?>assets/css/<?= $filename ?>">
<?php endforeach;
endif; ?>

<link rel="shortcut icon" href="<?= HOME_URL; ?>assets/img/favicon.webp" type="image/webp">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PVRY4W9PEZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-PVRY4W9PEZ');
</script>
<!-- End of Google tag (gtag.js) -->

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/144649459.js"></script>
<!-- End of HubSpot Embed Code -->