<?php

class DataBase{

  private $conn;

  // Create connection
  function __construct(){
    
    $servername = "db";
    $username = "root";
    // Do not store passwords here in production.    
    $password = "rootpass";
    $dbname = "shoppinglists";
    $this->conn = new mysqli($servername, $username, $password, $dbname);

  }
 function checkConnection(){
    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  }
 function shoppingLists(){
    $sql = "SELECT id, name FROM ShoppingLists";
    $result = $this->conn->query($sql);
    $to_return = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $to_return[$row["id"]] = $row["name"];
    }
  }
    return $to_return;
  }

  function listItems($id){
    $sql = "SELECT name, kind, quantaty FROM Item WHERE shopping_list_id==" . $id;
    $result = $this->conn->query($sql);
    $to_return = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $to_return[$row["name"]] = $row["quantaty"];
      }
    }
      return $to_return;
  }

  function createList($name){
    echo $name;
    //This is asking for sql-injections
      $sql = "INSERT INTO ShoppingLists (name) VALUES (\"". $name ."\")";

    if ($this->conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
  } 

  function __destruct(){
    $this->conn->close();
  }
}
