<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Egyfood_Product";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE If Not EXISTS Egyfood_Product";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE If Not EXISTS Products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Product_Name VARCHAR(30) NOT NULL,
Product_Price FLOAT,
Product_Type VARCHAR(30) NOT NULL,
Product_Description VARCHAR(300) NOT NULL,
Product_image VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Products created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// sql to insert table
$sql = "INSERT INTO Products (id,Product_Name, Product_Price, Product_Type, Product_Description, Product_image ) 
VALUES ('1','Pot-roast pork','120.00','Special meal','Pot-roast pork one of the most unique meal in out list ,Share and enjoy our Tasty Meal with your Frinds.','../Media/food/Special meal/Pot-roast pork.png')
,('2','Jamie’s meatloaf','150.00','Special meal','Jamie’s meatloaf popular meal ,enjoy it with your friends ,Tasty Chicken Sandwich.','../Media/food/Special meal/Jamie’s meatloaf.png')
,('3','Chocolate & avocado mousse','80.00','Special meal','Chocolate & avocado mousse Special Dessert that love share it with your friends.','../Media/food/Special meal/Chocolate & avocado mousse.png')
,('4','EgyFood Special','60.00','Special meal','EgyFood Special Dessert that can enojoy it with many friends.','../Media/food/Special meal/EgyFood Special.png')
,('5','Foul','8.00','legumes','Foul is The most Favorite popular food in all parts of Egypt,no comment about that.','../Media/food/legumes/Foul.png')
,('6','Falafel','8.00','legumes','Falafel is The most Egyptians favorite food, there is no Egyptian who does not like it?.','../Media/food/legumes/falafel.png')
,('7','Plain Omelet','12.00','legumes','Plain Omelet Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/legumes/Plain Omelet.png')
,('8','Shakshuka','20.00','legumes','Shakshuka, do you love eggs?, try Shakshuka now, Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/legumes/Shakshuka.png')
,('9','Scrambled','18.00','legumes','Scrambled Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/legumes/Scrambled.png')
,('10','Eggs Medahrag','13.00','legumes','Eggs Medahrag Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/legumes/Eggs Medahrag.png')
,('11','Eggplant Box','9.00','legumes','Eggplant Box Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/legumes/Eggplant Box.png')
,('12','Koshary','30.00','legumes','Koshary every one know what is Koshary The famous food in all of Egypt.','../Media/food/legumes/Koshary.png')
,('13','French Fries','12.00','Sides','French Fries who do not like Fries? , Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Sides/French Fries.png')
,('14','Friskes Fries','12.00','Sides','Friskes Fries who do not like Fries? , Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Sides/Friskes Fries.png')
,('15','Baba Ghanoug','10.00','Salad','Baba Ghanoug Salad do you like salad?, try Baba Ghanoug now.','../Media/food/Sides/Baba Ghanoug Salad.png')
,('16','Salad Slices','10.00','Salad','Salad Slices ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Sides/Salad Slices.png')
,('17','Caesar','18.00','Salad','Caesar Salad ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Sides/Caesar.png')
,('18','Alexandrian liver','35.00','Meat','Alexandrian liver ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Alexandrian liver.png')
,('19','Alexandrian Sausage','35.00','Meat','Alexandrian Sausage ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Alexandrian Sausage.png')
,('20','Quinoa Chicken','30.00','Chicken','Quinoa Chicken ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Quinoa Chicken.png')
,('21','Grilled Chicken','30.00','Chicken','Grilled Chicken ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Grilled Chicken.png')
,('22','Shawarma fatteh','38.00','Chicken','Shawarma fatteh ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Shawarma fatteh.png')
,('23','Shawarma fatteh','34.00','Meat','Meat Shawrma Fattah ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Meat Shawrma Fattah.png')
,('24','Fried Fish','28.00','Fish','Fried Fish ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Fried Fish.png')
,('25','Grilled Fish','28.00','Fish','Grilled Fish ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Grilled Fish.png')
,('26','Fried Shrimp','68.00','Fish','Fried Shrimp ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Fried Shrimp.png')
,('27','Grilled Shrimp','66.00','Fish','Grilled Shrimp ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Grilled Shrimp.png')
,('28','Crap & Hot Sauce','76.00','Fish','Crap with Hot Sauce ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Crap with Hot Sauce.png')
,('29','Seafood Soup','33.00','Soup','Seafood Soup ,Share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Chicken and Fish/Seafood Soup.png')
,('30','Chicken Shawrma','35.00','Sandwich','Chicken Shawrma Sandwich ,enjoy it with your friends ,Tasty Chicken Sandwich.','../Media/food/Sandwiches/Chicken Shawrma.png')
,('31','Friskes Fries','30.00','Sandwich','French Fries With Ketchup & Mayonnaise Sandwich Share and enjoy our Tasty Meal with your Frinds.','../Media/food/Sandwiches/French Fries With Ketchup.png')
,('32','Cordon Bleu','25.00','Sandwich','Cordon Bleu Simple and Great Sandwich, be happy and share it with your friends.','../Media/food/Sandwiches/Cordon Bleu.png')
,('33','Spicy Chicken','28.00','Sandwich','Spicy Chicken Sandwich, be happy and share it with your friends.','../Media/food/Sandwiches/Spicy Chicken.png')
,('34','Red Hot Chicken','32.00','Sandwich','Red Hot Chicken Sandwich, be happy and share it with your friends.','../Media/food/Sandwiches/Red Hot Chicken.png')
,('35','Excellent Hawawshi','40.00','Sandwich','Excellent Hawawshi Sandwich, be happy and share it with your friends.','../Media/food/Sandwiches/Excellent Hawawshi.png')
,('36','Shrimp','45.00','Sandwich','Shrimp Sandwich, be happy and share it with your friends.','../Media/food/Sandwiches/Shrimp Sandwich.png')
,('37','Foul','10.00','Sandwich','foul Sandwich is The most Favorite popular food in all parts of Egypt,no comment about that.','../Media/food/Sandwiches/foul san.png')
,('38','Falafel','12.00','Sandwich','foul Sandwich is The most Egyptians favorite food, there is no Egyptian who does not like it?.','../Media/food/Sandwiches/Falafel Sandwich.png')
,('39','Foul & Eggs','15.00','Sandwich','Foul With Eggs Sandwich share it and enjoy our Tasty Meal with your Frinds.','../Media/food/Sandwiches/Foul With Eggs.png')
,('40','Orange Juice','18.00','Cold Drink','Orange Juice Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Orange Juice.png')
,('41','Mango Juice','25.00','Cold Drink','Mango Juice Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Mango Juice.png')
,('42','Strawberry Juice','22.00','Cold Drink','Strawberry Juice Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Strawberry Juice.png')
,('43','Lemon Juice','12.00','Cold Drink','Lemon Juice Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Lemon Juice.png')
,('44','Pepsi','10.00','Cold Drink','Pepsi Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Pepsi.png')
,('45','Fanta Orange','10.00','Cold Drink','Fanta Orange Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Fanta Orange.png')
,('46','Red Bull','12.00','Cold Drink','Red Bull Cold Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Cold Drinks/Red Bull.png')
,('47','Tea','5.00','Hot Drinks','Tea Hot Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Hot Drinks/Tea.png')
,('48','Coffee','8.00','Hot Drinks','Coffee Hot Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Hot Drinks/Coffee.png')
,('49','Sahlab','12.00','Hot Drinks','Sahlab Hot Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Hot Drinks/Sahlab.png')
,('50','Sahlab & Nuts','15.00','Hot Drinks','Sahlab with Nuts Hot Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Hot Drinks/Sahlab with Nuts.png')
,('51','Hot Chocolate','20.00','Hot Drinks','Hot Chocolate Hot Drink, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Hot Drinks/Hot Chocolate.png')
,('52','Milky Rice','40.00','Dessert','Milky Rice Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Milky Rice.png')
,('53','Milky Rice & Nuts','45.00','Dessert','Milky Rice with Nuts Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Milky Rice with Nuts.png')
,('54','Om Ali','35.00','Dessert','Om Ali Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Om Ali.png')
,('55','Basbusa & Nuts','38.00','Dessert','Basbusa & Nuts Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Basbusa with Nuts.png')
,('56','Kunafa Nabulsieh','30.00','Dessert','Kunafa Nabulsieh Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Kunafa Nabulsieh.png')
,('57','Vanilla Ice Cream','15.00','Dessert','Vanilla Ice Cream Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Vanilla Ice Cream.png')
,('58','Strawberry Ice Cream','15.00','Dessert','Strawberry Ice Cream Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Strawberry Ice Cream.png')
,('59','Chocolate Ice Cream','20.00','Dessert','Chocolate Ice Cream Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Chocolate Ice Cream.png')
,('60','Pistachio Ice Cream','18.00','Dessert','Pistachio Ice Cream Dessert, share it and enjoy our Tasty Drink with your Frinds.','../Media/food/Desserts/Pistachio Ice Cream.png')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>