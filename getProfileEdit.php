<?php
require('dbscript.php');
$username='Pioboy';
session_start();
if(isset($_POST['nameEdit'])){
    $nameEdit=$_POST['nameEdit'];
    $updateName="UPDATE user SET full_name='$nameEdit' where username='$username'";
    mysqli_query($con,$updateName);
    echo $nameEdit;
}
if(isset($_POST['birthEdit'])){
    $birthEdit=$_POST['birthEdit'];
    $updateBirth="UPDATE user SET tanggal='$birthEdit' where username='$username'";
    mysqli_query($con,$updateBirth);
}
if(isset($_POST['birthEdit'])){
    $genderEdit=$_POST['birthEdit'];
    $updateGender="UPDATE user SET gender='$genderEdit' where username='$username'";
    mysqli_query($con,$updateGender);
}
if(isset($_POST['emailEdit'])){
    $emailEdit=$_POST['emailEdit'];
    $updateEmail="UPDATE user SET email='$emailEdit' where username='$username'";
    mysqli_query($con,$updateEmail);
}
if(isset($_POST['HPEdit'])){
    $HPEdit=$_POST['HPEdit'];
    $updateHP="UPDATE user SET HP='$HPEdit' where username='$username'";
    mysqli_query($con,$updateHP);
}
if(isset($_POST['picture'])){
    if($_SESSION['pict']!="assets/images/profile-default.png"){
        unlink($_SESSION['pict']);
    }
    $uploaddir="images-profile/";
    $uploadfile=$uploaddir.$_FILES['pictEdit']['name'];
    move_uploaded_file($_FILES['pictEdit']['tmp_name'],$uploadfile);
    $updatePict="UPDATE user SET pict='$uploadfile' where username='$username'";
    mysqli_query($con,$updatePict);
}
if(isset($_POST['passEdit'])){
    $passEdit=$_POST['passEdit'];
    $updatePass="UPDATE user SET passw='$passEdit' where username='$username'";
    mysqli_query($con,$updatePass);
}

header('Location:userDashboard.php');
?>