<?php

class SEO
{
  private $title;
  private $description;
  private $keywords;
  private OG $og;
  private OGImage $ogImage;

  public function __construct($title, $description, $keywords)
  {
    $this->title = $title;
    $this->description = $description;
    $this->keywords = $keywords;
  }

  public function setOg(OG $og)
  {
    $this->og = $og;
  }

  public function setOGImage(OGImage $ogImage)
  {
    $this->ogImage = $ogImage;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getKeywords()
  {
    return $this->keywords;
  }

  public function getOG(): OG
  {
    return $this->og;
  }

  public function getOGImage(): OGImage
  {
    return $this->ogImage;
  }
}

class OG
{
  private $site_name;
  private $url;
  private $title;
  private $description;
  private $see_also;
  private $locale;
  private $localeAlternate1;
  private $localeAlternate2;
  private $type;
  private $updated_time;
  private OGImage $ogImage;

  public function __construct($site_name, $url, $title, $description, $type, $see_also, $locale, $localeAlternate1, $localeAlternate2)
  {
    $this->site_name = $site_name;
    $this->url = $url;
    $this->title = $title;
    $this->description = $description;
    $this->type = $type;
    $this->see_also = $see_also;
    $this->locale = $locale;
    $this->localeAlternate1 = $localeAlternate1;
    $this->localeAlternate2 = $localeAlternate2;
    // $this->updated_time = $updated_time;
  }

  public function setOGImage(OGImage $ogImage)
  {
    $this->ogImage = $ogImage;
  }

  public function getSiteName()
  {
    return $this->site_name;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getSeeAlso()
  {
    return $this->see_also;
  }

  public function getLocale()
  {
    return $this->locale;
  }

  public function getLocaleAlternate1()
  {
    return $this->localeAlternate1;
  }

  public function getLocaleAlternate2()
  {
    return $this->localeAlternate2;
  }
}

class OGImage
{
  private $type; 
  private $width; 
  private $height; 
  private $url; 
  private $secure_url; 
  private $alt;

  public function __construct($type, $width, $height, $url, $secure_url, $alt)
  {
    $this->type = $type;
    $this->width = $width;
    $this->height = $height;
    $this->url = $url;
    $this->secure_url = $secure_url;
    $this->alt = $alt;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getSecureUrl()
  {
    return $this->secure_url;
  }

  public function getAlt()
  {
    return $this->alt;
  }
}

class OGVideo
{
  private $type; 
  private $width; 
  private $height; 
  private $secure_url;

  public function __construct($type, $width, $height, $secure_url)
  {
    $this->type = $type;
    $this->width = $width;
    $this->height = $height;
    $this->secure_url = $secure_url;
  }
}