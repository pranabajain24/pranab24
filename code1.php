<html>
<body>
<title>Hoppr</title>
<?php
$user_name = $_POST['user_name'];
$mobile_number = $_POST['mobile_number'];

print($mobile_number);
print($user_name);
if ( isset( $_POST['submit1'] ) )
{
	if ($mobile_number == NULL )
	{		
		print ("you should enter your name and number");
	}
	else 
	{
		print ("Hello , friend!");
	}
}
else
{
	$mobile_number ="";
	print ("enter the number");

}

?>

</body>
</html>


