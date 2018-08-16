<style>

#topnav{
	overflow: hidden;				/*keeps navbar text from overlfowing*/
	background-color: #105889;
  	width: 100%;
	display: block;
    margin-left: auto;
	margin-right: auto;
}

#topnav a{
	float: left;
	color: #f5f5f5;
	text-align: center;
	padding: 14px 25px;		/* first num is height, second num is width*/
	font-family: "Aller Display", Helvetica, sans-serif;
	text-decoration: none;
	font-size: 15px;
}

#topnav a:hover{
	background-color: #f5f5f5;
	color: #105889;
}
#container {
	padding: 0% .8%;		 /*creates header block*/
	background-color: #f5f5f5;
	width: 70%;
	display: block;
    margin-left: auto;
    margin-right: auto;
}
#header h1{
	line-height: 90px;
	background: url("title background.jpg");
	background-repeat: x-repeat;
	text-align: center;
	font-family: "Times New Roman", Helvetica, sans-serif;	
	font-size: 100px;
	-webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

</style>


<div id="topnav">
  <a href="index.php">Home</a>
  <a href="index.php?content=showpost">Projects</a>
  <a href="index.php?content=updates">Updates</a>
   <a href="index.php?content=resources">Resources</a>
	
	<div style="float:right;">
	<?php if(isset($_SESSION['valid_gwc_user'])): ?>
	<a href="index.php?content=post">Post</a>
	<a href="index.php?content=logout">Logout</a>		
	<?php else: ?>
	<a href="index.php?content=login">Login</a>	  
	<?php endif; ?>
	 </div> 
	 
  
</div>

<div id="header">
	<div id="container">
		<h1>Girls Who Code</h1>
		<h1>Klein Oak</h1>
	</div>
</div>