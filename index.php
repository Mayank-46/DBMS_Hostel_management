<!DOCTYPE html>
<html lang="en">
<head>
  <title>Group_18 project</title>
  <Style>
  	*{
  		margin:0;
  		padding:0;
  		font-family:'poppins',sans-serif;
  		/*background-color: rgba(10,123,255,40);*/
  	}
  	.slideshow{
  		width: 85%;
  		height: 580px;
  		margin: auto;
  		margin-top: 1.5%;
  	}
  	#slideimage{
  		width: 100%;
  		height: 550px;
  		margin-top: 1.5%;
  		border: 7px solid  #555 ;	
  		border-radius: 5px;
  	}
  	.slideshow h1{
  		background-color: black;
  		color: white;
  		text-align: center;
  		border-radius: 5px;
  	}


  	.slideshow .btn{
  		position: absolute;
  		left:92%;
  		top:90%;
  		transform: translate(-50%,-50%);
  		background-color:#ADD8E6;
  		opacity: 0.7;
  		font-size:18px;
  		padding:12px 30px;
  		border:none;
  		color: green;
  		cursor: pointer;
  		border-radius: 40px;
  		letter-spacing: 2px;
  		text-decoration: none;
  		text-transform: uppercase;
  		font-weight: 900;
  		text-align: center;
  		/*background:linear-gradient(90deg,#ffff00,#55e7fc);*/
  	}
  	.slideshow .btn:hover{
  		background-color:black;
  		color:white;
  	}
  </Style>
</head>
<body>
	<script>
		
		var images=[
		"photo1.png",
		"photo2.jpeg",
		"photo3.jpeg",
		"photo4.png",
		"photo5.jpeg"];
		var i=0;
		function slides(){
			document.getElementById("slideimage").src=images[i];
			if(i<(images.length-1))
			{
				i++;
			}
			else
				i=0;
		}

		setInterval(slides,5000)
	</script>
	<div class="slideshow">
		<!-- logo -->
		<h1>Welcome to IIITDM Hostel Portal</h1>


		<hr>
		<img src="photo1.png"  alt="" id="slideimage">
		<button class="btn"><a href="main.php">Continue</a></button>
	</div>
</body>
</html>
