<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Duthon 3.O</title>
</head>
<body style="color: blue; background-color: #102390cf">
   <div class="container" style="width: 1000px; background-color: white;margin-top: 100px;border-style: groove;border-radius: 20px; border-width: 3px;border-color: yellow">
    <div class="row">
        <div class="col">
            <img src="./Img/loginbg.jpg" style="width: 550px; margin-left: -12px;border-radius: 20px;">
        </div>
        <div class="col" style="padding-top: 10%;">
        <form method="post" action="login.php">

                <div class="mb-3">
                  
                  <h2>Sign In</h2>
                   
                  </div>
                  <br><br>
                <div class="mb-3">
                  
                  <input type="text" class="form-control"  placeholder="Email" name="email" >
                 
                </div>
                <div class="mb-3">
                  
                  <input type="password" class="form-control"  placeholder="Passowrd" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary ">Sign in</button>
                <center><p>Don't have an account?<a href="signup.html" style="text-decoration: none;">Sign up</a></p></center>
              </form>
        </div>
    </div>
   </div>





</body>
</html>