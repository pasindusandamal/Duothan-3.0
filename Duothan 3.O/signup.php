<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Duthon 3.O</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

       <div class="col">
        <h2 style=" text-align: center;">Sign up</h2><br><br>
        <form action="register.php" method="post">
          <div class="mb-3">
           
            <input type="text" class="form-control"placeholder="Pharmacy Name" name="name">
      
          </div>
          <div class="mb-3">
        
            <input type="email" class="form-control"  placeholder="Email" name="email">
          </div>
          <div class="mb-3">
        
            <input type="text" class="form-control"  placeholder="Address" name="address">
          </div>
          <div class="mb-3">
        
            <input type="text" class="form-control"  placeholder="Phone Number" name="number">
          </div>
          <div class="mb-3">
        
            <input type="text" class="form-control"  placeholder="Pharmacy Licine Number" name="lnumber">
          </div>
          <div class="mb-3">
        
            <input type="password" class="form-control"  placeholder="Password" name="password">
          </div>

          <div class="mb-3">
        
            <input type="password" class="form-control" " placeholder="Confirm Password" name="cpassword">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2">
           
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </div>
        </form>
       </div>
          
          
        </div>
      </div>
    </div>
  </body>
</html>
