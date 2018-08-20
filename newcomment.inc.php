<div class="entry">

<?php

$recipeid = $_GET['id'];
if (!isset($_SESSION['valid_recipe_user']))
{
    echo "<h2>Sorry, you need to login to post comments</h2><br>\n";
    echo "<a href=\"index.php?content=login\">Please login here</a><br>\n";
    echo "<a href=\"index.php?content=showrecipe&id=$recipeid\">Go back to recipe</a>\n";

}
 else
{
    $userid = $_SESSION['valid_recipe_user'];
echo "<form action=\"index.php\" method=\"post\">\n";
echo "<h2>Enter your comment</h2>";
echo "<textarea rows=\"10\" cols=\"50\" name=\"comment\"></textarea><br>\n";
echo "<input type=\"hidden\" name=\"poster\" value=\"$userid\"><br>\n";
echo "<input type=\"hidden\" name=\"recipeid\" value=\"$recipeid\">\n";
echo "<input type=\"hidden\" name=\"content\" value=\"addcomment\">\n"; //redirects to addcomment.inc.php
echo "<br><input type=\"submit\" value=\"Submit\" class=\"button sub\" >\n";
echo "</form>\n";

}

?>
</div>