<?php
include("NewConnexion/Connexion.php");
if(isset($_POST[submit]))
{
	if(!empty($_POST['email']) && !empty($_POST['password']))
	{
		$a=$_POST['email'];
		$b=$_POST['password'];
		$query1=mysqli_query($conn,"SELECT * FROM Candidat WHERE email='$a' and password='$b'");
		if(mysqli_num_rows($query1)>0)
		{
			echo'<script type="text/javascript">alert("yes Connected");</script>';
		}
		else
			echo'<script type="text/javascript">alert("email or password incorrect");</script>';
	}
	else
		echo'<script type="text/javascript">alert("remplir tout les champs");</script>';
}
?>
<!doctype html>
 <html>
   <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="Css/log.css">
	 <title>Login</title>
	</head>
     <body>
        	<div class="box">
		<h1>login</h1>
		 <img class="img" src="https://gazenergie.ch/fileadmin/erdgas/bilder/Login.png"  >
		 <form method="post" action="">
		 <div class="input-container">
		<input type="text" required="" name="email"/>
		<label>email</label>		
	</div>
	<div class="input-container">		
		<input type="password" required="" name="password" id="password"/>
		<label>password</label>
	</div>
	   <p id="p1">show password </p>
	   <input type="Checkbox"  id="Afficher" onclick="show()">
		<input type="submit" name="submit" class="btn" value="Login"/></br></br>
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="Sign Up.php">
							Sign Up
						</a></br></br>
                        <span class="txt3">
                         did you forget your password ?
                        </span>	

                        <a class="txt4" href="Restart Password.php">
                          Password Recovery
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