
<DOCTYPE html>
<html>
   <head>
      <title>certificate</title>
      <style>
		*{
			padding:00;
			margin:00;
			box-sizing:border-box;
		}
		body{
			background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIh-_5J6TVYpsswg0HFdEmZNykQpbk_izNxMNm5cf-SI4dv6lkfHibNJtSj2AlntixEeI&usqp=CAU");
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			height:1000px;
			width:100%;
		}
		.template{
			align-items:center;
			margin-left:18%;
			position:relative;
	
		}
        h3{
			position:absolute;
			margin-top:-470px;
			margin-left:280px;
			text-align:center;
			justify-content:center;
			font-size:40px;
			font-family:Brush Script MT, Brush Script Std, cursive;
        }
        .name{
			position:absolute;
			margin-top:-400px;
			margin-left:370px;
			justify-content:center;
			text-align:center;
			font-size:35px;
			font-family:American Typewriter, serif;
			font-weight: bold;
        }
		.heading{
			position:absolute;
			margin-top:-370px;
			margin-left:240px;
			justify-content:center;
			text-align:center;
			font-size:40px;
			font-family:Brush Script MT, Brush Script Std, cursive;
        }
		input{
           width:450px;
           height:40px;
           border-radius:10px;
		   background-color:transparent;
		   box-shadow:4px 4px #0004;
		   padding-left:15px;
       }
       button{
           width:80px;
           height:40px;
           border-radius:10px;
       }
       button:hover{
           background-color:darkblue;
           color:white;
	   }
      </style>


   </head>
   <body>
	<div class="template">
		<img src="https://i.pinimg.com/originals/f2/b0/8c/f2b08cc2a4da932e542734ae797563d1.png">
		<h3>This Certificate is presented to <br> </h3>
		<div class="name">
		<?php 
		  include "connection.php";
		  if(isset($_POST['btn']))
		  {
		  $fname=$_POST['fname'];
		  echo $fname;
		  }
		?>
		</div>
		<h3 class="heading"><br>for the completion of Web Development<br> course work</h3>
		<br>
		<br>
		<br>
		<div>
		<form action="final.php" method="POST">
		    <input type="text" name="fname" placeholder="enter your name" required><br><br>
		    <input type="text" name="email" placeholder="enter your email" required><br><br>
            <input type="text" name="certification" placeholder="course completed yes or no" required><br><br>
			<button name="certified">Done</button>
		</form>
		</div>
			
	</div>		
   </body>
</html>
