



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Admission</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/compare.css">

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
   
    <section class="about" id="about">
        <div class="container">

            <div class="main-txt">
              <h1>R<span>eviews</span></h1>
            </div>
            <div class="review-box">
                <?php 
                include_once 'config.php';
                 $sql = "SELECT * FROM dept_review";
                 $result = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($result)){
                ?>
                    <div class="card">
                        <img
                            class="card__background"
                            src="<?= $row['image']?>"
                            alt=""
                            
                        />
                        <div class="card__content | flow">
                            <div class="card__content--container | flow">
                            <h2 class="card__title"><?= $row['title']?></h2>
                            <p class="card__description">
                                <?= $row['full_title']?>
                            </p>
                            </div>
                            <a href="sub_review_details.php?id=<?= $row['id']?>
                            " class="card__button">See More</a>
                        </div>
            </div>
            <?php } ?>
             
            </div>
        </div>

    </section> 


  





    <?php 
        include_once 'footer.php';
      ?>
 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


