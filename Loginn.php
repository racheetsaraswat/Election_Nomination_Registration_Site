<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style type="text/css">
        .carousel-item img
        {
            align-items: center;
            width: 100%;
            height: 300px;
        }
    </style>
    
    <title>MyPortal</title>
  </head>
  <body style="background: linear-gradient(to left,rgba(58, 101, 4, 0.878),rgb(245, 245, 245));">
  <section class="h-100 gradient-form" style="background: linear-gradient(to left,rgba(58, 101, 4, 0.878),rgb(245, 245, 245));">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="./logo/emoji.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nominee Login</h4>
                </div>

                <form method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                  <input type='text' name='l_ID' value="Enter Unique ID" class='form-control'>
                    <label class="form-label" for="form2Example11">Aadhar</label>
                  </div>

                  <div class="form-outline mb-4">
                  <input type='date' name='l_pwd' class='form-control'>
                    <label class="form-label" for="form2Example22">date of Birth</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name='Tlog' value='Login'>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" data-aos="fade-up" data-aos-duration="3000">
              <div class="text-dark px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a Department</h4>
                <p class="small mb-0">Welcome to the Election Nominee Login Portal for India Election 2024!</p>
                <p class="small mb-0">We are thrilled to introduce this cutting-edge platform, designed to streamline and empower the electoral process. As a nominee, this portal offers you unprecedented access to vital tools and information, ensuring a seamless campaign journey.</p>
                <p class="small mb-0">Take advantage of secure login credentials to access exclusive resources, including real-time updates on voter demographics, key issues, and district-wise data. With our user-friendly interface, managing campaign activities, coordinating with supporters, and communicating with constituents has never been easier.</p>
                <p class="small mb-0">This portal represents our commitment to transparent and efficient democracy. Together, let's shape the future of India through a fair and informed electoral process. Good luck!</p>
                <h5><a href="./MainPage.php">Back to Home <--</a></h5>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
extract($_POST);
if(isset($Tlog))
{
  include_once("./Tcheck.php"); 
}
?>
<?php include_once("./foot.php"); ?>
