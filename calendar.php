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
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <ul class= "topnav">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="calendar.php">Calendar</a></li>
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
<div>
            <div class="month">      
                <ul>
                    <li class="prev">❮</li>
                    <li class="next">❯</li>
                    <li style="text-align:center">     
                        <br>     
                        <span style="font-size:18px">2017</span>
                    </li>
                </ul>
            </div>
            <ul class="weekdays">
                <li>Mo</li>
                <li>Tu</li>
                <li>We</li>
                <li>Th</li>
                <li>Fr</li>
                <li>Sa</li>
                <li>Su</li>
            </ul>
            <ul class="days">  
            <li>1
                <div class="img">
                    <a href="meatballsRecipe.html">
                        <img src='klassiska-kottbullar-712807.jpg'
                        alt=''>
                    </a>
                </div>
            </li>
            <li>2</li>
            <li>3</li>
            <li>4 
                <div class="img">
                    <a href="pancakesRecipe.html">
                        <img src='pannkaka.png'
                        alt=''>
                    </a>
                </div>
            </li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8<div class="img">
          <a href="meatballsRecipe.html">
    <img src='klassiska-kottbullar-712807.jpg'
         alt=''>
          </a>
      </div></li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11<div class="img">
          <a href="pancakesRecipe.html">
    <img src='pannkaka.png'
         alt=''>
          </a>
      </div></li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15<div class="img">
          <a href="meatballsRecipe.html">
    <img src='klassiska-kottbullar-712807.jpg'
         alt=''>
          </a>
      </div></li>
  <li>16</li>
  <li>17</li>
  <li>18<div class="img">
          <a target="_blank" href="pancakesRecipe.html">
    <img src='pannkaka.png'
         alt=''>
          </a>
      </div></li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22<div class="img">
          <a href="meatballsRecipe.html">
    <img src='klassiska-kottbullar-712807.jpg'
         alt=''>
          </a>
      </div></li>
  <li>23</li>
  <li>24</li>
  <li>25<div class="img">
          <a  href="pancakesRecipe.html">
    <img src='pannkaka.png'
         alt=''>
          </a>
      </div></li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29<div class="img">
          <a href="meatballsRecipe.html">
    <img src='klassiska-kottbullar-712807.jpg'
         alt=''>
          </a>
      </div></li>
  <li>30</li>
  <li>31</li>
</ul>
        </div>
      <footer class="container-fluid text-center">
            <a href='calendar.html'>The Calendar</a>
            <a href='meatballsRecipes.html'>Meatballs Recipe</a>
            <a href="pancakesRecipes.html">Pancakes Recipes</a>
        </footer>
    </body>
</html>
