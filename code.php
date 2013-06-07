<!DOCTYPE html>
<html>
<head>
<style>

  body{
    background-image:url('Background.jpg');
    background-repeat:repeat-y;
  }

  p{
    color:red;
  } 
</style>

<script>
  function validateForm(){
  	var x=document.forms["form1"]["user_name"].value;
  	var y=document.forms["form1"]["mobile_number"].value;
  	if (x==null || x==""){
      alert("First name must be filled out");
		  return false;
  	}
	  else if (y==null || y==""){
		  alert("First numder must be filled out");
		  return false;
	  }
  }

</script>
</head>

<body>

<title>hoppr</title>

<p>Enter your name</p>

<form name = "form1" onsubmit="return validateForm();" method= "POST" action = "code1.php">
<input type = 'text' name='user_name' id="name" value="">

<p>Enter your mobile number</p>

<input type = 'text' name ='mobile_number' id="number" value="">
<input type = "submit" name = "submit1" value = "submit">
</form>

</body>

</html>
