<html>

<head>
<style>
body
{
background-image:url('Background.jpg');
background-repeat:no-repeat;
}
</style>
</head>

<body>

<title>Hoppr</title>

<?php
$user_name = $_POST['user_name'];
$mobile_number = $_POST['mobile_number'];

if ( isset( $_POST['submit1'] ) )
{
	if ($mobile_number == NULL && $user_name == NULL )
	{		
		<p>you should enter your name and number</p>
	}
	else if($mobile_number == NULL && $user_name != NULL)
	{
		print("you should enter your number");
	}
	else if($mobile_number!= NULL && $user_name==NULL)
	{
		print("you should enter your name");
	}
	else 
	{
		 printf("Hello , friend!\n");
		 printf("your code is ");

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


