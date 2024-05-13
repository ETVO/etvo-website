<?php

include_once CONTROL_DIR . '/form_util.php';

$contact = $blocks['contact'];

$contact_model = get_model('contact');

$form_status = isset($_GET['form_status'])
  ? $_GET['form_status']
  : '';

$form_message = isset($_GET['form_message'])
  ? $_GET['form_message']
  : '';

$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<div class="contact" id="contact">
  <div class="content">
    <div class="wrap">
      <h2><?= $contact['title']; ?></h2>
      <p><?= $contact['desc']; ?></p>

      <div class="form">
        <form id="contact-form" action="<?= CONTROL_URL . '/send_mail.php' ?>" method="post" novalidate>
          <div id="form-message" class="<?php if ($form_status) echo $form_status ?>">
            <div class="message">
              <?php echo $form_message; ?>
            </div>
          </div>
          <div class="fields">
            <input type="hidden" name="actual_link" value="<?= $actual_link; ?>">
            <?php
            render_form_fields($contact_model['fields']);
            ?>
            <?php
            render_honeypot($contact_model['honeypot']);
            ?>
            <button type="submit" class="btn btn-primary">
              SEND
              <span class="bi-arrow-clockwise" id="spinner" style="display: none;"></span>
            </button>
          </div>
        </form>
      </div>

      <h3><?= $contact['icons_title']; ?></h3>
      <div class="icons">
        <?php foreach ($contact['icons'] as $icon) : ?>
          <a class="bi-<?= $icon['icon']; ?>" href="<?= $icon['link']; ?>" title="<?= $icon['title'] ?>" target="_blank"></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="image">
    <img src="/assets/img/connect-with-us.webp" alt="">
  </div>
</div>