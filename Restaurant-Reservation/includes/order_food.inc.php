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
                        <th scope="col">Price(GBP)</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Allergy</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Quantity</th>
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
                      <td><select>
                      <option value ='1'>1</option>
                      <option value ='2'>2</option>
                      <option value ='3'>3</option>
                      <option value ='4'>4</option>
                      <option value ='5'>5</option>
                      <option value ='6'>6</option>
                      <option value ='7'>7</option>
                      <option value ='8'>8</option>
                      <option value ='9'>9</option>
                      <option value ='10'>10</option>
                      </select></td>
                      <td>
                      <button type='submit' name='order-food'>Add to Cart</button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
                 
        echo "<br>
        <form action='payment.php' method='POST'>

                      <div class='col-sm-4'>
      <div class='form-group' class='form-inline'>
        <span style='white-space: nowrap'>
          <label for='size'>Tell us if you have any allergy:</label>
          <select class='form-control' id='size' style='background-color: black; color: silver;display:inline-block'>
          <option value ='1'>Celery</option>
          <option value ='2'>Gluten</option>
          <option value ='3'>Eggs</option>
          <option value ='4'>Fish</option>
          <option value ='5'>Milk</option>
          <option value ='6'>Nuts</option>
          <option value ='7'>Peanuts</option>
          <option value ='8'>Sesame seeds</option>
          <option value ='9'>Soya</option>
          <option value ='10'>Other</option>
          </select>
        </span>
      </div>
    </div>

    <div class='col-sm-4'>
    <div class='form-group'  class='form-inline'>
    <label for='size'>Choose Date</label>
    <input type='date' class='form-control' id='size' style='display:inline-block' name='date' placeholder='Date' required='required'>
    </div>
</div>
<div class='col-sm-4'>
    <div class='form-group'  class='form-inline'>
<label>Enter Time Zone</label>
<input type='time' class='form-control' name='opentime' required='required'>
        </div>
</div>
    <br>
    <div class='col-sm-4'>
    <span style='white-space: nowrap'>
        <button style='background-color: #3b77a7; color: white;display:inline-block; width: 100px;
        height: 45px;' type='submit' name='payment' onClick = 'abc.php'>Payment</button>
        </span>
        </div>
        </form>
        ";




        echo'
        <br><br>
        <section id="orderFeast">
<div class="container">
<h3 class="text-center"><br>Order Feast<br></h3> 
        <div class="signup-form">
        <form action="includes/delete.php" method="post">
        <label>Choose Type of Feast</label>
        <select class="form-control" name="type">
        <option>vegetarian</option>
        <option>Non vegetarian</option>
        <option>Mixed</option>
        <option>Vegan</option>
        </select>
                <small class="form-text text-muted">Allergy should be shared with any staff member</small>
            </div>
            <div class="form-group">
            <label>Team Leader Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                <small class="form-text text-muted">Full name must be 2-20 characters long</small>
            </div>   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Enter Time Zone</label>
		<select class="form-control" name="time">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
            <div class="form-group">
            <label>Enter number of Guests</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" required="required">
                <small class="form-text text-muted">Minimum value is 8</small>
            </div>
            <div class="form-group">
            <button type="submit" name="order-feast" class="btn btn-dark btn-lg btn-block">Order</button>
            </div>
        </form>
        <br><br>
    </div>
    </section>
        ';
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>Your Menu is empty!<p>"; }
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


