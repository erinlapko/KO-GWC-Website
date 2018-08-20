<?php
$postid = $_POST['postid'];
$poster = $_POST['poster'];
$comment = htmlspecialchars($_POST['comment']);
$date = date("Y-m-d");
$con = mysqli_connect("localhost", "test", "test") or die('Could not connect to server');
mysqli_select_db($con, "gwc") or die('Could not connect to database');
$query = "INSERT INTO comments (postid, poster, date, comment) " .
          " VALUES ($postid, '$poster', '$date', '$comment')";
$result = mysqli_query($con,$query);
if ($result)
   echo "<h2>Comment posted</h2>\n";
else
   echo "<h2>Sorry, there was a problem posting your comment</h2>\n";
echo "<a href=\"index.php?content=readpost&id=$postid\">Return to post</a>\n";

?>