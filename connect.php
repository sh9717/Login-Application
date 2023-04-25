<?php
  $conn =  new mysqli("localhost","root","","login_application");

  if(!$conn){    
    die(mysqli_error($conn));
  }
?>