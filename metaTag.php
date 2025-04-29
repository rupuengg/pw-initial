<?php include './configuration.php'; ?>

<link rel="icon" href="./favicon.png" />
<meta name="language" content="English" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#000000" />
<meta name="google-site-verification" content="z_5HlCkpyxt7dVxFX-65bH-qVoqJc-b-Vvz0mED9j9k" />

<!-- Regular Tags -->
<title><?php echo $seo->getTitle(); ?></title>
<meta http-equiv="content-language" content="en" />
<meta data-hid="http-equiv" http-equiv="Accept-CH" content="DPR, Viewport-Width, Width, Save-Data" />
<meta charset="utf-8" />
<meta name="description" content="<?php echo $seo->getDescription(); ?>" />
<meta name="keywords" content="<?php echo $seo->getKeywords(); ?>" />
<!-- <link rel="author" href="https://plus.google.com/{{googlePlusId}}" /> -->
<link rel="canonical" href="<?php echo $seo->getOG()->getSeeAlso(); ?>" />

<!-- Faceboot Meta Tags -->
<meta property="og:site_name" content="<?php echo $seo->getOG()->getSiteName(); ?>" />
<meta property="og:url" content="<?php echo $seo->getOG()->getUrl(); ?>" />
<meta property="og:title" content="<?php echo $seo->getOG()->getTitle(); ?>" />
<meta property="og:see_also" content="<?php echo $seo->getOG()->getSeeAlso(); ?>" />
<meta property="og:description" content="<?php echo $seo->getOG()->getDescription(); ?>" />
<meta property="og:locale" content="<?php echo $seo->getOG()->getLocale(); ?>" />
<meta property="og:locale:alternate" content="<?php echo $seo->getOG()->getLocaleAlternate1(); ?>" />
<meta property="og:type" content="<?php echo $seo->getOG()->getType(); ?>" />

<meta property="og:image" content="<?php echo $seo->getOGImage()->getUrl(); ?>" />
<meta property="og:image:secure_url" content="<?php echo $seo->getOGImage()->getSecureUrl(); ?>" />
<meta property="og:image:type" content="<?php echo $seo->getOGImage()->getType(); ?>" />
<meta property="og:image:width" content="<?php echo $seo->getOGImage()->getWidth(); ?>" />
<meta property="og:image:height" content="<?php echo $seo->getOGImage()->getHeight(); ?>" />
<meta property="og:image:alt" content="<?php echo $seo->getOGImage()->getAlt(); ?>" />

<!-- Google Meta Tags -->
<meta itemprop="name" content="<?php echo $seo->getOG()->getTitle(); ?>" />
<meta itemprop="description" content="<?php echo $seo->getOG()->getDescription(); ?>" />
<meta itemprop="image" content="<?php echo $seo->getOGImage()->getUrl(); ?>" />
<!-- Google Meta Tags End -->

<!-- Twitter Meta tags -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $seo->getOG()->getSeeAlso(); ?>" />
<meta name="twitter:title" content="<?php echo $seo->getOG()->getTitle(); ?>" />
<meta name="twitter:description" content="<?php echo $seo->getOG()->getDescription(); ?>" />
<!-- Twitter Meta tags End -->

<!-- Geo Position Meta Tags -->
<meta name="geo.region" content="IN-UP" />
<meta name="geo.placename" content="Greater Noida" />
<meta name="geo.position" content="28.467073;77.513765" />
<meta name="ICBM" content="28.467073, 77.513765" />