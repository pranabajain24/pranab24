

<?php
  $numbers = $_POST['number'];
  $unique_code = array();
  $user_number = explode("\n", $numbers);
  $random= "";
  
  $number_of_user = (strlen($numbers))/12;
  function randomPrefix($length){
    $random= "";
    srand((double)microtime()*1000000);
    $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
    $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
    $data .= "0FGH45OP89";

    for($i = 0; $i < $length; $i++){
      $random .= substr($data, (rand()%(strlen($data))), 1);
    }

  return( $random);
  }
  for($i=0 ; $i<$number_of_user ; $i++){
    $unique_code[$i]=randomPrefix(10);
  }
  for($i=0 ; $i<$number_of_user ; $i++){
  print($user_number[$i]);
  print($unique_code[$i]);
  }
?>

