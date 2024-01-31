<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
  $result = mysqli_query($conn,$sql);
  if($result){
    
    header('location:display.php');

  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<section class="bg-light p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11">
        <div class="card border-light-subtle shadow-sm">
          <div class="row g-0">
            <div class="col-12 col-md-6">
              <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="https://images.unsplash.com/photo-1564889956728-9f3e4ad65498?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fDRrJTIwd2FsbHBhcGVyJTIwY29sb3JmdWwlMjB3YWxscGFwZXJ8ZW58MHx8MHx8fDA%3D" alt="Welcome back you've been missed!">
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
              <div class="col-12 col-lg-11 col-xl-10">
                <div class="card-body p-3 p-md-4 p-xl-5">
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-5">
                        <h4 class="text-center">Sign Up</h4>
                      </div>
                    </div>
                  </div>

                 









                  <form method="post">
                    <div class="row gy-3 overflow-hidden">
                      <div class="col-12">
                        <div class="form-floating mb-3">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter your Email" autocomplete="off">
                          <label class="form-label">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Enter your Email" autocomplete="off">
                          <label class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input name="mobile" id="mobile" type="text" class="form-control" placeholder="Enter your Email" autocomplete="off">
                          <label class="form-label">Mobile</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-3">
                        <input name="password" type="password" id="password" class="form-control" placeholder="Enter your Password">
                          <label for="password" class="form-label">Password</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button name="submit" class="btn btn-dark btn-lg" type="submit">Sign Up Now</button>
                        </div>
                      </div>
                    </div>
                  </form>












                  
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                        <a href="login.php" class="link-secondary text-decoration-none">Already have an account ??</a>
                        <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>
</html>