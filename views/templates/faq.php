<?php

$faq = <<<END
How can an institutional website benefit my brand?_
An institutional website serves as the digital face of your brand, offering a platform to showcase your mission, values, and achievements to a global audience.
*It helps build credibility, trust, and brand recognition.*|

What features should I include on my institutional website?_
Your institutional website should include essential features such as *clear navigation, compelling content, contact information, and a responsive design* for optimal viewing on all devices.
Additionally, features like a blog, testimonials, and multimedia elements can enhance user engagement and convey your brand's story effectively.|

How long does it take to develop?_
*Typically, development timelines can range from a few weeks to a few months.*
The timeframe for developing an institutional website depends on various factors, including the complexity of the project, the number of features required, and the client's feedback process.|

Can you help me if I need to update my existing website?_
Absolutely! We're experts in renewing brands and websites, infusing them with fresh energy while preserving their essence.
*Whether it's revamping the design, updating content, or enhancing functionality*, we approach each renovation project with care and creativity to ensure your website remains modern, attractive, and aligned with your brand's evolving needs and audience preferences.|

What if I need a custom feature?_
We've got you covered! Whether it's a unique functionality, interactive elements, or integrations with third-party services, our team can bring your ideas to life. 
*We specialize in developing custom solutions tailored to your specific needs*, ensuring that your website stands out and meets your business objectives. 
Additionally, if your requirements extend beyond website features, our _Custom Web Apps_ service offers a range of solutions to provide added value and empower your business.|

How do I get started?_
*Getting started is easy!* 
Simply reach out to us to discuss your requirements, goals, and vision for your institutional website. 
Our team will work closely with you to understand your needs and guide you through the development process from start to finish. 
*Let's create a powerful online presence for your brand together!*
END;

$faq = clean_and_return($faq, '_', '|');

?>

<div class="faq" id="faq">
  <div class="container">
    <div class="icon bi-chat-square-text-fill"></div>
    <h2>Frequently Asked</h2>
    <p>Institutional Websites Development</p>

    <div class="faq-accordion accordion accordion-flush" id="accordionFAQ">

      <?php foreach ($faq as $key => $item) : ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading<?= $key ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key ?>" aria-expanded="false" aria-controls="collapse<?= $key ?>">
              <?= $item[0] ?>
            </button>
          </h2>
          <div id="collapse<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $key ?>" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <?php $paragraphs = explode("\n", trim($item[1]));
              foreach ($paragraphs as $p) : ?>
                <p><?= $p; ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <a href="#contact" class="btn btn-primary">I Want To Get Started</a>
  </div>
</div>