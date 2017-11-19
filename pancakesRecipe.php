

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="reset.css" type="text/css"/>  
         <link rel="stylesheet" href="tastyrecipes.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Pancakes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <ul class= "topnav">
                <li><a href="index.php">Home</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li class="dd active">
                <a href="#" class="dropbtn">Recipes</a>
                    <div class="dd-content">
                        <a href="meatballsRecipe.php">Meatballs</a>
                        <a class='active' href="pancakesRecipe.php">Pancakes</a>                        
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
		<div class="container-fluid text-center">
            <div>
                <h1>Pancakes</h1>
            </div>
            <div>
                <img class='food' src='pannkaka.png' 
                 alt='picture did not load'>
            </div>
            <div>
                <h1>Ingredients</h1>
                <p>1 egg</p>
                <p>1 1/4 cup milk</p>
                <p>5 1/4 ounces flour</p>
                <p>1 ounces butter</p>
            </div>
            <hr>
            <div>
                <h1>Preperation:</h1> 
                <p>1. Mix in bowl.</p>
                <p>2. Pour in freingpan.</p>
                <p>3. Flip when solid.</p>
                <p>4. Take out of freingpan.</p>
            </div>
            <hr>
			<div class="comsec">
				<h1>Comments</h1>
				Your name:
				<?php 
					if(!$_COOKIE){echo '<a href="\login.php\"> LOGIN PLEASE! </a>';
					die;}
					else{
						echo $_COOKIE["user"];
					}
				?>			 
                <form action="comment.php" method="post">					
					Comment: 
					<input type="text" name="comment" >
					<input type="submit" name= "submit" value="Submit Comment">
					<input type="hidden" name="page" value="pancakes"> 
				</form>
            </div>
			<div class="comsec">
				<form action="deletecomment.php" method="post">
					<p>Delete comment number.
					<input type="text" name="commentDel">
					<input type="submit" name= "submit" value="Delete Comment">
					<input type="hidden" name="page" value="pancakes"> 
					<p>
				</form>
				<p>Comments are:</p>
				<?php
				$doc = new DOMDocument();
				$doc->load( "pancakes.xml" );
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
            <a href='calendar.html'>The Calendar</a>
            <a href='meatballsRecipes.html'>Meatballs Recipe</a>
            <a href="pancakesRecipes.html">Pancakes Recipes</a>
        </footer>
    </body>
</html>
