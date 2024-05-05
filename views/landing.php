<?php 


$content = get_data('content');
$blocks = filter_blocks($content['blocks']);

include 'partials/header.php'; ?>

<?php include 'templates/hero.php'; ?>
<?php include 'templates/benefits.php'; ?>

<div class="cta">
  <h2>Own the space your brand deserves</h2>
  <a href="#contact" class="btn btn-primary">Schedule a Free Meeting</a>
</div>

<?php include 'templates/testimonials.php'; ?>
<?php include 'templates/faq.php'; ?>
<?php include 'templates/contact.php'; ?>

<?php include 'partials/footer.php'; ?>