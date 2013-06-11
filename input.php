<!DOCTYPE html>
<html>

<script>
  <script type="text/javascript" src="script.js"></script>
  
</script>

<body>
<Head>
<style>
  h1.pos_fixed {
    position:fixed;
    top:30px;
    right:20px;
  }
</style>
</Head>

  <h1>Mobile number</h1>
 
  <form name = "form1" onsubmit="return validateForm();" method= "POST" action="input_database.php" >
    <textarea rows="25" cols="25" name="mobile_number" >
    </textarea>
   </br>
  <textarea rows="3" cols="80" name="script">
  </textarea> 
  </br>
  <input type = "submit" name = "submit1" value = "submit">
  </form>

    

</body>
</html>
