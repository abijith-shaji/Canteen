<?php


//delete reservation

if(isset($_POST['delete-submit'])) {
 
 require 'dbh.inc.php';
 
 $reservation_id = $_POST['reserv_id'];
    
 $sql = "DELETE FROM reservation WHERE reserv_id =$reservation_id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view_reservations.php?delete=success");
} else {
    header("Location: ../view_reservations.php?delete=error");
}
}

//delete menu

if(isset($_POST['delete-menu'])) {
 
    require 'dbh.inc.php';
    
    $menuId = $_POST['id'];
       
    $sql = "DELETE FROM menu WHERE id =$menuId";
   if (mysqli_query($conn, $sql)) {
       header("Location: ../view_menu.php?delete=success");
   } else {
       header("Location: ../view_menu.php?delete=error");
   }
   }


   //order food

if(isset($_POST['order-food'])) {
 
    require 'dbh.inc.php';
    
    $menuId = $_POST['id'];
       
    $sql = "DELETE FROM menu WHERE id =$menuId";
   if (mysqli_query($conn, $sql)) {
       header("Location: ../order_food.php?delete=success");
   } else {
       header("Location: ../order_food.php?delete=error");
   }
   }

   //order food

if(isset($_POST['order-feast'])) {
 
    require 'dbh.inc.php';
    header("Location: ../order_food.php?orderFeast=success");
    

   }
//delete tables


if(isset($_POST['delete-table'])) {
 
 require 'dbh.inc.php';
 
 $tables_id = $_POST['tables_id'];
    
 $sql = "DELETE FROM tables WHERE tables_id =$tables_id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view_tables.php?delete=success");
} else {
    header("Location: ../view_tables.php?delete=error");
}
}


mysqli_close($conn);
?>

    


