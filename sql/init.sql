CREATE TABLE ShoppingLists (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  UNIQUE KEY unique_name (name)
);

CREATE TABLE Item (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  shopping_list_id INT(6) UNSIGNED NOT NULL,
  kind VARCHAR(10) NOT NULL,
  quantity VARCHAR(30)
);

INSERT INTO ShoppingLists (name) VALUES ("My shopping list");
