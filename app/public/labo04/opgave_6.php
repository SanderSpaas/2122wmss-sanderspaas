<?php

/**
 * Lab 03, Exercise 1 & 2 — Start File
 * @author Sander Spaas
 */

// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);

$basePath = __DIR__ . DIRECTORY_SEPARATOR . 'images'; // check the location on disk!
$baseUrl = 'images'; // images
$images = []; // An array which will hold all our images
$extention = ['jpg'];
$counter = 1;

// Main code

// @TODO Open directory and captions file using some SPL classes
$directory = new DirectoryIterator($basePath);
$captions = new SplFileObject($basePath . DIRECTORY_SEPARATOR . 'captions.txt');
// @TODO loop directory
foreach ($directory as $file) {
	if (!$file->isFile() || !in_array($file->getExtension(), $extention, true) && !$file->isDot() && !$file->isDir()) {
	} else {
		$images[] = [
			'url' => $baseUrl . DIRECTORY_SEPARATOR . $file->getFilename(),
			'caption' => trim($captions->current())
		];
		$captions->next();
        $counter++;
	}
}

// If it's a '.jpg', add it onto an array named $images
// Use an associative array so you can store the filename, and caption

$note = isset($_POST['note']) ? (string) $_POST['note'] : '';
$moduleAction = isset($_POST['moduleAction']) ? (string) $_POST['moduleAction'] : '';


if (isset($_FILES['image']) && ($_FILES['image']['error'] === UPLOAD_ERR_OK)) {

    if (in_array((new SplFileInfo($_FILES['image']['name']))->getExtension(), ['jpg'])) {
        $moved = @move_uploaded_file($_FILES['image']['tmp_name'], '../labo04/images/' . $_FILES['image']['name']);
        if ($moved) {
            rename($baseUrl . DIRECTORY_SEPARATOR . $_FILES['image']['name'], $basePath. DIRECTORY_SEPARATOR. $counter.".jpg");
            $counter++;
            file_put_contents('../labo04/images/captions.txt', PHP_EOL.$note, FILE_APPEND);
            $note = '';
        } else {
            echo('<p>Error while saving file in the uploads folder</p>');
        }
    } else {
        echo('<p>Invalid extension. Only .jpg, allowed</p>');
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

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

    <fieldset>

        <h2>Add something to your page</h2>

        <dl class="clearfix">
            <input type="hidden" name="moduleAction" value="processName">

            <dt><label for="image">Image</label></dt>
            <dd><input type="file" id="image" name="image" value=""/>
            </dd>

            <dt><label for="note">Note</label></dt>
            <dd class="text"><textarea name="note" id="note" rows="5" cols="40"><?php echo htmlentities($note); ?></textarea></dd>


            <dt class="full clearfix" id="lastrow">
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Send" />
            </dt>

        </dl>

    </fieldset>

</form>


<!doctype html>
<html>

<head>
	<title>Images</title>
	<meta charset="utf-8" />
	<style>
		body {
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", sans-serif;
			font-weight: 300;
			font-size: 14px;
			line-height: 1.2;
			background: #FCFCFC;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		li {
			display: block;
			width: 310px;
			height: 310px;
			float: left;
			border: 1px solid #ccc;
			margin: 20px;
			position: relative;
			box-shadow: 0 0 20px #CCC;

		}

		li img {
			max-width: 100%;
		}

		li .caption {
			display: block;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			padding: 5px;
			color: #000;
			background: rgba(255, 255, 255, 0.9);
			border-top: 1px solid #ccc;
			text-shadow: 1px 1px 1px #fff;
		}

		li:hover {
			box-shadow: 0 0 20px #999;
		}
	</style>
</head>

<body>
	<ul>
		<?php
		foreach ($images as $image) {
			echo '<li><img src="'.$image['url'].'">'.$image['caption'].'</li>' . PHP_EOL;
		}
		?>
	</ul>
</body>

</html>