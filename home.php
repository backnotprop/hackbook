<?php
include("authen.php");
include("config.php");

include("header.php"); //Universal Start of Page
$userid = $_SESSION['userid'];

echo "
<!--
	 Welcome to HackbookRU - The purposely volunerale social network
	the goal of this site is to teach you potential dangerous of the web.

	- To start out lets briefly state a problem that should be inherantly obvious.
	- Passwords. The site clearly allows simple and small passwords. This is allows a
	red flag and could lead to account harvesting. Use strong passwords!
	flag for this is: WEB-ERTX-037
	- Future hint: Do you think we encrypt our passwords?
-->
<h1>Post a Dispatch</h1><form method=\"post\" action=\"postDispatch.php\" name=\"dispatches\" onsubmit=\"return validateDispatches()\">
<textarea name=\"dispatch\" cols=\"80\" rows=\"3\">
</textarea><br>
<input type=\"submit\" value=\"Post\" />
</form><h1>My Stream</h1>
<span style=\"min-width:500px;\" id='thefeed'>
</span>
<script type = \"text/javascript\">
window.onload = function() 
{
pullTheFeed($userid);
printFriendsPageList($userid);
pullUserInfo($userid);
}
</script> "
;




include ("footer.php");
?>
