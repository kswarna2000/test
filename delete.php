<!DOCTYPE html>
<html>
<head>
  <title>Delete data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style="color:#734d26;text-align:center;"><b>DELETE DATA DATA</b></h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email"class="form-control" id="email" placeholder="Enter email" size="20"name="email">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
include('connect.php');
$email=$_POST["email"];
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
if(empty($email))
{
echo "<h3>EMAIL FIELD CANNOT BE EMPTY</h3>";
}
$sql1="SELECT * FROM details where email='$email'";

if(mysqli_query($link, $sql1) )
{
echo "<h3>NO SUCH RECORD FOUND</h3>";
}
$sql = "DELETE FROM details WHERE email='$email'";
if (!mysqli_query($link, $sql) ) {
    echo "<h1>Record deleted successfully</h1>";
} 
else {
    echo "<h3>Error deleting record:</h3> " . $link->error;
}

mysqli_close($link);
}
?>


