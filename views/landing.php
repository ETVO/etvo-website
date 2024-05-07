<?php 


$content = get_data('content');
$blocks = filter_blocks($content['blocks']);

include 'partials/header.php'; ?>

<?php include 'templates/hero.php'; ?>
<?php include 'templates/benefits.php'; ?>

<?php include 'templates/testimonials.php'; ?>
<?php include 'templates/contact.php'; ?>
<?php include 'templates/faq.php'; ?>

<?php include 'partials/footer.php'; ?>