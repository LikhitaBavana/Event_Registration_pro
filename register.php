<!DOCTYPE html>
<html>
    <head>
        <title>registration page</title>
		
		<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
		*{
			padding:0;
			margin:0;
			box-sizing:border-box;
		}
		body{
			background:#000000;
			font-family:'Poppins',sans-serif;
		}
		main{
			padding:5% 5% 5% 18%;
		}
		section{
			position:relative;
			width:80%;
			height:80vh;
			display:flex; 
			background:#232f34;
			border-radius:30px;
			box-shadow:0px 0px 10px 10px #fff;
			cursor:pointer;
		}
		section:hover{
			width:82%;
			height:82vh;
			margin-left:-1%;
			margin-top:-1%;
		}
		section .reg_page{
			position:relative;
			width:50%;
			height:100%;
		}
		section .reg_page:before{
			content:'';
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background: linear-gradient(225deg,#e91e63,#03a9f4);
			z-index:1;
			mix-blend-mode: screen;
			border-radius:30px 0px 0px 30px;
		}
		section .reg_page img{
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
			object-fit:cover; 
			border-radius:30px 0px 0px 30px;
			position:relative;
		}
		section .reg_form{
			display:flex;
			justify-content: center;
			align-items: center;
			width:50%;
			height:100%;
		}
		section .reg_form .frm_bx{
			width:50%;
		}
		section .reg_form .frm_bx h2{
			color: #607d8b;
			font-weight: 600;
			font-size:1.2em;
			text-transform: uppercase;
			margin-bottom:20px;
			border-bottom:4px solid #ff4584;
			display: inline-block;
			letter-spacing:1px;
		}
		section .reg_form .frm_bx .inptbx span{
			margin-bottom: 5px;
			font-size:16px;
			display: inline-block;
			color:#fff;
			font-weight:300;
			letter-spacing:1px;
		}
		section .reg_form .frm_bx .inptbx input{
			width:90%;
			margin-left:5%;
			padding:10px 20px;
			outline: none;
			font-weight:400;
			border:1px solid #607d8b;
			font-size:12px;
			letter-spacing:1px;
			color:#607d8b;
			background:transparent;
			border-radius: 30px;
		}
		section .reg_form .frm_bx .inptbx input:hover{
			width:100%;
			margin-left:0;
			font-size:13px;
			background:#4a6572;
			color:#FFFFFF;
		}
		section .reg_form .frm_bx .inpt_bx input
		{
			width:50%;
			margin-left:25%;
			margin-top:7%;
			padding:10px 20px;
			outline: none;
			font-size:12px;
			background:#ff4898;
			color:#FFFFFF;
			outline:none;
			border:none;
			font-weight:500;
			letter-spacing:1px;
			cursor:pointer;
			border-radius: 30px;
		}
		section .reg_form .frm_bx .inpt_bx input:hover{
			background:#c40e5e;
			width:60%;
			margin-left:20%;
			font-size:14px;
		}
		@media screen and (max-width:600px)
		{
			.register{
                 display:block;
			}
		}
		</style>
		<!--background: rgb(174,237,238);
			background: radial-gradient(circle, rgba(174,237,238,1) 0%, rgba(106,170,245,1) 100%);-->
    </head>
    <body>
	<main>
		
		<section class="register">
			<div class="reg_page">
				<img class="img" src="https://media.gettyimages.com/photos/concentrated-african-american-programmer-reading-computer-codes-on-picture-id1000820778?k=6&m=1000820778&s=612x612&w=0&h=WW9rL_1iTbSv4UEsI-pbFnLgsG2EzqwXsOQbFa8-9hk=">
			</div>
			<div class="reg_form">
			
				<div class="frm_bx">
					<form action="data.php" method="POST">
						<h2>REGISTRATION FORM</h2><br>
						<div class="inptbx">
							<span>First name:</span>
							<input type="text" id="fname" name="first_name" placeholder="enter your first name" required><br><br>
						</div>
						<div class="inptbx">
							<span>Last name:</span>
							<input type="text"  id="lname" name="last_name" placeholder="enter your last name" required><br><br>
						</div>
						<div class="inptbx">
							<span>Roll number:</span>
							<input type="text" id="rno" name="rno" placeholder="enter your roll number" required><br><br>
						</div>
						<div class="inptbx">
							<span>Mail:</span>
							<input type="text" id="mail" name="email" placeholder="enter your email" required><br><br>
						</div>
						<div class="inptbx">
							<span>Password:</span>
							<input type="password" id="psd" name="password" placeholder="enter your password" required><br><br>
						</div>
						<div class="inpt_bx">
							<input onclick="validation()" type="submit" name="register" placeholder="REGISTER"><br><br>
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>
        
    </body>
</html>