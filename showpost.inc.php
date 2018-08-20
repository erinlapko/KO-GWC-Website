<div class="content">

<?php

$connection = mysqli_connect('localhost', 'test', 'test','gwc') or die('Sorry, could not connect to database server');
mysqli_select_db($connection, 'gwc') or die('Sorry, could not connect to database'); //define default db 
$query = "SELECT postid,title,poster,shortdesc from posts order by postid desc";
$result = mysqli_query($connection, $query) or die('Sorry, could not get posts at this time ');
if (mysqli_num_rows($result) == 0){
   echo "<h3>Sorry, there are no posts posted at this time, please try again later.</h3>";
}
 else{
   while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
       $postid = $row['postid'];
       $title = $row['title'];
       $poster = $row['poster'];
       $shortdesc = $row['shortdesc'];
	   
	   //print: 
       echo "<a href=\"index.php?content=readpost&id=$postid\">$title</a> submitted by <i>$poster</i><br>\n";
       echo"$shortdesc<br><br>\n";
   }
}

?>

</div>