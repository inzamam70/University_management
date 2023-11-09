
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
                  <?php 
                   include_once 'config.php';
                   $sql = "SELECT * FROM nav";
                   $result = mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_assoc($result)){
                    ?>
                  <li><a class="dropdown-item" href="university.php?nav_id=<?=$row['id']?>"><?= $row['name']?></a></li>
                  <?php } ?>
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
                <a class="nav-link" href="compare.php">Compare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LogIn</a>
              </li>
              
             
            </ul>

     

          <form class="d-flex" method="get" action="search.php">
            <input class="form-control me-2" type="text" placeholder="Search" name="search">
            <button class="btn btn-primary" type="submit" name="submit">Search</button>
           </form>

            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <?php 
                include_once 'config.php';
                $sql = "SELECT * FROM wish";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
                
                ?>
                <a class="nav-link" href="wish.php"><i class="fa-solid fa-heart"></i><span><sup><?=$count?></sup></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa-solid fa-bell"></i></a>
              </li>
         
              <li class="nav-item">
               
                <a class="nav-link" href="logout.php"><i class="fa-solid fa-power-off"></i> </a>
                
              </li>
            </ul>

          </div>
        </div>
      </nav>