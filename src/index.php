<html>
  <body>
  <h1> Shopping lists </h1>

<?php
require_once "db.php";
require_once "list.php";
  $db = new DataBase();
  $db->checkConnection();
  $shoppingLists = $db->shoppingLists();
  
  foreach( $shoppingLists as $id => $name){
    echo "<h2>" . $name . "</h2>";
    $items = $db->listItems($id);
    echo "<ul>";
    foreach($items as $name => $qty){
      echo "<li>". $qty . " " . $name . "</li>";
    }
  ?>
  <form action="index.php" method="post">
    <p> New item: <input type="text" name="name" /> </p>
    <p> Qty: <input type="text" name="name" /> </p>
    <p><input type="submit"/></p>
  </form>
  </body>
</html>
<?php
  }

?>
  <form action="list.php" method="post">
    <p> New list: <input type="text" name="name" /> </p>
    <p><input type="submit"/></p>
  </form>
  </body>
</html>
