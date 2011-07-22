<?php session_start();
/* this PHP code will basically connect to the MySQL DB and then 
grab the important information that we need to display for the
week view.
*/

?>

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
	
	<table colspan="8" class="mainTable">
		<tr>
			<td colspan="1" class="taskID heading mainTD">Task Name</td>
			<td colspan="1" class="taskName heading mainTD">1</td>
			<td colspan="1" class="taskStatus heading mainTD">2</td>
			<td colspan="1" class="taskPriority heading mainTD">3</td>
			<td colspan="1" class="taskCategory heading mainTD">4</td>
			<td colspan="1" class="taskAdded heading mainTD">5</td>
			<td colspan="1" class="taskAdded heading mainTD">6</td>
			<td colspan="1" class="taskAdded heading mainTD">7</td>
			<td colspan="1" class="taskAdded heading mainTD">8</td>
			<td colspan="1" class="taskAdded heading mainTD">9</td>
			<td colspan="1" class="taskAdded heading mainTD">10</td>
			<td colspan="1" class="taskAdded heading mainTD">11</td>
			<td colspan="1" class="taskAdded heading mainTD">12</td>
			<td colspan="1" class="taskAdded heading mainTD">13</td>
			<td colspan="1" class="taskAdded heading mainTD">14</td>
			<td colspan="1" class="taskAdded heading mainTD">15</td>
		</tr>
	
		<tr>
			<td colspan="1" class="taskID mainTD">Delicious Food</td>
			<td colspan="1" class="taskName mainTD">Complete</td>
			<td colspan="1" class="taskStatus mainTD">Incomplete</td>
			<td colspan="1" class="taskPriority mainTD">Incomplete</td>
			<td colspan="1" class="taskCategory mainTD">Incomplete</td>
			<td colspan="1" class="taskAdded mainTD">Incomplete</td>
		</tr>
	
	</table>
</div>
</body>
</html>