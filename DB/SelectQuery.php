<?php

require 'DBConnection.php';
require 'SiteConfig.php';

$dbConfig = DBConfig();

class SelectQuery {
  private $conn;
  private $query;

  public function __construct() {
    $this->conn = DBConnection::getDbConn();
  }

  public function query($query) {
    $this->query = $query;
  }

  public function selectAll() {
    $stmt = $this->conn->prepare($this->query);
    $output = $stmt->execute();

    return $output ? $stmt->fetchAll(PDO::FETCH_ASSOC) : array();
  }

  public function selectByWhere($where) {
    $stmt = $this->conn->prepare($this->query . ' where ' . $where);
    $output = $stmt->execute();

    return $output ? $stmt->fetch(PDO::FETCH_ASSOC) : null;
  }
}

function makeSiteConfigData($row): SiteConfig {
  if(!$row) throw new Exception('No data');

  $siteConfig = new SiteConfig($row['id'], $row['route'], $row['imageKitFolder'], $row['title'], $row['description'], $row['keywords']);
  $siteConfig->setOgData($row['ogSiteName'], $row['ogUrl'], $row['ogTitle'], $row['ogDescription'], $row['ogType'], $row['ogSeeAlso'], $row['ogLocale'], $row['ogLocaleAlternate1'], $row['ogLocaleAlternate2'], $row['ogUpdatedTime']);
  $siteConfig->setOgImageData($row['ogImageType'], $row['ogImageWidth'], $row['ogImageHeight'], $row['ogImageUrl'], $row['ogImageSecureUrl'], $row['ogImageAlt']);
  $siteConfig->setOgVideoData($row['ogVideoType'], $row['ogVideoWidth'], $row['ogVideoHeight'], $row['ogVideoSecureUrl']);

  return $siteConfig;
}

function getHomeMenuRoute() {
    $select = new SelectQuery();
    $select->query("SELECT * FROM menus ");
    $result = $select->selectByWhere("page = 'Home' ");
    return $result['route'];
}

function getSiteConfig($route = "") {
    $select = new SelectQuery();
    $select->query("SELECT * FROM seo_setting");

    if($route === "" || $route === "/" || str_contains($route, 'admin')) {
        $result = $select->selectAll();

        $siteConfigs = array();
        foreach($result as $k=>$v) {
          array_push($siteConfigs, makeSiteConfigData($v));
        }

        return $siteConfigs[0];
    } else {
        $result = $select->selectByWhere("route = '".$route."' ");

        return makeSiteConfigData($result);
    }
}