<?php


$content = get_data('content');
$blocks = filter_blocks($content['blocks']);

include 'partials/header.php';

include 'templates/hero.php';

include 'templates/benefits.php';

include 'templates/testimonials.php';

include 'templates/contact.php';

include 'templates/faq.php';

include 'partials/footer.php';
