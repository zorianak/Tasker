<!--<?php session_start();
/* this PHP code will basically connect to the MySQL DB and then 
grab the important information that we need to display for the
week view.
*/

include './includes/dbconnect.php';

?>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tasker App</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="holder">
	<h1 class="semester">Spring 2020</h1>
	
	<div class="nav">
		<ul class="navigation">
			<li>ECS Home</li>
			<li>New Task</li>
			<li>All Tasks</li>
			<li>Task by User</li>
			<li>Tasks by Week</li>
			<li>Tasks by Semester</li>
		</ul>
	</div>
    
    <form id="addstuff">
    
    <div class="field">
    	<label id="taskname">Name:</label>
        <input id="taskname" type="text" />
    </div>
    
    <div class="field">
    	<label id="frequency">Frequency:</label>
        <select id="frequency">
        	<option name="daily">Daily</option>
            <option name="weekly">Weekly</option>
            <option name="semesterly">Semesterly</option>
            <option name="annually">Annually</option>
            <option name="none">None</option>
        </select>
    </div>
    
    <div class="field">
    	<label id="description">Description:</label>
        <input id="description" type="textarea" cols="40" rows="4" />
    </div>
    
    <div class="field">
    	<label id="description">Description</label>
        <select id="description">
        	<option name="daily">none</option>
        </select>
    </div>
    
    </form>
    
    <? print_r($usernames) ?>
    
	<div style="clear:both;"></div>
	
	
</div>
</body>
</html>