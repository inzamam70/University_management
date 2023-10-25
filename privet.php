




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
   
    <div class="item-body">
    <div class="main-txt" style="padding:10px;margin-bottom:20px">
          <h1><span>Privet</span>University</h1>
        </div>

        <div class="item">
            <div class="item-card">
                <div class="item-imgbx">
                    <img src="./images/uits.png" alt="">
                </div>
                <div class="item-contentbx">
                    <h2>UITS</h2>
                    <p>University of Information Technology and Sciences</p>
                    <div class="item-btn">
                        <a href="view-details.php" class="btn">View Details</a>
                    </div>
                </div>
            </div>

            <div class="item-card">
                <div class="item-imgbx">
                    <img src="./images/nsu.png" alt="">
                </div>
                <div class="item-contentbx">
                    <h2>AIUB</h2>
                    <p>American International University-Bangladesh</p>
                    <div class="item-btn">
                        <a href="view-details.php" class="btn">View Details</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
 





    <!-- Footer Start -->
    <?php 
        include_once 'footer.php';
      ?>
    <!-- Footer End -->




    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>