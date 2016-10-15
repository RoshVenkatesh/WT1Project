<!DOCTYPE html>
<html>
<head>
<title> BrainGames Home </title>
<link rel= "icon" href = "logo2.png">
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<style>
 
</style>
</head>
<body>
<div style = "position: fixed">
<ul >
  <li><a href="projecthome1.php">Home</a></li>
  <li><a href="about5.html">About Us</a></li>
  <li><a href="analysis.html">Analysis</a></li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a href="chars.html">Character Sketches</a></li>
</ul>
</div>
<br>
<br>
<br>
<div style="display: inline-block;"><img src = "logo2.png" alt= "PIC!" style ="width :10em; height= 15em"/></div>
<div style="display: inline-block;"><img src = "logo2.png" alt= "PIC!" style ="width :10em; height= 15em"/></div>
<div style="display: inline-block;"><center> <img src = "heading3.png" alt= "PIC!" style ="margin-left: 6em; margin-right: 6em" /></center></div>
<div style="display: inline-block;"><img src = "logo2.png" alt= "PIC!" style ="width :10em; height= 15em"/></div>
<div style="display: inline-block;"><img src = "logo2.png" alt= "PIC!" style ="width :10em; height= 15em"/></div>
<center>
<div style = "border: solid 1px darkred; overflow: hidden;" >
<?php
	session_start();
	
    if (isset($_COOKIE["temporal"]))
	{
		$t = $_COOKIE["temporal"];
		$_SESSION["temporal"] = $t ;
	}
	if (isset($_COOKIE["stem"]))
	{
		$t = $_COOKIE["stem"];
		$_SESSION["stem"] = $t ;
	}
	
	if (isset($_COOKIE["name"]))
	{
		$t = $_COOKIE["name"];
		$_SESSION["name"] = $t ;
		$t2 = $_COOKIE["age"];
		$_SESSION["age"] = $t2 ;
		echo "HI ".$_SESSION["name"]." ! You have already signed in";
	}
	else echo "PLEASE SIGN IN";
?> 
<b><p class = "YES1" > How well do you think you know your brain? </p>
<p class = "YES2">So you think your brain is the best?</p>
<p class = "YES1">You do... don't you?</p>
<p class = "YES2">How would you like to show everyone how YOU think?</p>
<p class = "YES1">Would you give it a chance?</p>
<p class = "YES2">On your mark!</p>
<p class = "YES1">Get that brain ready!</p></b>
</div>
<br>
<div  style = "border: solid 1px darkred">
<p style = "font-style: italic; color: white; font-size: 2em"> Hover over any part of the brain to know what part it is and what skills are associated with it. Click on the same image to test your skills in that domain!</p>
<br>
<span class = "hov1" ><a href="parietal.htm"><img src = "b2.png" alt= "PIC!" class = "pic1" height = "175px" width = "300px" style = " position: relative; left: 70px ;top: -70px;"/> <p class ="d1"> Parietal lobe (Language & Touch) </p></a></span>
<span class = "hov1" ><a href="frontal.htm"><img src = "b1.png" alt= "PIC!" class = "pic1" height = "260px" width = "300px" style = "position: relative; left: 10px; top: 10px" /><p class ="d1"> Frontal lobe (Thinking, Memory,Behaviour & Movement) </p></a></span>
<br>
<span class = "hov1" ><a href="occiptal.htm"><img src = "b3.png" alt= "PIC!" class = "pic1" height = "175px" width = "300px" style = "position: relative; top : -175px; "/> <p class ="d1"> Occiptal Lobe (Sight) </p></a></span>
<span class = "hov1" ><a href="temporal.php"><img src = "b4.png" alt= "PIC!" class = "pic1" height = "150px" width = "300px" style = "position: relative; right: 90px; top: -130px;"    />  <p class ="d1"  > Temporal Lobe (Hearing, Learning & Feelings) </p></a></span>
<br>
<span class = "hov1" ><a href="cerebellum.php"><img src = "b5.png" alt= "PIC!" class = "pic1" height = "175px" width = "250px" style = "position: relative; top : -260px; left: 15px;" / >  <p class ="d1"> Cerebellum (Balance & Coordination) </p></a></span>
<span class = "hov1" ><a href="stem.php"><img src = "b6.png" alt= "PIC!" class = "pic1" height = "170px" width = "250px" style = "position: relative; right: 170px; top: -190px;"  /> <p class ="d1"> Brain stem (Breathing, Heart rate & Temperature) </p></a></span>
</div>

</center>
</body>
</html>