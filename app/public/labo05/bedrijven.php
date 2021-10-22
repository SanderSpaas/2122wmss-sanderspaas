<?php

/**
 * Lab 05 — Start from this version
 * Companies
 * @author Sander Spaas
 */

require_once('../../vendor/autoload.php');
require_once('../../config/database.php');
require_once('../../src/Services/DatabaseConnector.php');



$connection = \Services\DatabaseConnector::getConnection();
// connect() is for testing, and NOT required before querying
// connect() returns    TRUE if the connection was successfully established
//                      FALSE if the connection is already open
$result = $connection->connect();
if ($result) {
    echo 'Connection was successfully established';
}

// build SQL query depending on parameters (sort, search)
$result = $connection->query('SELECT * FROM companies');
var_dump($result);

// execute query and fetch result

?>
<!DOCTYPE html>
<html>

<head>
    <title>Voka - bedrijfslijst</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.poptrox.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
    <script src="js/main.js"></script>
</head>

<body id="top">

    <!-- Header -->
    <header id="header">
        <h1><a href="#"><strong>voka</strong></a></h1>
        <h1>Vlaams netwerk van ondernemingen</h1>
    </header>

    <!-- Main -->
    <div id="main">
        <!-- Welcome -->
        <section id="welcome">
            <header class="major">
                <h2>Overzicht bedrijven</h2>
            </header>
            <p>Hieronder vindt u een overzicht van alle grote bedrijven in Belgi&euml;.</p>
            <form method="get" action="bedrijven.php">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)"></div>
                    <div class="3u 12u$(xsmall)">
                        <input type="text" name="search" id="search" value="" placeholder="Zoekterm" />
                    </div>
                    <div class="3u 12u$(xsmall)">
                        <input type="submit" value="Zoeken" class="special fit small" style="height: 3.4em" />
                    </div>
                </div>
            </form>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Naam &nbsp; <a href="#" style="border-bottom: 0;">&#9660;</a>&nbsp;<a href="#" style="border-bottom: 0;">&#9650;</a></th>
                            <th>Straat en nummer</th>
                            <th>Postcode en gemeente &nbsp; <a href="#" style="border-bottom: 0;">&#9660;</a>&nbsp;<a href="#" style="border-bottom: 0;">&#9650;</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>in te vullen</td>
                            <td>in te vullen</td>
                            <td>in te vullen</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="http://www.events.be/" class="icon fa-globe"><span class="label">Website</span></a></li>
            <li><a href="mailto:info@events.be" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; <a href="http://www.ikdoeict.be/" title="IkDoeICT.be">IkDoeICT.be</a></li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>



</body>

</html>