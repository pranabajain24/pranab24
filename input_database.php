

<?php
  $mobile_numbers = $_POST['mobile_number'];
  $unique_code = array();
  $user_number = explode("\n", $mobile_numbers);
  $random= "";
  $number_of_user = count($user_number);
  print($number_of_user);
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
  }

  include'database_input.php'
?>

