<?php

$faq = $blocks['faq'];

?>

<div class="faq" id="faq">
  <div class="container">
    <div class="icon bi-chat-square-text-fill"></div>
    <h2><?= $faq['title']; ?></h2>
    <p><?= $faq['tagline']; ?></p>

    <div class="faq-accordion accordion accordion-flush" id="accordionFAQ">

      <?php foreach ($faq['items'] as $key => $item) : ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading_<?= $key ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?= $key ?>" aria-expanded="false" aria-controls="collapse_<?= $key ?>">
              <?= $item['question'] ?>
            </button>
          </h2>
          <div id="collapse_<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?= $key ?>" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <?php $paragraphs = explode("\n", format_text(trim($item['answer'])));
              foreach ($paragraphs as $p) : ?>
                <p><?= $p; ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <a href="<?= $faq['action']['link'] ?>" class="btn btn-primary glow"><?= $faq['action']['text']; ?></a>
  </div>
</div>