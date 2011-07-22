<?php

/*this PHP code will basically connect to the MySQL DB and then 
grab the important information that we need to display for the
week view.*/


session_start();

//gotta grab our stuff!

define("MYSQL_HOST",  "athena.ecs.csus.edu");
define("MYSQL_USER",  "design_web");
define("MYSQL_PASS",  "g00d*Des!gn");
define("MYSQL_WEBTASK_DATABASE", "ecs_tasker");
define("MYSQL_CONTACT_DATABASE", "ecs_contact_db");
define("MYSQL_TASKDETAILS_TABLE", "task_details");
define("MYSQL_CONTACTDETAILS_TABLE", "contact_details");
define("WT_ADMIN_EMAIL","webupdate@ecs.csus.edu");

mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(MYSQL_WEBTASK_DATABASE) or die ("Could not connect to database ".mysql_error());


/*this PHP code will now grab our select statements*/

$usernames = "SELECT userid AND username FROM Users";

?>