
<?php
$connect = mysqli_connect("localhost", "root", "", "canteen");
if(isset($_POST["food_name"], $_POST["allergy"]))
{
 $food_name = mysqli_real_escape_string($connect, $_POST["food_name"]);
 $allergy = mysqli_real_escape_string($connect, $_POST["allergy"]);
 $price = mysqli_real_escape_string($connect, $_POST["price"]);
 $comment = mysqli_real_escape_string($connect, $_POST["comment"]);
//  $home_address = mysqli_real_escape_string($connect, $_POST["home_address"]);
//  $contact_num = mysqli_real_escape_string($connect, $_POST["contact_num"]);
 


 $query = "INSERT INTO menu (food_name, allergy, price, comment) VALUES('$food_name', '$allergy', '$price', '$comment')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>