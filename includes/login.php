<?php 
	if($_SERVER['REQUEST_METHOD'] == "GET" && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']))
	{
		header('Location: ../index.php');
	}
	if(isset($_POST['login']) && !empty($_POST['login']))
	{
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		if(!empty($email) or !empty($password))
		{
			$email 		= $getFromU->checkInput($email);
			$password	= $getFromU->checkInput($password);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$errors = "Invalid format";
			}
			else
			{
				if($getFromU->login($email,$password) === false)
				{
					$errors = "The email or password is incorrect";
				}
			}
		}
		else
		{
			$errors = "Please enter username and password";
		}
	}

?>
<div class="login-div">
<form method="post"> 
	<ul>
		<li>
		  <input type="text" name="email" placeholder="Please enter your Email here"/>
		</li>
		<li>
		  <input type="password" name="password" placeholder="password"/>
		  <input type="submit" name="login" value="Log in"/>
		</li>
		<li>
		  <input type="checkbox" Value="Remember me">Remember me
		</li>
	</ul>
	<?php 
		if(isset($errors))
		{
			echo '<li class="error-li">
			<div class="span-fp-error">'.$errors.'</div>
		   </li> ';
		}
	 ?>
	  
	
	</form>
</div>