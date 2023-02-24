<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mydb');

// check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$address= mysqli_real_escape_string($db, $_POST['address']);

// attempt insert query execution
$sql = "INSERT INTO users  VALUES ('$name', '$email','$address')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

// close connection
mysqli_close($db);
?>