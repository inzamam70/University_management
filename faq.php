


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


    <div class="faq-body">
    <div class="accordion">
    <div class="image-box">
      <img src="images/mainImg.png" alt="">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloribus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by JavaScript?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">From where you learned HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, necessitatibus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Which code editor do you use?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, labore.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Software you use for video editing?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, repudiandae!</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>
    </div>



    <!-- Footer Start -->
    <?php 
        include_once 'footer.php';
      ?>
    <!-- Footer End -->



    <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>