
<?php

  //Message vars
  $msg = '';
  $msgClass = '';
    //check for submit



    //using filter
    if(filter_has_var(INPUT_POST, 'Submit')){
      //Get the form data and puting those into variables

      $name = $_POST['name'];
      $batch = $_POST['Batch'];
      $Email = $_POST['Email'];
      $veg = $_POST['Veg'];
      $nonveg =$_POST['Non-veg'];

      //checking for required fieldset
      if(!empty($Email) && !empty($name) && !empty($batch)){
        //pass


      } else {

        // fail
        $msg = "Please fill in all form";
        $msgClass = 'alert-danger';

      }
    }

echo 'Hello  ,' .$name;


?>

<!DOCTYPE html>
<html>
<head>
<title>Food Selection</title>
<link rel= "stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="main">
<form action="form.php" method="post">
<label class="heading">Select the food item whick you want to order:</label><br>
<input type="checkbox" name="check_list[]" value="Mo:MO"><label>MO:MO</label><br>
<input type="checkbox" name="check_list[]" value="Chowmin"><label>Chowmin</label><br>
<input type="checkbox" name="check_list[]" value="Pizza"><label>Pizza</label><br>
<input type="checkbox" name="check_list[]" value="Burger"><label>Burger</label><br>
<input type="checkbox" name="check_list[]" value="Roti"><label>Roti</label><br>
<input type="checkbox" name="check_list[]" value="Pasta"><label>Pasta</label><br>
<input type="submit" name="submit" Value="Submit"/>
<!----- Including PHP Script ----->
<?php include 'Final.php';?>
</form>
</div>
</div>
</body>
</html>
