<div class="content">
<?php

if (isset($_SESSION['valid_gwc_user'])){
   unset($_SESSION['valid_gwc_user']);
   echo "<h2>You are now logged out. Refresh to log in again. </h2>\n";
   
   
} else{
   echo "<h2>Sorry, you are not currently logged in
    </h2>\n";

}
?>
</div>