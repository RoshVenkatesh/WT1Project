<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<style>
div { width: 50%; border: solid 2px darkred;}
.right { position: relative; left : 40em;}
</style>
<script>
var x;

function changecolors() {
    /*x = 1;
    setInterval(change, 2000);
}

function change() {
    if (x == 1) {
        color = "red";
        x = 2;
    } else if (x==2) {
        color = "green";
        x = 3;
    } else if (x==3)
	{	color = "orange";
		x = 0;}
	else color = "black";*/
     var c = document.getElementById("h1");
	 c.style.background = "green";
	
}
</script>
</head>
<body>
<center><h1 style= "color: darkred"> Cerebellum (Balance & Coordination) </h1></center>
<form name="cerebellum" method="post" >

<div style = "border: solid 1px darkred" class = "right">
Choose the color of the word ( not the color in the word)<br>
<h1 style = "color: red">GREEN</h1>
<input type="radio" name="q0" style = "color: green;">RED</button>
<input type="radio" name="q0" style = "color: red;">GREEN</button>
</div>
<br>

<div style = "border: solid 1px darkred" id = "h1">
<button onclick = "changecolors()"> START </button>
Enter the colors you see in order<br>
<input type="text" name="q1a" autocomplete ="off">
<input type="text" name="q1b" autocomplete ="off">
<input type="text" name="q1c" autocomplete ="off">
</div>

<center>
<br>
<center><h6>CLICKING ON FIND SCORE WILL AUTOMATICALLY STORE YOUR SCORES</h6></center>
</form>
<br>
<a href="projecthome1.php">Go to HOME page:</a>
</center>
</body>
</html>