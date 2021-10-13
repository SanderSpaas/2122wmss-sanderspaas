<?php

/**
 * opgave 3
 * @author Sander Spaas
 */

$baseDirectory = __DIR__;
$baseDirectoryForIcons = __DIR__  . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR;
$items = [];

if (isset($_GET['path'])) {
	$baseDirectory .= DIRECTORY_SEPARATOR . $_GET['path'];
}

if (stristr($baseDirectory, '..')) {
	die('not welcome here');
}

if (!is_dir($baseDirectory)) {
	die('folder does not exist');
}

//url = opgave_3.php?path=images
//baseDirectory = __DIR__ . 'images';
$directoryIterator = new DirectoryIterator($baseDirectory);
foreach ($directoryIterator as $item) {
	$size = $item->isFile() ? $item->getSize() : null; //in case the item is a file
	$expectedIcon = $baseDirectoryForIcons . $item->getExtension() . '.gif';

	$icon = 'default.gif';

	if (file_exists($expectedIcon)) {
		$icon = $item->getExtension() . '.gif';
	}
	if ($item->isDir()) {
		$icon = 'folder.gif';
	}
	$items[] = [
		'path' => $item->getPathname(),
		'size' => $size,
		'name' => $item->getFilename(),
		'extension' => $item->getExtension(),
		'icon' =>  $icon,
	];
}

?>

<!doctype html>
<html>

<head>
	<title>File Browser</title>
	<meta charset="utf-8" />
	<link rel="site icon" href="icons/folder.png" type="image/x-icon">
	<style>
		ul {
			margin: 0;
			padding: 0;
		}

		li {
			list-style: none;
			display: block;
			height: 24px;
			line-height: 24px;
			font-family: monospace;
		}

		li:nth-child(2n) {
			background: rgba(0, 0, 0, 0.05);
		}

		li:hover {
			background: #c2e1ff;
		}

		li img {
			margin-right: 4px;
			position: relative;
			top: 4px;
		}
	</style>
</head>

<body>

	<h1>Browsing <code><img src="icons/folder.gif"/> files/images <img src="icons/folder.gif"/></code></h1>
	<?php
	echo "<li><a href=" . basename($_SERVER['PHP_SELF'])  . "><img src=" . "icons/folder.gif" . " />Create a folder</a></li>" . PHP_EOL;
	foreach ($items as $item) {
		if (is_dir($item['path'])) {
			if ($item['name'] === "..") {
			} else if ($item['name'] === ".") {
				echo "<li><a href=" . basename($_SERVER['PHP_SELF'])  . "?path=" . $item['name'] . "><img src=" . "icons/up.gif" . " />" . $item['name'] . " <em>" . $item['size'] . "</em></a></li>" . PHP_EOL;
			} else {
				echo "<li><a href=" . basename($_SERVER['PHP_SELF'])  . "?path=" . $item['name'] . "><img src=" . "icons/" . $item['icon'] . " />" . $item['name'] . " <em>" . $item['size'] . "</em></a></li>" . PHP_EOL;
			}
		} else {
			echo "<li><a href=" . $_GET['path']	. DIRECTORY_SEPARATOR . $item['name'] . " download><img src=" . "icons/" . $item['icon'] . " />" . $item['name'] . " <em>" . $item['size'] . "</em></a></li>" . PHP_EOL;
			// echo basename($_SERVER['PHP_SELF'])  . "?path=" . $item['name']; 
		}
	}
	?>
	<!---
	<ul>
		<li><a href="opgave_3.php?path=files"><img src="icons/up.gif" />..</a></li>
		<li><a href="opgave_3.php?path=files%2Fimages%2Ficons"><img src="icons/folder.gif" />icons</a></li>
		<li><a href="opgave_3.php?path=files%2Fimages%2Fthumbnails"><img src="icons/folder.gif" />thumbnails</a></li>
		<li><a href="files/images/test.jpg"><img src="icons/jpg.gif" />test.jpg</a> <em>(2kB)</em></li>
		<li><a href="files/images/test2.jpg"><img src="icons/jpg.gif" />test2.jpg</a> <em>(4kB)</em></li>
		<li><a href="files/images/test.zip"><img src="icons/zip.gif" />test.zip</a> <em>(20kB)</em></li>
	</ul>
-->
</body>

</html>