<?php

   $connection = mysqli_connect('localhost','root','','mydb');

   if(mysqli_connect_errno()){
      die('Database Connection failed'.mysqli_connect_error());
   }
 
?>


<?php
      $dname = $_POST['dname'];
      $supplier= $_POST['supplier'];
      $calender = $_POST['calender'];
      $uprice= $_POST['uprice'];
      $manuf = $_POST['manuf'];
      $ndc = $_POST['ndc'];
     
      
      $request = " insert into inventory values('{$dname}','{$supplier}','{$calender}','{$uprice}','{$manuf}','{$ndc}')";
      $result=mysqli_query($connection, $request);

      
if($result){
  
   header("location: Signin.php");
}

//header("location: index.html");
?>





   
 



