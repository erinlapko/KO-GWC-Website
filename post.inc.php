<div class="content">
<div class="entry">

<?php
if (!isset($_SESSION['valid_gwc_user'])){
   echo "<h2>Sorry, you do not have permission to post.</h2>\n";
   echo "<a href=\"index.php?content=login\">Please login to post.</a>\n";
} 
else{
   $userid = $_SESSION['valid_gwc_user'];
   echo "<form action=\"index.php\" method=\"post\">\n";
   echo "<h2>Enter your new project</h2><br>\n";
   echo "Title:<br></br><input type=\"text\" size=\"40\" name=\"title\"><br></br><br></br>\n";
   echo "Short Description:<br><textarea rows=\"5\" cols=\"50\" name=\"shortdesc\"></textarea><br><br></br><br></br><br></br><br></br>\n";
   echo "<input type=\"submit\" value=\"Submit\" class=\"button\">\n";
   echo "<input type=\"hidden\" name=\"poster\" value=\"$userid\"><br>\n";
   echo "<input type=\"hidden\" name=\"content\" value=\"addpost\">\n"; //directs to addpost.inc.php
   echo "</form>\n";
}
?>

</div>
</div>