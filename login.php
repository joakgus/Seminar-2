<?php
$error = true;

    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $password = ($_POST['password']);
	if(file_exists("lefty.xml"));
	$xml = simplexml_load_file("users/users.xml") or die ("Error");
	if ($password == $xml->password){
		echo "good2";
		session_start();
        $_SESSION['username'] = $username;
		setcookie(user, $username, time()+ (3600), "/");
        header('Location: index.php');
        die;
	}
	else{
		echo "Wrong";
	}
	
?>
		
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="reset.css" type="text/css"/>  
         <link rel="stylesheet" href="tastyrecipes.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="tastyrecipes.css">
    </head>
	<body>
			<form method="post" action="" class="center">
				<p>Username</p>
				<br>
                <input type="text" name="username" value="username" >
				<br>
				<p>Password</p>
				<br>
                <input type="password" name="password" value="password">
				<br>
				<button type="submit" name="login">Login</button>        
				</form>
	</body>
</html>