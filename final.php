<?php
	include "connection.php";
	if(isset($_POST['certified']))
	{
		session_start();
	    $fname = $_POST['fname'];
	    $email = $_POST['email'];
        $certification = $_POST['certification'];
	    $sql = "INSERT INTO `certified`(`fname`,`email`,`certification`) VALUES ('$fname','$email','$certification')";
        $query = mysqli_query($conn,$sql);
        if(isset($query))
	    {			
			header('location:index.html');
	    }
	    else
	    {
			echo '<script>alert("Fail");</script>';
		  	header('location:courses.php');
	    }
	}
?>