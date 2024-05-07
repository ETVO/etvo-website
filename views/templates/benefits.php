<?php $benefits = $blocks['benefits']; ?>

<div class="benefits" id="benefits">
  <div class="container">
    <div class="content">
      <h2>Elevate Your Online Presence</h2>
      <p>At ETVO, our goal is simple: developing websites that deliver tangible results and drive impact toward your business goals.</p>
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
  <a href="<?= $benefits['cta_button']['link']; ?>" class="btn btn-primary"><?= $benefits['cta_button']['text']; ?></a>
</div>