<div class="content">
<?php

$con = mysqli_connect("localhost", "test", "test", "gwc") or die('Could not connect to server');
mysqli_select_db($con, "gwc" ) or die('Could not connect to database');
$userid = $_POST['userid'];
$password = $_POST['password'];
$query = "SELECT userid from users where userid = '$userid' AND password = PASSWORD('$password')";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0){
    echo "<h2>Sorry, your user account was not validated.</h2><br>\n";
    echo "<a href=\"index.php?content=login\">Try again</a><br>\n";
    echo "<a href=\"index.php\">Return to Home</a>\n";
}
 else{   
   $_SESSION['valid_gwc_user'] = $userid;   
   echo "<h3>Your user account has been validated, you can now post and comment. Refresh to logout. </h3><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   
}

?>

</div>