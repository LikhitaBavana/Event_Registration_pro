<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
		<meta char="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<style>
			@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
			body{
				font-family:'Poppins', sans-serif; 
				height:770px;
			}
			img{
				width:100%;
			}
			.login {
				height: 100%;
				width: 100%;
				background: rgb(187,0,95);
				background: linear-gradient(130deg, rgba(187,0,95,1) 13%, rgba(194,5,187,1) 100%);
				position: relative;
				padding:100px 100px;
			}
			section{
				height:100%;
				width:100%;
			}
			.login_box {
				width: 1040px;
				height: 540px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				background: #fff;
				border-radius: 20px;
				box-shadow: 1px 4px 22px -8px #0004;
				display: flex;
				overflow: hidden;
			}
			.login_box .left{
				width: 100%;
				height: 100%;
				padding: 25px 25px;
			}
			.login_box .right{
				width: 100%;
				height: 100%  
			}
			
			.left .top_link a {
				color: #452A5A;
				font-weight: 400;
			}
			.left .top_link
			{
				height: 20px
			}
			.left .contact{
				display: flex;
				align-items: center;
				justify-content: center;
				align-self: center;
				height: 100%;
				width: 73%;
				margin: 18px auto;
			}
			.left input:hover{
				background: rgb(203,199,193);
				border-radius:30px;
				padding:5% 17%;
			}
			
			.left h2{
				text-align: center;
				margin-bottom: 40px;
				font-size:40px;
			}
			.left input {
				border: none;
				width: 80%;
				margin: 15px 0px;
				border-bottom: 1px solid #4f30677d;
				padding: 7px 39px;
				width: 100%;
				overflow: hidden;
				background: transparent;
				font-weight: 600;
				font-size: 14px;
			}
			.left input:hover{
				font-family:'vertica',sans-serif;
				border:none;
			}
			.left{
				background: linear-gradient(-45deg, #dcd7e0, #fff);
			}
			.right {
				background: linear-gradient(212.38deg, rgba(242, 57, 127, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%),url(https://static.seattletimes.com/wp-content/uploads/2019/01/web-typing-ergonomics-1020x680.jpg);
				color: #fff;
				position: relative;
			}
				
			.right .right-text{
				height: 100%;
				position: relative;
				transform: translate(0%, 45%);
			}
			.right-text h4{
				display: block;
				width: 100%;
				text-align:center;
				font-size: 40px;
				font-weight: 500;
			}
			.right-text h5{
				display: block;
				width: 100%;
				padding-top:10%;
				text-align: center;
				font-size: 19px;
				font-weight: 400;
			}
			.reg a{
				color:white;
				padding-top:8%;
				text-decoration:none;
			}
			.reg a:hover{
				font-size:24px;
				font-weight:bold;
			}
			button {
				border: none;
				padding: 15px 70px;
				border-radius: 15px;
				display: block;
				margin: auto;
				margin-top: 80px;
				background: #7a4d9d;
				color: #fff;
				font-weight: bold;
				box-shadow: 0px 11px 15px -1px rgba(88,54,114,1);
			}
			button:hover{
				font-size:20px;
			}
            @media screen and (max-width:600px)
			{
				.login .login_box
				{
					display:block;
				}
			}
		
		</style>
	
    </head>
    <body>
	<section class="login">
		<div class="login_box">
		    <div class="left">
				<div class="contact">
					<form action="data.php" method="POST">
						<h2>Login Form</h2><br><br>
						<input type="text" id="mail" name="email" placeholder="enter your email" required><br><br>
						<input type="password" id="psd" name="password" placeholder="enter your password" required><br><br>
						<button onclick="values()" type="submit" name="login">LOGIN</button>
					</form>
				</div>
			</div>
            <div class="right">
				<div class="right-text">
					<h4>Have'nt you <br>Registered Yet</h4>
					<h5 class="reg"><span></span><a href="n2.html">Register Now</a></h5>
				</div>
			</div>
        </div>
	</section>
       
    </body>
</html>