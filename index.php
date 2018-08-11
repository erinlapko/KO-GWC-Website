<?php
session_start();
?>

<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Klein Oak Girls Who Code</title>
<meta name="viewport" content="width=device-width, initial-scale=1">		<!--dimensioning-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<style>
/* . is class selector; it styles all elements in the class
	# is an id selector
*/

body {
	background-image: url("website background2.jpg") ;
	background-repeat: 	no-repeat ;
	 background-position: center top; 
}

.header{
	text-align: center;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	background-color: #aaa9d1;
	color: #4e6182;
	font-size: 25px;
	width: 60%;
	display: block;
    margin-left: auto;
    margin-right: auto;
	padding: 1.5% 3.2%;		/* creates header block*/
}

.content{
	font-size: 20px;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	padding: 14px;
	width: 64.6%;
	display: block;
    margin-left: auto;
    margin-right: auto;
	color: #4e6182; 
	background-color: #dcdee8;
}

.sticky{

	position: fixed;
	top: 0;
    left: 50%;
	transform: translate(-50%, -0%);
	
}

#footer {
    clear: both;
    text-align: center;
	padding: 7px;
	
}

.button{
	position:relative;
	left: 20px;
	top: 10px;
	background-color: #4e6182; 
	color: white;
    border: none;
	padding: 8px 15px;
	font-size: 17px;
	cursor: pointer;
	border-radius: 3px;
}
.entry input[type=text], input[type=password] {		
    float: left;
    padding: 10px;
    border: none;
    margin-top: 8px;
    margin-left: 20px;
    font-size: 17px;	
}
textarea {
	float: left;
    padding: 10px;
	margin-top: 8px;
    margin-left: 20px;
    font-size: 17px;
    border-radius: 2px;
	
}

.entry {
	margin: 8px;	

}
</style>
</head>

<body>

	<div id="header">
	<?php include("header.inc.php"); ?>
	</div>
	<br> </br>
	<div id="content">

	<?php								/*allows users to load pages*/
	if (!isset($_REQUEST['content']))
	include("main.inc.php");
	else{
	$content = $_REQUEST['content'];
	$nextpage = $content . ".inc.php";
	include($nextpage);
	}
	?> 
	
	</div>

<div id="footer">
<?php include("footer.inc.php"); ?>
</div>



<script type="text/javascript">
/*window.onscroll = function() {			//onscroll is an event when an element is being scrolled
	scroll()
}; */
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$('#topnav').addClass("sticky");
		}
		else{
			$('#topnav').removeClass("sticky");
		}

	})

</script>





</body>

</html>
