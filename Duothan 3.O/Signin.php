<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Duthon 3.O</title>
</head>
<body style="color: blue; background-color: white">
   <div class="container" style="width: 800px; background-color: white;margin-top: 150px;border-style: groove;border-radius: 20px; border-width: 3px;border-color: yellow">
    <div class="row">
        <div class="col">
            <img src="./Img/loginbg.jpg" style="width: 700px; margin-left: -12px;border-radius: 20px;">
        </div>
        <div class="col" style="margin-left:-300px">
        <form method="post" action="login.php">

                <div class="mb-3">
                  
                  <h2 style="text-align:center;margin-top:40px;">Sign In</h2>
                   
                  </div>
                  <br><br>
                <div class="mb-3">
                  
                  <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="name" >
                 
                </div>
                <div class="mb-3">
                  
                  <input type="password" class="form-control"  placeholder="Passowrd" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary " style="width:100%;">Sign in</button><br><br>
                <center><p>Don't have an account?<a href="signup.php" style="text-decoration: none;">Sign Up</a></p></center>
              </form>
        </div>
    </div>
   </div>





</body>
</html>