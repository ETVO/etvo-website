<?php


$blocks = [
  'cta' => [
    'title' => 'Own the space your brand deserves',
    'button' => [
      'text'=>'Learn more about ETVO',
      'link' => '/'
    ]
  ]
];

$body_class = 'error-page';

include 'partials/header.php';

?>

<div class="error">
  <h1>
    <div class="title">404</div>
    <div class="subtitle">Page not found...</div>
  </h1>

  <p>We haven't found what you were looking for... But we still want to help you <b>make your project a reality!</b></p>
</div>

<?php
include 'templates/cta.php';

// include 'partials/footer.php';
