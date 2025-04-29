<?php

require 'Constant.php';

class DBConnection {
  private static $instance;
  private $dbConn;

  private function __construct() {}

  private static function getInstance() {
    if (self::$instance == null){
      $className = __CLASS__;
      self::$instance = new $className;
    }

    return self::$instance;
  }

  private static function initConnection() {
      $db = self::getInstance();
      $connConf = DBConfig();
      $db->dbConn = new PDO("mysql:host=".$connConf['db']['host'].";dbname=".$connConf['db']['database'], $connConf['db']['username'], $connConf['db']['password']);
      $db->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $db->dbConn->set_charset('utf8');
      return $db;
  }

  public static function getDbConn() {
    try {
      $db = self::initConnection();
      return $db->dbConn;
    } catch (Exception $ex) {
      echo "I was unable to open a connection to the database. " . $ex->getMessage();
      return null;
    }
  }
}