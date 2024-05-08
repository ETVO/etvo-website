<?php $benefits = $blocks['benefits']; ?>

<div class="benefits">
  <div class="container" id="benefits">
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
