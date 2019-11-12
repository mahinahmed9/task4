

<?php




require('a.php');
	if (isset($_POST['name']) && isset($_POST['password']))
	{		
       $name=$_POST['name'];
	   echo $name;
       $password=$_POST['password'];
	   echo $password;
       //$sql="SELECT  * FROM new WHERE `name`='$name' AND `password`='$password'";
	   $sql="INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')";
	   $result=mysqli_query($con, $sql);
	 /* if(mysqli_num_rows($result) >=1)
	  {
		echo "Done";
	}
	else{
		echo "Not";
		}*/
	}
	echo $sql;
	
?>	 
<form action="login.php" method="POST">
          <br><br><label>name</label>
		   <input type="text" name="name" ><br>
			<br><br><label>password</label>
			<input type="text" name="password"><br>
		
			<input type="submit" name="submit">
</form>  
		