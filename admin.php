
<?php
session_start();

@include 'config.php';



if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>University Management</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php include_once 'admin-nav.php'?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                  <div class="">
                     
                     <div class="user-info">
                     <h4> <span><?php echo $_SESSION['admin_name'] ?></span></h4>
                     </div>
                  </div>

                <div class="user">
                    <img src="images/profile.png" alt="">
                </div>

            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <?php 
                     $sql = "SELECT * FROM user_form";
                        $result = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($result);
                    ?>
                    <div>
                        <div class="numbers"><?=$count?></div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                    <i class="fa-solid fa-users"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Wishes</div>
                    </div>

                    <div class="iconBx">
                    <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                <?php 
                        $sql = "SELECT * FROM contact";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                        ?>
                <a href="contacts.php" style="text-decoration:none;">
                    <div class="card">
                        <div>
                            <div class="numbers"><?=$count?></div>
                            <div class="cardName">Comments</div>
                        </div>

                        <div class="iconBx">
                        <i class="fa-solid fa-comments"></i>
                        </div>
                    </div>
                </a>
        

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Wishes</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>

                    <table>
                        <?php 
                        include_once 'config.php';
                        $sql = "SELECT * FROM user_form";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                        
                        ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/profile.png" alt=""></div>
                            </td>
                            <td>
                                <h4><?= $row['name']?> <br> <span><?= $row['email']?></span></h4>
                            </td>
                            <td>
                                <h4><?= $row['user_type']?></h4>
                            </td>
                        </tr>
                        <?php } } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="css/admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>