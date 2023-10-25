
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
          <a href="index.php"><img src="./images/graduation-cap.gif" alt="" style="width:50px;height:50px;text-align:center;padding:1px;"></a>
          <a class="navbar-brand" href="index.html" id="logo"><span>U</span>niversity</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Universites
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="public.php">Public University</a></li>
                  <li><a class="dropdown-item" href="privet.php">Privet University</a></li>
                  <li><a class="dropdown-item" href="engineering.php">Engineering</a></li>
                  <li><a class="dropdown-item" href="medical.php">Medical</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.php">Faqs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LogIn</a>
              </li>
              
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>

            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa-solid fa-heart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa-solid fa-bell"></i></a>
              </li>
              <?php 
               include_once 'config.php';
                $sql = "SELECT * FROM contact";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
              ?>
              <li class="nav-item">
                <a class="nav-link" href="show-sms.php"><i class="fa-solid fa-envelope"></i><span><sup><?=$count?></sup></span></a>
              </li>
              <li class="nav-item">
               
                <a class="nav-link" href="logout.php"><i class="fa-solid fa-power-off"></i> </a>
                
              </li>
            </ul>

          </div>
        </div>
      </nav>