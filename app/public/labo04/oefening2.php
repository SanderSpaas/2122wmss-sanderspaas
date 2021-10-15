<?php

	// Show all errors (for educational purposes)
	ini_set('error_reporting', E_ALL);

	// Get all variables
	$number1 = isset($_GET['number1']) ? (string) $_GET['number1'] : '';
	$number2 = isset($_GET['number2']) ? (string) $_GET['number2'] : '';

?><!DOCTYPE html>
<html>
<head>
	<title>Testform</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

		<fieldset>

			<h2>Testform</h2>

			<dl class="clearfix">

				<dt><label for="number1">number1</label></dt>
				<dd class="text"><input type="int" id="number1" name="number1" value="<?php  if(empty($number1)){echo(rand(1,100));}else{echo htmlentities($number1);}; ?>" class="input-text" /></dd>

				<dt><label for="number2">number2</label></dt>
				<dd class="text"><input type="int" id="number2" name="number2" value="<?php if(empty($number2)){echo(rand(1,100));}else{echo htmlentities($number2);}; ?>" class="input-text" /></dd>

				<dt class="full clearfix" id="lastrow">
					<input type="submit" id="btnSubmit" name="btnSubmit" value="Send" />
				</dt>
			</dl>

		</fieldset>

	</form>

	<div id="debug">

<?php

	/**
	 * Helper Functions
	 * ========================
	 */

		/**
		 * Dumps a variable
		 * @param mixed $var
		 * @return void
		 */
		function dump($var) {
			echo '<pre>';
			var_dump($var);
			echo '</pre>';
		}


	/**
	 * Main Program Code
	 * ========================
	 */

		// dump $_GET
		// dump($_GET);
		
		if (filter_var($number1, FILTER_VALIDATE_INT) && filter_var($number2, FILTER_VALIDATE_INT)) {
			echo $number1 + $number2;
		} else {
			//unset($number1, $number2);	
			echo("Variable is not an integer");	
		}


?>

	</div>

</body>
</html>