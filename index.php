<?php 
include "header.php";
include "connect.php";
?>
    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel_slide">
            <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Cards for Review -->
    <div class="container mt-5 mb-5">
        <div class="text-center">
            <h2>Checkout The Reviews of Famous Restaurants</h2>
            <hr class="solid mb-2">
        </div>
            <div class="card-deck mt-5">
                <div class="card">
                    <img class="card-img-top" src="images/res1.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Jaguar Restaurant</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="card-text"><small class="text-muted">⭐⭐⭐⭐⭐</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 5 hours ago</small></p>
                    <button class="btn btn-success my-2 my-sm-0 mr-2" type="submit ">Book Now</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/res2.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Italy Restaurant</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="card-text"><small class="text-muted">⭐⭐⭐⭐⭐</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button class="btn btn-success my-2 my-sm-0 mr-2" type="submit ">Book Now</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/res3.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Mexico Food Restaurant</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="card-text"><small class="text-muted">⭐⭐⭐⭐⭐</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button class="btn btn-success my-2 my-sm-0 mr-2" type="submit ">Book Now</button>
                    </div>
                </div>
            </div>
    </div>

    <!-- Card for direct reservation -->
    <div class="container mb-5">
        <div class="card text-white text-center">
            <img class="card-img table" src="images/5.jpg" style="" height="300px" alt="Card image">
            <div class="card-img-overlay">
                <h2 class="card-title mt-5">Want to book direct a table?</h2>
                <p class="card-text">Click the button below to get started now.</p>
                <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Book Now</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <div class="container p-4">
    <section class="pt-4">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" placeholder="Email Address"/>
            </div>
          </div>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success mb-4">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </section>

    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>

    <section class="mb-5 mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
          <h5 class="text-uppercase">QuickLinks</h5>

          <ul class="list-unstyled mb-0 text-left">
            <li>
              <a href="#!" class="text-white">Home</a>
            </li>
            <li>
              <a href="#!" class="text-white">About</a>
            </li>
            <li>
              <a href="#!" class="text-white">Restaurants</a>
            </li>
            <li>
              <a href="#!" class="text-white">Blog</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left" >
          <h5 class="text-uppercase">Information</h5>

          <ul class="list-unstyled mb-0 text-left">
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms Conditions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cookies Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Ratings Policy</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
          <h5 class="text-uppercase">Restaurants</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Mexican</a>
            </li>
            <li>
              <a href="#!" class="text-white">Italy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Russian</a>
            </li>
            <li>
              <a href="#!" class="text-white">Pakistan</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
          <h5 class="text-uppercase">Contact</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">RevFood for Business</a>
            </li>
            <li>
              <a href="#!" class="text-white">Business Support</a>
            </li>
            <li>
              <a href="#!" class="text-white">Business Success Stories</a>
            </li>
            <li>
              <a href="#!" class="text-white">Table Management</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 bg-success">
    © 2023 Copyrights
    <a class="text-white"> RevFood</a> - All Rights Reserved
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
