<?php $color = '#fbf6f6';


$testimonials = <<<END
"We at Imobmark are always grateful for the projects delivered by ETVO. 
They are competent and professional, developing websites and systems with dedication, care, and quality, resulting in truly singular work. 
They surpass all others we've encountered, in technical prowess, communication, support, and delivering results with precision."
_Tui Barros, IMOBMARK
|
"Their expertise in SEO stands out: the well-planned design and precise information hierarchy have placed our company at the top of segment searches.

The human touch was impeccable: attention to detail, meeting deadlines rigorously, and exceeding expectations throughout our partnership.

ETVO's work on Lux's website ensured clear and effective messaging. I strongly recommend ETVO services for those that want business growth."
_Vera Pereira, LUX DIGITAL
|
"It's been a pleasure, honestly. It's really good working with ETVO.
We understand each other well, they respond effectively, and always do their best. 
I really appreciate it."
_Edgar Silva, TERRAMAY
END;

$testimonials = clean_and_return($testimonials, '_', '|');

?>

<div class="testimonials" id="testimonials">
  <div class="container">
    <div class="icon bi-quote"></div>
    <h2>See what our clients have to say about working with us</h2>

    <div id="carouselTestimonials" class="testimonials-slider carousel slide" style="color: <?= $color; ?>;" data-bs-ride="carousel" data-bs-interval="6500">
      <div class="carousel-inner">
        <?php foreach ($testimonials as $key => $testimonial) : ?>
          <div class="carousel-item testimonial <?php if ($key == 0) echo 'active' ?>">
            <div class="testimonial-text">
              <?php $paragraphs = explode("\n", trim($testimonial[0]));
              foreach ($paragraphs as $p) : ?>
                <p><?= $p; ?></p>
              <?php endforeach; ?>
            </div>
            <div class="testimonial-author">
              <?= $testimonial[1]; ?>
            </div>

            <!-- <div id="bar-fill"></div> -->
          </div>
        <?php endforeach; ?>
      </div>

      <div class="buttons-wrap" style="border-color: <?= $color; ?>">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="<?= $color ?>" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="<?= $color ?>" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>