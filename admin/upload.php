<?php 
session_start();
    include "sidebar.php";
    include "../connect.php";
?>
<div class="container p-5">
<form method="POST" enctype="multipart/form-data"> 
    <h1 class="text-dark">Upload A Restaurant</h1>
              <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Restaurant Name" required="">
                    </div>
                    <div class="form-group">
                        <label >Per Table Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Table Price" required="">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlFile1">Choose Image for Restaurant</label>
                    <input type="file" name="pics" class="form-control-file" id="exampleFormControlFile1" >
                  </div> 
                    <a  class="btn btn-warning" href="viewupload.php">Go Back</a>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>  
                    <?php 
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $file = $_FILES['pics'];
                        $filename = $file['name'];
                        $filepath = $file['tmp_name'];
                        $fileerror = $file['error'];

                            if ($fileerror == 0) {
                                $destfile = 'uploads/'.$filename;
                                move_uploaded_file($filepath,$destfile);

                                $qry = "INSERT INTO resupload VALUES (Null,'$name','$price','$destfile');";

                            $result=$conn->query($qry);
                                 if ($result) {
                               echo "<div class='mt-2 alert alert-success text-center font-weight-bold' role='alert' mt-3>
                                Thanks!Your Restaurant has been Added!</div>";
                                }
                                  else{
                                       echo "<div class='mt-2 alert alert-danger text-center font-weight-bold' role='alert' mt-3>
                                        Your Restaurant is not added!
                                        </div>" ;      
                                     }

                    }


                    }



                     ?>         
</div>
   <?php 
    include "script.php";
    ?>