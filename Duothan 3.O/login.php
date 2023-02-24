
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydb";
  
$conn = mysqli_connect($host, $user, $password,$dbname);
  
if(!$conn){
   die("Connection failed: " . mysqli_connect_error());
}
 

$name = $_POST['name'];
$password = $_POST['password'];
  

$check_user_query = "SELECT * FROM user WHERE name='$name' AND password='$password'";
$run_query = mysqli_query($conn,$check_user_query);
 

if(mysqli_num_rows($run_query)>0)
{
    echo "User successfully logged in!";
}
else
{
    echo "Username or Password is incorrect!";
}
?>