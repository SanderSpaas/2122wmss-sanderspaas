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
foreach($directoryIterator as $item) {
    $size = $item->isFile()? $item->getSize() : null; //voor het geval dat het item een file is //moet niet met ternaire operator
    $expectedIcon = $baseDirectory . $item->getExtension() . '.gif';

    $icon = 'default.gif';
    if(file_exists($expectedIcon)) {
        $icon = $item->getExtension() . 'gif';
    }
    if($item ->  isDir()) {
        $icon = 'folder.gif';
    }
    $items[] = [
        'path' => $item->getPath(),
        'size' => $size,
        'name' => $item->getFilename(),
        'extension' => $item->getExtension(),
        'icon' =>  $icon,
    ];
}
print_r($items);
die();

?>

<!doctype html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8" />
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
			background: rgba(0,0,0,0.05);
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

	<h1>Browsing <code>files/images</code></h1>

	<ul>
		<li><a href="opgave_3.php?path=files"><img src="icons/up.gif" />..</a></li>
		<li><a href="opgave_3.php?path=files%2Fimages%2Ficons"><img src="icons/folder.gif" />icons</a></li>
		<li><a href="opgave_3.php?path=files%2Fimages%2Fthumbnails"><img src="icons/folder.gif" />thumbnails</a></li>
		<li><a href="files/images/test.jpg"><img src="icons/jpg.gif" />test.jpg</a> <em>(2kB)</em></li>
		<li><a href="files/images/test2.jpg"><img src="icons/jpg.gif" />test2.jpg</a> <em>(4kB)</em></li>
		<li><a href="files/images/test.zip"><img src="icons/zip.gif" />test.zip</a> <em>(20kB)</em></li>
	</ul>

</body>
</html>