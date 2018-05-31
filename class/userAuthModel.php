<?php

class UserAuthModel {
  // xmlで自動生成するときに順番通りに要素が並ぶ
  // RMS APIは順番を組み替えると400が返ってくるので注意すること
  public $userName;
  public $shopUrl;
  public $authKey; // base64_encode(RMS_SERVICE_SECRET . ':' . RMS_LICENSE_KEY); か RMS_SETTLEMENT_AUTH
  
  function __construct() {

  }
}