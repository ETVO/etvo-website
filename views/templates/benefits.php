<?php $benefits = $blocks['benefits']; ?>

<div class="benefits" id="benefits">
  <div class="container">
    <div class="content">
      <h2><?= $benefits['title']; ?></h2>
      <p><?= $benefits['desc']; ?></p>
    </div>
    <div class="inner-benefits">
      <?php foreach ($benefits['benefits'] as $benefit) : ?>
        <div class="benefit">
          <img src="<?= $benefit['image']; ?>" alt="<?= $benefit['title']; ?>">
          <div class="content">
            <h3><?= $benefit['title']; ?></h3>
            <p><?= $benefit['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="cta">
  <h2><?= $benefits['cta_title']; ?></h2>
  <a href="<?= $benefits['cta_button']['link']; ?>" class="btn btn-primary glow"><?= $benefits['cta_button']['text']; ?></a>
</div>