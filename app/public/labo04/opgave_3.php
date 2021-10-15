<?php

// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);

// Get all variables
$message = '';
$selectedUSBStick = isset($_POST['usb']) ? (string) $_POST['usb'] : '';
$USBsticks = array(
    "64GB" => 19,
    "128GB" => 33,
    "256GB" => 62
);
if ($selectedUSBStick) {
    $message = "This is not a valid answer";
}
if (array_key_exists($selectedUSBStick, $USBsticks)) {
    $message = "The price is: $" . $USBsticks[$selectedUSBStick];
}

?>
<?php if ($message) { ?>
                    <span class="message error"><?php echo $message; ?></span>
                <?php } ?>
<!DOCTYPE html>
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
            <?php echo $message; ?>
            <dl class="clearfix">

                <?php foreach ($USBsticks as $USB => $value) { ?>
                    <label for="usb_ <?php echo $USB; ?>">
                        <input type="radio" class="option" name="usb" id="usb_ <?php echo $USB; ?>" value="<?php echo $USB; ?>" <?php if ($selectedUSBStick === $USB) {echo 'checked = checked';} ?> />
                        <?php echo $USB; ?>
                    </label>
                <?php  } ?>
                <input type="hidden" name="moduleAction" value="processName">
                <input type="submit" id="btnSubmit" name="btnSubmit" value="buy">
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
        function dump($var)
        {
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
        
        ?>

    </div>

</body>

</html>