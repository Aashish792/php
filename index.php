
<!DOCTYPE html>
<html>
<head><title> College Picnic Form  </title></head>
<link rel= "stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

<body>

<nav class = "navbar navbar-default">
  <div class ="container">
    <div class = "navbar-hrader">
      <a class ="navbar-brand" href="index.php">College Picnic </a>
    </div>
  </div>
</div>
</nav>
<div class = "container">
  <?php if($msg != '' ) : ?>
    <div class = "alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
  <?php endif; ?>
 <! submit to this file >
  <form method="post" action="form.php" >

    <div class="form-group">
      <lebel> Name </Label>
        <input type = "text " name="name" class = "form-control" value="">
      </div>
      <div class = "form-group">
        <lebel> Batch </lebel>
        <input type = "number" name = "Batch" class = "form-control" value= " ">
      </div>
      <div class = "form-group">
        <lebel> Email </lebel>
        <input type = "text" name = "Email" class = "form-control" value= " ">
      </div>
  <fieldset>
  <legend> Food preferance </legend>
  <div>
    <input type="radio" id="Veg" name="Food preferance" value="Veg">
    <label for="Veg">Veg</label>
  </div>
  <div>
    <input type="radio" id="Non-veg" name="Food preferance" value="non-veg">
    <label for="Non-veg">Non-veg</label>
  </div>
</fieldset>
<from method = "post" action = "form.php" >
<div class = "form-group">
  <input type = "submit" name = "Submit" class = "btn btn-primary btn-lg" value= "Submit ">
</div>





</body>
