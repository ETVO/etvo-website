<?php


$content = get_data('content');
$blocks = filter_blocks($content['blocks']);

$stylesheets = ['landing.css'];

include 'partials/header.php';

include 'templates/hero.php';

include 'templates/benefits.php';

include 'templates/cta.php';

include 'templates/testimonials.php';

?>
<div class="contact-faq-wrap">

  <?php

  include 'templates/contact.php';

  include 'templates/faq.php';
  ?>
</div>

<?php

include 'partials/footer.php';
