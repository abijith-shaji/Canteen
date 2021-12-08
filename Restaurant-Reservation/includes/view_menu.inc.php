<?php


if(isset($_SESSION['user_id'])){
    
    require 'includes/dbh.inc.php';

    
    $user = $_SESSION['user_id'];
    $role = $_SESSION['role'];
    
    //rolos pelati
    if($role==1){
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Allergy</th>
                        <th scope="col">Comments</th>
                        
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='includes/delete.php' method='POST'>
                    <input name='id' type='hidden' value=".$row["id"].">
                      <th scope='row'>".$row["food_name"]."</th>
                      <td>".$row["price"]."</td>
                      <td>".$row["starts_date"]."</td>
                      <td>".$row["allergy"]."</td>
                      <td><textarea readonly>".$row["comment"]."</textarea></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>Your reservation list is empty!<p>"; }
    }
    
    
    //rolos upeuthinou 
    
    else if($role==2){
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Allergy</th>
                        <th scope="col">Comments</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='includes/delete.php' method='POST'>
                      <input name='id' type='hidden' value=".$row["id"].">
                      <th scope='row'>".$row["id"]."</th> 
                      <td>".$row["food_name"]."</td>
                      <td>".$row["price"]."</td>
                      <td>".$row["starts_date"]."</td>
                      <td>".$row["allergy"]."</td>
                      <td><textarea readonly>".$row["comment"]."</textarea></td>
                      <td class='table-danger'><button type='submit' name='delete-menu' class='btn btn-danger btn-sm'>Cancel</button></td>
                       </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>Your menu list is empty!<p>"; }
    
    }
    


mysqli_close($conn);
}


