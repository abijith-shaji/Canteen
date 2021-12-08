<?php

session_start();

//between function.. elenxei an oi xaraktires einai mesa sta oria p thetoume
function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}

if(isset($_POST['menu-submit'])) 
    
    {//elenxw an exei bei sti selida mesw tou submit

        require 'dbh.inc.php';

        $user= $_SESSION['user_id'];
        $foodname= $_POST['foodname'];
        $date= $_POST['date'];
        $allergy= $_POST['allergy'];
        $price= $_POST['price'];
        $comments = $_POST['comments'];

    

      
    // else {
    
        $sql = "INSERT INTO menu(food_name, starts_date, allergy, price, comment) VALUES(?, ?, ?, ?, ?)";
           $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                   header("Location: ../menu.php?error3=sqlerror1");
                   exit();
               }
               else {       
                   mysqli_stmt_bind_param($stmt, "sssssssss", $foodname, $date, $date, $allergy, $price, $comments);
                   mysqli_stmt_execute($stmt);
                   header("Location: ../menu.php?menu=success");
                   exit();
               }
    //    }
    // }
   
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
    