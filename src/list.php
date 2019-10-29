<?php
require_once "db.php";
  $db = new DataBase();
  $db->checkConnection();
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $db->createList($_POST["name"]);
  }
