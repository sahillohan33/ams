<?php
session_start(); 
session_destroy(); // destroy session
  echo "<script type = \"text/javascript\">
  window.location = (\"../teacherlogin.php\");
  </script>";
  
  ?>