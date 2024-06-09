<?php
session_start(); 
session_destroy(); // destroy session
  echo "<script type = \"text/javascript\">
  window.location = (\"../adminlogin.php\");
  </script>";
  
  ?>