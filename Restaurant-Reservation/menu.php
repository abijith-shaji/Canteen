<?php
require "header.php";
?>
    
    <br><br>
<div class="container">
    <h3 class="text-center"><br>New Menu Item<br></h3>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
 
        
        
        
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<p class="text-white bg-dark text-center">Welcome '. $_SESSION['username'] .', Add new item here!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Fill all fields, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5 class="bg-danger text-center">Invalid Food Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5 class="bg-danger text-center">Invalid Start Date, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5 class="bg-danger text-center">Invalid Comment, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidprice") {   
            echo '<h5 class="bg-danger text-center">Invalid Price, Pleast try again!</h5>';
        }
        // else if($_GET['error3'] == "full") {   
        //     echo '<h5 class="bg-danger text-center">Reservations are full this date and timezone, Please try again!</h5>';
        // }
    }
        if(isset($_GET['menu'])) {   
           if($_GET['menu'] == "success"){ 
            echo '<h5 class="bg-success text-center">successfull!</h5>';
        }
        }
        echo'<br>';



    

    
    
     //reservation form  
    echo '  
        
    <div class="signup-form">
        <form action="includes/menu.inc.php" method="post">
            <div class="form-group">
            <label>Food Name</label>
                <input type="text" class="form-control" name="foodname" placeholder="Food Name" required="required">
            </div>   
            <div class="form-group">
            <label>Start Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Allergy</label>
		<select class="form-control" name="allergy">
		<option>Gluten</option>
		<option>Shellfish</option>
		<option>Celiac</option>
		</select>
            </div>
            <div class="form-group">
            <label>Enter Price</label>
        	<input type="number" class="form-control" min="1" name="price" placeholder="Price" required="required">
                <small class="form-text text-muted">Minimum value is 1</small>
            </div>
            <div class="form-group">
            <label>Enter extra Comments</label>
                <textarea class="form-control" name="comments" placeholder="Comments" rows="3"></textarea>
                <small class="form-text text-muted">Comments must be less than 200 characters</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="menu-submit" class="btn btn-dark btn-lg btn-block">Submit New Item</button>
            </div>
        </form>
        <br><br>
    </div>
    ';  
    }

    else {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';  
        
    }
    ?>

             
        </div>
    </div>
</div>
<br><br>

<?php
require "footer.php";
?>