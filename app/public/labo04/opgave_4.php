<?php

	// Show all errors (for educational purposes)
	ini_set('error_reporting', E_ALL);

	// Get all variables
	$name = isset($_GET['name']) ? (string) $_GET['name'] : '';
	$email = isset($_GET['email']) ? (string) $_GET['email'] : '';
	$course = isset($_GET['course']) ? (string) $_GET['course'] : '';
	$cont = isset($_GET['cont']) ? (int) $_GET['cont'] : 0;
	$meals = isset($_GET['meals']) ? (array) $_GET['meals'] : array();
	$remark = isset($_GET['remark']) ? (string) $_GET['remark'] : '';

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

			<h2>Please register for our conference</h2>

			<dl class="clearfix">

				<dt><label for="name">Name</label></dt>
				<dd class="text"><input type="text" id="name" name="name" value="<?php echo htmlentities($name); ?>" class="input-text" /></dd>

				<dt><label for="pass">Email</label></dt>
				<dd class="text"><input type="email" id="pass" name="email" value="<?php echo htmlentities($email); ?>" class="input-text" /></dd>

				<dt><label>Prefered course</label></dt>
				<dd>
					<label for="server-side"><input type="radio" class="option" name="course" id="course1" value="server-side"<?php if ($course == 'server-side') { echo ' checked="checked"'; } ?> />server-side</label>
					<label for="front-end"><input type="radio" class="option" name="course" id="course2" value="front-end"<?php if ($course == 'front-end') { echo ' checked="checked"'; } ?> />front-end</label>
                    <label for="full-stack"><input type="radio" class="option" name="course" id="course3" value="full-stack"<?php if ($course == 'full-stack') { echo ' checked="checked"'; } ?> />full-stack</label>
				</dd>

				<dt><label for="cont">Country</label></dt>
				<dd>
					<select name="cont" id="cont">
						<option value="0"<?php if ($cont == 0) { echo ' selected="selected"'; } ?>>Please select...</option>
						<option value="1"<?php if ($cont == 1) { echo ' selected="selected"'; } ?>>Belgium</option>
						<option value="2"<?php if ($cont == 2) { echo ' selected="selected"'; } ?>>France</option>
						<option value="3"<?php if ($cont == 3) { echo ' selected="selected"'; } ?>>Netherlands</option>
						<option value="4"<?php if ($cont == 4) { echo ' selected="selected"'; } ?>>Germany</option>
						<option value="5"<?php if ($cont == 5) { echo ' selected="selected"'; } ?>>Luxemburg</option>
						<option value="6"<?php if ($cont == 6) { echo ' selected="selected"'; } ?>>Spain</option>
					</select>
				</dd>

				<dt><label>Meals</label></dt>
				<dd>
					<label for="meal0"><input type="checkbox" class="option" name="meals[]" id="meal0" value="breakfast"<?php if (in_array('breakfast', $meals)) { echo ' checked="checked"'; } ?> />breakfast</label>
					<label for="meal1"><input type="checkbox" class="option" name="meals[]" id="meal1" value="lunch"<?php if (in_array('lunch', $meals)) { echo ' checked="checked"'; } ?> />lunch</label>
					<label for="meal2"><input type="checkbox" class="option" name="meals[]" id="meal2" value="dinner"<?php if (in_array('dinner', $meals)) { echo ' checked="checked"'; } ?> />dinner</label>
				</dd>

				<dt><label for="remark">Remark</label></dt>
				<dd class="text"><textarea name="remark" id="remark" rows="5" cols="40"><?php echo htmlentities($remark); ?></textarea></dd>

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
		dump($_GET);
       

?>

	</div>

</body>
</html>