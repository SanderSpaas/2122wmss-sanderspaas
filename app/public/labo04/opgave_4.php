<?php

	// Show all errors (for educational purposes)
	ini_set('error_reporting', E_ALL);

	// get all variables
	$name = isset($_POST['name']) ? (string) $_POST['name'] : '';
	$email = isset($_POST['email']) ? (string) $_POST['email'] : '';
	$company = isset($_POST['company']) ? (string) $_POST['company'] : '';
	$course = isset($_POST['course']) ? (string) $_POST['course'] : '';
	$preferences = ['server-side','front-end','full-stack'];
	$cont = isset($_POST['cont']) ? (int) $_POST['cont'] : 0;
	$food = isset($_POST['food']) ? (string) $_POST['food'] : '';
	$remark = isset($_POST['remark']) ? (string) $_POST['remark'] : '';
	$moduleAction = isset($_POST['moduleAction']) ? (string) $_POST['moduleAction'] : '';
	$message1 = '*';
	$message2 = '*';
	$message3 = '*';
	$message4 = '*';
	$message5 = '*';

if ($moduleAction == 'processName'){
	$allOk = true;

    if(trim($name) == ''){
        $message1 = 'Please fill in your name.';
		$allOk = false;
    }
    if(trim($email) == ''){
        $message2 = 'Please fill in your email.';
		$allOk = false;
    }
    if(trim($company) == ''){
        $message3 = 'Please fill in your Company.';
		$allOk = false;
    }
    if($cont == 0){
        $message4 = 'Please fill in your country.';
		$allOk = false;
    }
    if ($course == ''){
        $message5 = 'Please fill in your preference.';
		$allOk = false;
    }

	// end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        header('Location: opgave_4.2.php');
        exit();
    }
}

?><!DOCTYPE html>
<html>
<head>
	<title>Testform</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

	<form method="post">

		<fieldset>

			<h2>Please register for our conference</h2>

			<dl class="clearfix">

				<dt><label for="name">Name</label></dt>
				<dd class="text"><input type="text" id="name" name="name" value="<?php echo htmlentities($name); ?>" class="input-text" />
				<?php echo  $message1;?>
				</dd>

				<dt><label for="email">Email</label></dt>
				<dd class="text"><input type="email" id="email" name="email" value="<?php echo htmlentities($email); ?>" class="input-text" />
				<?php echo  $message2;?>
				</dd>

				<dt><label for="company">Bedrijf</label></dt>
            	<dd class="text"><input type="text" id="company" name="company" value="<?php echo htmlentities($company); ?>" class="input-text" />
                <?php echo  $message3;?>
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
					<?php echo  $message4;?>
				</dd>

				<dt><label>Prefered course</label></dt>
				<dd>
                <?php foreach($preferences as $course){
                    ?>
                    <label for="preferences_<?php echo $course?>"><input type="radio" class="option" name="preferences" id="preferences_<?php echo $course?>" value="<?php echo $course?>"<?php if ($preferences == $course) { echo ' checked="checked"'; } ?> /><?php echo $course?></label>
                    <?php
                }
                echo $message5;
                ?>
           		</dd>

				<dt><label for="food">Food restrictions</label></dt>
            	<dd class="text"><textarea name="food" id="food" rows="5" cols="40"><?php echo htmlentities($food); ?></textarea></dd>

				<dt class="full clearfix" id="lastrow">
					<input type="submit" id="btnSubmit" name="btnSubmit" value="Send" />
					<input type="hidden" name="moduleAction" value="processName" />
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

		// dump $_POST
		dump($_POST);
       

		?>

	</div>

</body>
</html>