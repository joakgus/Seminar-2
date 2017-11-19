<!DOCTYPE html>

<html>
    <head>
        <head>
        <link rel="stylesheet" href="reset.css" type="text/css"/>  
         <link rel="stylesheet" href="tastyrecipes.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Meatballs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <ul class = "topnav">
                <li><a href="index.php">Home</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li class="dd active">
                <a href="#" class="dropbtn">Recipes</a>
                    <div class="dd-content">
                        <a class='active' href="meatballsRecipe.php">Meatballs</a>
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
        <div class='container-fluid text-center'>
            <div>
                <h1 class='text'>Meatballs</h1>
            </div>
            <div>
                <img class='food' src='klassiska-kottbullar-712807.jpg' 
                 alt=''>
            </div>
            <div>
                <h1>Ingredients</h1>
                <p>1 lb lean ground beef </p>
                <p>1/2 cup bread crumbs </p>
                <p>1/4 cup milk </p>
                <p>1/2 teaspoon salt </p>
                <p>1/2 teaspoon Worcestershire sauce </p>
                <p>1/4 teaspoon pepper</p>
                <p>1 small onion, finely chopped (1/4 cup) </p>
                <p>1 egg</p> 
            </div>        
            <hr>
            <div>
                <h1>Preperation</h1>
                <p>1. Put oven at 225 degrees centigrad.</p>
                <p>2. Mix in bowl.</p>
                <p>3. Bake in oven for 18 to 22 minutes.</p>    
            </div>
		
        <hr>
		<div class="comsec">
			<h1>Comments</h1>
			 Your name:<?php 
			 if(!$_COOKIE){echo '<a href="\login.php\"> LOGIN PLEASE! </a>';
			 die;}
			 else{
				 echo $_COOKIE["user"];
			 }
			 ?>
			<form action="comment.php" method="post">				
			Comment:
			<input type="hidden" name="page" value="meatballs"> 
			<input type="text" name="comment" >
			<input type="submit" name= "submit" value="Submit Comment">
			
			</form>            
		</div>
		<div class="comsec">
			<form action="deletecomment.php" method="post">
				<p>Delete comment number.
				<input type="text" name="commentDel" >
				<input type="submit" name= "submit" value="Delete Comment">
				<input type="hidden" name="page" value="meatballs"> 
				</p>
			</form>
			<h2>Comments are:</h2>
			<?php
			$doc = new DOMDocument();
			$doc->load( "meatballs.xml" );
			$comments = $doc->getElementsByTagName( "comment" );
			foreach( $comments as $comment ){
				$num++;
				$username = $comment->getElementsByTagName( "username" );
				$username = $username->item(0)->nodeValue;
				$com_str = $comment->getElementsByTagName( "com_str" );
				$com_str = $com_str->item(0)->nodeValue;
				echo "$num. $username - $com_str\n <br>";
			}
			?>
		</div>
		<footer class="container-fluid text-center">
            <a href='calendar.php'>The Calendar</a>
            <a href='meatballsRecipes.php'>Meatballs Recipe</a>
            <a href="pancakesRecipes.php">Pancakes Recipes</a>
        </footer>
    </body>
</html>
