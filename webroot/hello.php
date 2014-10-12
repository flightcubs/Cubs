<?php 
/**
 * This is a Cubs pagecontroller.
 *
 */
// Include the essential config-file which also creates the $cubs variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Cubs container.
$cubs['title'] = "Hello World";
 
$cubs['header'] = <<<EOD
<img class='sitelogo' src='img/cubs.png' alt='Cubs Logo'/>
<span class='sitetitle'>Filip oophp</span>
<span class='siteslogan'>Filips sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;
 
$cubs['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Cubs ser ut och fungerar.</p>
EOD;
 
$cubs['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Filip Hedberg (flightcubs@gmail.com) | <a href='https://github.com/mosbth/Cubs-base'>Cubs på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Cubs.
include(CUBS_THEME_PATH);