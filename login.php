
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Admission</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
    





    <!-- Navbar Start -->
    <?php 
      include_once 'nav.php';
    ?>
    <!-- Navbar End -->

    <section class="book" id="book">
      <div class="container">

        <div class="main-text">
          <h1><span>L</span>og In</h1>
        </div>
        
        <div class="row">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/student.gif" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0 " style="margin-top:200px;">
            <form action="#" method="post">
            <label for="email" style="font-size:20px;font-weight:600;padding:5px;">Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required><br>
                <label for="password" style="font-size:20px;font-weight:600;padding:5px;">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required><br>
              <div class="forget">
                    <label for=""><input type="checkbox">Remember me <a href="">Forget Password</a></label>

                </div>
              <input type="submit" value="Log In" name="submit" class="submit" required>

             
                <div class="register">
                    <p>Don't have a account <a href="registration.php">Register Here</a></p>
                </div>
            </form>
      
          </div>

        </div>
      </div>
    </section>


    <!-- Footer Start -->
    <?php 
        include_once 'footer.php';
      ?>
    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>