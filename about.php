<?php
session_start();

//Include MySQL config info
include("config.php");
include("header.php"); //Universal Start of Page

//Body of Page
echo "<h1>HackbookRU, Web Volnurability tester</h1>
<p> This site is used for testing and observing volnurabilites. Users should have a good understanding of the web and tools
to help examine sites. </p> 
";
//End of page
include ("footer.php");
?>
