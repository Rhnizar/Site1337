<?php
include("NewConnexion/Connexion.php");
if(isset($_POST['submit']))
{
if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST[email]))
{
	$a=$_POST['firstName'];
    $b=$_POST['lastName'];
    $c=$_POST['email'];
	$query2=mysqli_query($conn,"SELECT * FROM Candidat WHERE first_name='$a' and last_name='$b' and email='$c'");
	$rows=mysqli_fetch_assoc($query2);
	$pass=$rows['password'];
	if(!query2)
	{
		echo'<script type="text/javascript">alert("error");</script>';
	}
	if(mysqli_num_rows($query2)>0)
	{
		echo"Password is : ".$pass; 
	}
	else
		echo'<script type="text/javascript">alert("verifier un champ incorrect !!");</script>';
}
else 
	echo'<script type="text/javascript">alert("Remplir tout les champs !!");</script>';
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
	<link rel="stylesheet" href="Css/Restart.css">
	<title>Restart Password</title>
   </head>
    <body>
      <div class="main">
	    <h1>Restart Password</h1>
		<form method="post" action="">
		 <div class="one">
		<input type="text" required="" name="firstName"/>
		<label>First Name</label>
	     </div>
		  <div class="one">
		   <input type="text" required="" name="lastName"/>
		   <label>Last Name</label>
		   </div>
		   <div class="one">
		   <input type="text" required="" name="email"/>
		   <label>Email</label>
		   </div>
		   <input type="submit" name="submit" class="for" value="Password Recovery"/>
		   </form>
		   </div>
	  </body>
</html>	