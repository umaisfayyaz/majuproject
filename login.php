<?php 
session_start();
include "header.php";
include "connect.php";
?>
<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img src="https://images.unsplash.com/photo-1676277791608-ac54ab84af5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" style="width:450px; height:550px;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Log In here!</h1>
                    <hr class="mb-4">
                  </div>
                  <form class="user" method="POST" action="code1.php">
                    <div class="form-group">
                      <input type="text" name="fname" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-success btn-user btn-block">
                      Login
                    </button>   
                    <a type="submit" name="login" class="btn btn-success btn-user btn-block" href="signup.php">
                      Signup</a>  
                      <?php 
                              if (isset($_SESSION['status']) && $_SESSION['status']!="") {
                                  echo '<h4 class="bg-danger text-white mt-2">'.$_SESSION['status'].'</h4>';
                                  unset($_SESSION['status']);
                              }
                        ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>