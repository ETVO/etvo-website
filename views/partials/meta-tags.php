<?php

$meta_default = array(
    'page_url' => $page_url ?? 'https://etvo-web.com',
    'page_title' => $page_title ?? 'ETVO - Web Design & Development',
    'page_date' => date('Y-m-d h:i:s'),
    'page_language' => 'en',
    'page_description' => 'Discover how our web services can transform your online presence. Schedule a consultation today!',
    'page_keywords' => 'web development, web design, digital marketing, SEO, online presence, high quality, trustworthy, elegant, institutional, potential, engagement, beautiful, branding, free meeting, updates, custom features, responsive design, get started, my new website, essential features, credibility, enhancing functionality',
    'page_image' => HOME_URL . 'assets/img/meta-image.jpg' // just give me an idea of image
);

foreach ($meta_default as $key => $value) {
    if (isset($$key)) {
        unset($meta_default[$key]);
    }
}

if (isset($yoast)) :
    echo $yoast;
else :
    extract($meta_default);

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type'  => 'WebPage',
                '@id' => $page_url,
                'url' => $page_url,
                'name' => $page_title,
                'thumbnailUrl' => $page_image,
                'datePublished' => $page_date,
                'description' => $page_description,
                'inLanguage' => $page_language,
                'potentialAction' => [[
                    '@type' => 'ReadAction',
                    'target' => [$page_url]
                ]],
            ]
        ]
    ];

?>

    <title><?= $page_title; ?></title>

    <!-- Description -->
    <meta name="description" content="<?= $page_description; ?>">

    <!-- Keywords -->
    <meta name="keywords" content="<?= $page_keywords; ?>">

    <!-- Canonical -->
    <meta property="canonical" content="<?= $page_url; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= $page_title; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $page_url; ?>">
    <meta property="og:image" content="<?= $page_image; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $page_title; ?>">
    <meta name="twitter:description" content="<?= $page_description; ?>">
    <meta name="twitter:image" content="<?= $page_image; ?>">
    <script type="application/ld+json" class="yoast-schema-graph">
        <?= json_encode($schema); ?>
    </script>

<?php endif;
