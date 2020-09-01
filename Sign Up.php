<?php
include("NewConnexion/Connexion.php");
if(isset($_POST['submit']))
{
	if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST[Ville]) && !empty($_POST[Sex]))
	{
	  $a=$_POST['first'];
      $b=$_POST['last'];
      $c=$_POST['email'];
      $d=$_POST['password'];
      $e=$_POST['Ville'];
      $f=$_POST['Sex'];
      $query=mysqli_query($conn,"INSERT INTO Candidat VALUES('','$a','$b','$c','$d','$e','$f')");
      if($query)
      {
         echo"the information record";
	  }
        else
              echo"Attention";			
	}
	else
		echo"remplir tout les champs";
}
?>
<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="Css/sign up.css">
 <title>Sign Up</title>
 </head>
  <body>
    <div class="box">
	 <h1>Sign Up</h1>
   <!--<img class="img" src="https://signup.com/mobileweb/2.0/images/build/mobile-organizers.png">-->
  <!-- <img class="img" src="https://gazenergie.ch/fileadmin/erdgas/bilder/Login.png " height="80" width="90">-->
       <img class="img" src="https://signup.com/mobileweb/2.0/images/build/mobile-organizers.png" height="80" width="90"/>
	  <form method="post" action="">
	 <div class="username">
	   <input type="text" required="" name="first"/>
	   <label>first name</label>
	   </div>
	   <div class="username">
	   <input type="text" required="" name="last"/>
	   <label>last name</label>
	   </div>
       <div class="username">
	     <input type="text" required="" name="email"/>
		 <label>email</label>
	   </div>
	   <div class="username">
	     <input type="password" required="" name="password" id="password"/>
		 <label>password</label>
	   </div>
	   <p id="p10">show password </p>
	   <input type="Checkbox"  id="Afficher" onclick="show()"/>
	    <div class="ville" style="width:200px;">
	   <label for="1"class="chvi">Choose a City :</label>
	   <select name="Ville" id="1">
	    <option value="benguerir">Benguerir</option>
		<option value="khouribga">Khouribga</option>
	   </select></br></br>
	   </div>
	   <div class="sex" style="width:250px;">
	   <label for="2"class="chsex">Choose a Sex :</label>
	   <select name="Sex" id="2">
	   <option value="homme">Homme</option>
	   <option value="femme">Femme</option>
	   </select>
	   </div>
	   <input type="Checkbox" id="condition"/>
	    <p> I read and agree to </p>
		<p id="p1"> <a href="Condition.php"> Terms & Conditions </a></p>
	   <input type="submit" class="btn" name="submit" value="Sign Up"/></br>
	   <span class="txt1">
          already have an account?
	   </span>
	   <a class="txt2"href="Login.php">
	     Login
	   </a>
	   </form>
	   </div>
   </body>
    <script>
	  function show()
	  {
		  var pass=document.getElementById("password");
		  if(pass.type==="password")
		  {
			  pass.type="text";
		  }
		  else
		  {
			  pass.type="password";
		  }
	  }
	</script>
   </html>