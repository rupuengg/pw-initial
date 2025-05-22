<?php
    // error_reporting(E_ALL);
    include 'DB/SelectQuery.php';

    //  Get home menu route
    $route = getHomeMenuRoute();

    $requestUri = $_SERVER['REQUEST_URI'] === '/' ? $route : $_SERVER['REQUEST_URI'];

    // Get request route
    $requestUri = str_replace('/pwi_initial/metaTag.php', '', $requestUri);

    $seo = getSiteConfig($requestUri);
?>
<title><?php echo $seo->getTitle(); ?></title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L54RGG23PV"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L54RGG23PV');
</script>

<link rel="icon" href="./favicon.png" />
<meta name="language" content="English" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#000000" />
<meta name="google-site-verification" content="z_5HlCkpyxt7dVxFX-65bH-qVoqJc-b-Vvz0mED9j9k" />

<meta name="p:domain_verify" content="29105b69a3b946b425e15b81de43e06e"/>

<meta http-equiv="content-language" content="en" />
<meta data-hid="http-equiv" http-equiv="Accept-CH" content="DPR, Viewport-Width, Width, Save-Data" />
<meta charset="utf-8" />
<meta name="description" content="<?php echo $seo->getDescription(); ?>" />
<meta name="keywords" content="<?php echo $seo->getKeywords(); ?>" />
<!-- <link rel="author" href="https://plus.google.com/{{googlePlusId}}" /> -->
<link rel="canonical" href="<?php echo $seo->getOGSeeAlso(); ?>" />

<!-- Faceboot Meta Tags -->
<meta property="og:site_name" content="<?php echo $seo->getOGSiteName(); ?>" />
<meta property="og:url" content="<?php echo $seo->getOGUrl(); ?>" />
<meta property="og:title" content="<?php echo $seo->getOGTitle(); ?>" />
<meta property="og:see_also" content="<?php echo $seo->getOGSeeAlso(); ?>" />
<meta property="og:description" content="<?php echo $seo->getOGDescription(); ?>" />
<meta property="og:locale" content="<?php echo $seo->getOGLocale(); ?>" />
<meta property="og:locale:alternate" content="<?php echo $seo->getOGLocaleAlternate1(); ?>" />
<meta property="og:type" content="<?php echo $seo->getOGType(); ?>" />

<meta property="og:image" content="<?php echo $seo->getOGImageUrl(); ?>" />
<meta property="og:image:secure_url" content="<?php echo $seo->getOGImageSecureUrl(); ?>" />
<meta property="og:image:type" content="<?php echo $seo->getOGImageType(); ?>" />
<meta property="og:image:width" content="<?php echo $seo->getOGImageWidth(); ?>" />
<meta property="og:image:height" content="<?php echo $seo->getOGImageHeight(); ?>" />
<meta property="og:image:alt" content="<?php echo $seo->getOGImageAlt(); ?>" />

<!-- Google Meta Tags -->
<meta itemprop="name" content="<?php echo $seo->getOGTitle(); ?>" />
<meta itemprop="description" content="<?php echo $seo->getOGDescription(); ?>" />
<meta itemprop="image" content="<?php echo $seo->getOGImageUrl(); ?>" />
<!-- Google Meta Tags End -->

<!-- Twitter Meta tags -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $seo->getOGSeeAlso(); ?>" />
<meta name="twitter:title" content="<?php echo $seo->getOGTitle(); ?>" />
<meta name="twitter:description" content="<?php echo $seo->getOGDescription(); ?>" />
<!-- Twitter Meta tags End -->

<!-- Geo Position Meta Tags -->
<meta name="geo.region" content="IN-UP" />
<meta name="geo.placename" content="Greater Noida" />
<meta name="geo.position" content="28.467073;77.513765" />
<meta name="ICBM" content="28.467073, 77.513765" />

<meta name="image.kit.folder" content="<?php echo $seo->getImageKitFolder() ?>" />