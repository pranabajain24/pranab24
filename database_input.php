<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = 'chintu';
  $databasename='hoppr';
  
  try {
    $con=mysqli_connect($hostname, $username, $password, $databasename);
    echo 'Connected to database';
    for($i=0;$i<$number_of_user;$i++){
      $sql="INSERT INTO hoppr_rewards (mobile_number,unique_code)
      VALUES
      ('$user_number[$i]','$unique_code[$i]')";
      
      $mysql = mysqli_query($con,$sql);   
    }
  }
  catch (  PDOException $e){
  	echo $e->getMessage();
  }

?>
