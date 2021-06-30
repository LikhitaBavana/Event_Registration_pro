<!DOCTYPE html>
<html>
<head>
	<title> Try</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body{
			background-image:url("https://st2.depositphotos.com/5565776/i/600/depositphotos_81420760-stock-photo-frosted-glass-texture-as-background.jpg");
			background-repeat:no-repeat;
			background-size:100%;
		}
       .course{
           display:flex;
           margin-top:50px;
		   align-items:center;
		   justify-content:center;
       }
       h2{
           text-align:center;
           font-size:35px;
       }
       .info{
           margin:150px;
           text-align:center;
           
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
	   @media screen and (max-width:600px)
       {
          .course{
              width:100%;
              height:50%;
          }
           
           h2{
           text-align:center;
           font-size:15px;
           }
       }
	  
	   
	   
    </style>
</head>
<body>

<h2>Watch the video completely to access the certificate</h2>
		<div class="course">
			
			<div id='video'></div>
			 <div class="info">
                <form action="certificate.php" method="POST" style="display:none" id="but">
                
                <input  type="text" name="fname" placeholder="enter your full name" required><br><br>
                
			 	<button  name="btn" >certificate</button>
                </form>
			 </div>
		</div>
        



<script src="https://www.youtube.com/iframe_api"></script>
<script>
	var player, playing = false;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('video', {
            height: '460',
            width: '840',
            videoId: 'pQN-pnXPaVg',
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }
    function onPlayerStateChange(event) {
      if (event.data == YT.PlayerState.ENDED) {
         x=document.getElementById('but');
			if (x.style.display == "none") {
			    x.style.display = "block";
			} 
        }
   }
	
	
</script>


</body>
</html>
