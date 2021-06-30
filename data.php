<?php
include 'connection.php';
if(isset($_POST['register']))
{
	session_start();
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
    $rno = $_POST['rno'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $sql = "INSERT INTO `data`(`first_name`,`last_name`,`rno`,`email`,`password`) VALUES ('$first_name','$last_name','$rno','$email','$password')";
    $query = mysqli_query($conn,$sql);
    if(isset($query))
	{
			echo '<script>alert("Success");</script>';
			header('location:login.php');
	}
	else
	{
			echo '<script>alert("Fail");</script>';
			header('location:index.html');
	}
}
if(isset($_POST['login']))
{
    include 'connection.php';
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `data` WHERE `email`='$email'";
    $query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
    if($row['password'] == $password)
	{
        $_SESSION['sno'] = $row['sno'];
		header('location:courses.php');
    }
	else
	{
	    echo '<script>alert("Fail");</script>';
		header('location:index.html');
    }
}


?>

