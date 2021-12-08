<?php
$connect = mysqli_connect("localhost", "root", "", "canteen");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM menu WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>