
<!DOCTYPE html>

<html>

    <head>
		<link rel="stylesheet" href="reset.css" type="text/css"/>  
        <link rel="stylesheet" href="tastyrecipes.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
		<title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div>
            <ul class='topnav'>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li class="dd">
                    <a href="#" class="dropbtn">Recipes</a>
                    <div class="dd-content">
                        <a href="meatballsRecipe.php">Meatballs</a>
                        <a href="pancakesRecipe.php">Pancakes</a>                        
                    </div>
                </li>
				<li style='float: right'>
				<?php if(!$_COOKIE[user]){
                 echo '<a href="login.php">Login</a>';}
				else{
					print_r .$_COOKIE[user];
				echo '<a href="logout.php">Log out</a>';
					
				}
				?>
				</li>
            </ul>
        </div>
        <div id="container">
            <!-- Each image is 350px by 233px -->
            <div class="photobanner">
                <a href="meatballsRecipe.php"> <img class="first" src="klassiska-kottbullar-712807.jpg" width='350' height="233" alt="" />
                </a>
                <a href="pancakesRecipe.php"> <img src="pannkaka.png" width='350' height="233" alt="" />
                </a>
                 <a href="meatballsRecipe.php"> <img src="klassiska-kottbullar-712807.jpg" width='350' height="233" alt="" />
                </a>
                 <a href="pancakesRecipe.php"> <img src="pannkaka.png" width='350' height="233" alt="" />
                </a>
                <a href="meatballsRecipe.php"> <img src="klassiska-kottbullar-712807.jpg" width='350' height="233" alt="" />
                </a>
            </div>
        </div>
		<div class="container-fluid text-center">
			<div>
				<h1>Welcome to Tasty Recipes!</h1>
				<p>This website will have recipes with lots of food. We are in the 
					upstart phase but there is more to come... </p>
			</div>
			<div>
				<a href='calendar.php' class="text">Take a look at our year long calendar here!!!</a>
			</div>
			<div class='fix'>
            
			</div>
        </div>
        <footer class="container-fluid text-center">
            <a href='calendar.php'>The Calendar</a>
            <a href='meatballsRecipes.php'>Meatballs Recipe</a>
            <a href="pancakesRecipes.php">Pancakes Recipes</a>
        </footer>
    </body>
</html>
