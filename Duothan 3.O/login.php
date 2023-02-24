
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydb";
  
$conn = mysqli_connect($host, $user, $password,$dbname);
  
if(!$conn){
   die("Connection failed: " . mysqli_connect_error());
}
 

$email = $_POST['email'];
$password = $_POST['password'];
  

$check_user_query = "SELECT * FROM user WHERE email='$email' AND psd='$password'";
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