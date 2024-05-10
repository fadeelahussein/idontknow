<!DOCTYPE html>
<html>
<head>
	
	<title></title>

	<style>
	    .mybody{
            width: 80%;
            margin: 70px;
        }
        .myfieldset{
            margin-bottom: 10px;
            background-color: pink;
            border:solid white;

        }
        .nextbutton{
            padding: 8px;
            width: 70px;
            background-color: pink;
            border:none;

        }
        a{
            text-decoration: none;
            color: black;
            display: inline-block;
            font-size: 16px;
        }
</style>
</head>
<body class="mybody">


	<fieldset class="myfieldset">
		<h1>Question 8</h1>
		<p><h4>WAP to find the Circumference of a Circle.</h4></p><hr>

		<form>
			<label for="radius">Enter radius: </label>
			<input type="number" name="radius"><br><br>

			<button type="submit" name="submit">Submit</button><br><br>
		</form>

		<?php
           if(isset($_GET['submit'])){
           	$radius = $_GET['radius'];
           	$pi = 3.14;
           	$Circumference = 2 * $pi * $radius;

           	echo "The Circumference of the Circle 2*Pi*r is ".$Circumference;
           }
		?>
	</fieldset>

    <button class="nextbutton"><a href="kedcophp7.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp9.php">Next</a></button>
</body>
</html>