<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <h2 style="color:#734d26;text-align:center;"><b>INSERT DATA</b></h2>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
<div class="form-group">
<div class="form-group">
  <label for="usr"> Name:</label>
  <input type="text" name="name"class="form-control"placeholder="Enter your  name" id="usr">
</div>
<div class="form-group">
  <label for="usr">Phone no:</label>
  <input type="text" name="phone"class="form-control" placeholder="Enter your phone no"id="usr">
</div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email"class="form-control" id="email" placeholder="Enter email" size="20"name="email">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
include('connect.php');

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
$sql = "INSERT INTO details(name,phone,email) VALUES ('$name','$phone','$email')";
if(mysqli_query($link, $sql) and !empty($_POST["name"])and !empty($_POST["phone"])  and !empty($_POST["email"]) ){
   echo "<h2>DATA ADDED SUCCESSFULLY</h2><br/><h3>FILL THE FORM TO INSERT MORE RECORDS</h3>";
} else{
    echo "<h2>DATA INSERTION FAILED ENTER DETAILS CORRECTLY</h2>";
}
 
mysqli_close($link);
}
?>
