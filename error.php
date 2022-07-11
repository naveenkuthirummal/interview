<?php
//error handler function
function abc($a, $s) {
  echo "<b>Error:</b> [$a] $s";
}

//set error handler
set_error_handler("abc");
error_log("Failed to connect to database!", 0);
//trigger error
echo($test);
?>