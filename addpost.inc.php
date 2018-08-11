<div class = "content">
<?php
$title = $_POST['title'];
$poster = $_POST['poster'];
$shortdesc = $_POST['shortdesc'];

    $con = mysqli_connect("localhost", "test", "test") or die('Could not connect to server');
    mysqli_select_db($con, "gwc") or die('Could not connect to database');
    $query = "INSERT INTO posts (title, shortdesc, poster) " .  // . is the concat character
          " VALUES ('$title', '$shortdesc', '$poster')";
    $result = mysqli_query($con, $query) or die('Sorry, we could not post your project to the database at this time.');
    if ($result)
       echo "<h2>Your project has been posted.</h2>\n";
   
    else
       echo "<h2>Sorry, there was a problem posting your project</h2>\n";

?>
</div>
