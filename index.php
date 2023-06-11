<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/index.css">  
  </head>
  <body>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                  <h1>PROFILE</h1>
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h1>Welcome <?php echo $user["name"]; ?></h1>
                                                                <h2> Hello <?php echo $user["username"]; ?>😉</h2>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                            <button class="btn" onclick="logout.php"><a href="logout.php">Logout</a></button>
                                                            
                                                        </div>
                                                  
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">USER DETAILS</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">NAME</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $user["name"];  ?>😎</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">CONTACT</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $user["contact"]; ?>😍</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">DATE OF BIRTH</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $user["dob"]; ?>🤩</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">AGE</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $user["age"]; ?>🤫</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">PLACE</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $user["place"]; ?>😁</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                        </div>
<footer id="footer">
<h4>© Copyright 2023 </h4>
<h2> This Webpage Developed By LOGACHANDER 😊(Me)</h2>
<h3>Thank You For Visiting My Webpage</h3>
<h2>CONTACT ME</h2>
<h3>PHONE NUMBER: 9150541812</h3>
<h3>EMAIL:logachan08@gmail.com</h3>
<h3>LINKEDIN:<a href="https://www.linkedin.com/in/logachander-b-606995202/">linkedin</a></h3>
  </footer>
  </body>
</html>