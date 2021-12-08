<?php


if(isset($_SESSION['user_id'])){
    
    require 'includes/dbh.inc.php';

    
    $user = $_SESSION['user_id'];
    $role = $_SESSION['role'];
    
    if($role==2){
       $sql = "SELECT * FROM ( SELECT * FROM transactions ORDER BY trans_id DESC LIMIT 10 )Var1 ORDER BY trans_id ASC";
    // $sql = "SELECT * FROM transactions";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Amount(GBP)</th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='includes/delete.php' method='POST'>
                      <input name='trans_id' type='hidden' value=".$row["trans_id"].">
                      <th scope='row'>".$row["trans_id"]."</th> 
                      <td>".$row["order_num"]."</td>
                      <td>".$row["order_date"]."</td>
                      <td>".$row["cust_name"]."</td>
                      <td>".$row["amount"]."</td>
                            </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>Your transaction list is empty!<p>"; }
    
    }
    


mysqli_close($conn);
}


