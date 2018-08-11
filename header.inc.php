<style>

#topnav{
	overflow: hidden;				/*keeps navbar text from overlfowing*/
	background-color: #4e6182;
  	width: 66.4%;
	display: block;
    margin-left: auto;
	margin-right: auto;
}

#topnav a{
	float: left;
	color: #f5f5f5;
	text-align: center;
	padding: 14px 25px;		/* first num is height, second num is width*/
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	text-decoration: none;
	font-size: 17px;
}

#topnav a:hover{
	background-color: #dcdee8;
	color: #4e6182;
}

</style>
<div class="header">
<h1>Klein Oak </h1>
<h2>Girls Who Code</h2>
</div>

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