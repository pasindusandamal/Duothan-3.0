<?php

   $connection = mysqli_connect('localhost','root','','mydb');

   if(mysqli_connect_errno()){
      die('Database Connection failed'.mysqli_connect_error());
   }
 
?>


<?php
      $pname = $_POST['pname'];
      $pmobile= $_POST['pmobile'];
      $pwebsite = $_POST['pwebsite'];
      $plicine= $_POST['plicine'];
      $padd = $_POST['padd'];
      $pemail = $_POST['pemail'];
      $phours = $_POST['phours'];
      $oname = $_POST['oname'];
      $omobile = $_POST['omobile'];
      $onic= $_POST['onic'];
      $oadd = $_POST['oadd'];
      $oemail = $_POST['oemail'];
      
      $request = " insert into ph_profile values('{$pname}','{$pmobile}','{$pwebsite}','{$plicine}','{$padd}','{$pemail}','{$phours}','{$oname}','{$omobile}','{$onic}','{$oadd}','{$oemail}')";
      $result=mysqli_query($connection, $request);

      
if($result){
  
   header("location: Signin.php");
}

//header("location: index.html");
?>





   
 



