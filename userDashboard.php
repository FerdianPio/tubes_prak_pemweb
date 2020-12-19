<?php
require('dbscript.php');
$username="Pioboy";
session_start();
$_SESSION['username']=$username;
$queryselect="SELECT * from user WHERE username = '$username'";
    
$result=mysqli_query($con, $queryselect);
if (mysqli_num_rows($result) > 0) {
    $row=mysqli_fetch_assoc($result);
} else {
    echo "no user";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-3 border" style="padding-top: 20px;">
                <img class="w-100" src="assets/images/blank-logo.png">
                <div style="padding-top: 20px;">
                    <a class="row" href="userDashboard.php?target=detail">
                        <h2 style="padding-left: 20px;"><i class="fa fa-user-o"></i></h2>
                        <h4 style="padding-top:8px;padding-left:20px;">   <?php echo $row['username'];?></h4>
                    </a> 
                    <hr style="border:4px solid gray;">
                </div>
                <div>
                    <a class="row" href="userDashboard.php?target=cart">
                        <h2 style="padding-left: 20px;"><i class="fa fa-opencart"></i></h2>
                        <h4 style="padding-top:8px;padding-left:20px;">   Keranjang</h4>
                    </a> 
                    <hr style="border:4px solid gray;">
                </div>
            </div>
            
        
        <div class="row col-9" style="padding-left:100px;">
            <?php
                 if(isset($_GET['target']))
                 {
                   if($_GET['target']=='cart') {require('userCart.php');} else {require('userDetail.php');}
                 } else {require('userDetail.php');}
            ?>

        </div>
        </div>
    </div>
</body>
</html>