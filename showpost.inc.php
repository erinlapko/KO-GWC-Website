<div class="content">

<?php

$con = mysqli_connect("localhost", "test", "test", "gwc") or  die('Sorry, could not connect to server');
mysqli_select_db($con,"gwc") or die('Sorry, could not connect to database');
$postid = $_GET['id'];
$query = "SELECT title,poster,shortdesc from posts where postid = $postid"; //id matches that of the user
$result = mysqli_query($con, $query) or die('Sorry, could not find post requested');
$row = mysqli_fetch_array($result, MYSQL_ASSOC) or die('No records retrieved');
$title = $row['title'];
$poster = $row['poster'];
$shortdesc = $row['shortdesc'];
//$ingredients = nl2br($ingredients);		// formats text data to protect carriage returns, converts newlns to break tags!
//$directions = nl2br($directions);

echo "<h2>$title</h2>\n";
echo "by $poster <br><br>\n";
echo "$shortdesc<br><br>\n";
echo "<br><br>\n";
$query = "SELECT count(commentid) from comments where postid = $postid"; // count is a native function for SQL db
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);

if ($row[0] == 0) {				//if there are no comments
   echo "No comments posted yet.&nbsp;&nbsp;\n"; //&nbsp; means space
   echo "<a href=\"index.php?content=newcomment&id=$postid\">Add a comment</a>\n";
   echo "&nbsp;&nbsp;&nbsp;<a href=\"print.php?id=$postid\" target=\"_blank\">Print post</a>\n";
   echo "<hr>\n";
} 

else{
   echo $row[0] . "\n";
   echo "&nbsp;comments posted.&nbsp;&nbsp;\n";
   echo "<a href=\"index.php?content=newcomment&id=$postid\">Add a comment</a>\n";
   echo "&nbsp;&nbsp;&nbsp;<a href=\"print.php?id=$postid\" target=\"_blank\">Print post</a>\n";
   echo "<hr>\n";
   echo "<h2>Comments:</h2>\n";
   $query = "SELECT date,poster,comment from comments where postid = $postid order by commentid desc"; //create query
   $result = mysqli_query($con, $query) or die('Could not retrieve comments'); // sned query to server
   while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
       $date = $row['date'];
       $poster = $row['poster'];
       $comment = $row['comment'];
       $comment = nl2br($comment);
       echo "$date  posted by  <i>$poster</i><br>\n";
       echo "$comment\n";
       echo "<br><br>\n";
   }
}

?>
</div>