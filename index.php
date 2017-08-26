
<!DOCTYPE html>
<html>
	<head>
		<title>Online Course Aggregator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<style>
		
		
		
		.navbar{
			background-color:#0086c3;
			color:#fff;
			
			font-size:14px;
			padding: 10px 15px;
			margin-bottom:0px;
			letter-spacing:3px;
			border:0;
			border-radius:0;
			font-family: "Lucida Console", Times, serif;
		}
		table,body
		{
			
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
		}
		
		.navbar li a, .navbar .navbar-brand 
		{
      color: #fff !important;
		}
		.navbar-nav li a:hover, .navbar-nav li.active a 
		{
			color: #0086c3 !important;
			background-color: #fff !important;
		}
		.jumbotron{
			background-color:#29b6f6;
			padding: 60px 10px;
		}
		h2{
			
			padding-bottom:20px;
		}
		th{
			
			font-size:14px;
		}
		
		
		</style>

	</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Online Course Aggregator</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="https://www.coursera.org/">Coursera</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="jumbotron text-center">
		
		<h2>Welocme to online Course Aggregator</h2>
		<div class="row">
		<form method="post" action="index.php" class="form-inline">
			<div class="form-group">
			<input class="btn btn-lg btn-info"type="submit" value="View Courses" name="view_courses">
			</div>
			<input class="btn btn-lg btn-info" type="submit" value="View saved Courses" name="saved_courses">
		</form>
		</div>
	</div>
</body>

</html>


<?php

$conn=mysql_connect('localhost','root','');
mysql_select_db('course_agg');

error_reporting(0);

if(isset($_POST["view_courses"]))
{
$content =     file_get_contents("https://api.coursera.org/api/courses.v1");
$result  = json_decode($content);
echo "<div class='container'><table class='table table-hover table-responsive' width='100%'><tr><th>ID</th><th>Name</th><th>Course Type</th><th>Save</th></tr>";
for($i=0;$i<sizeof($result->elements);$i++){
	
print_r("<tr><form method='post' action='index.php'><td><input type='hidden' name='id' value='".$result->elements[$i]->id."'>".$result->elements[$i]->id." </td><td><input type='hidden' name='names' value='".$result->elements[$i]->name."'>".$result->elements[$i]->name." </td><td> <input type='hidden'  name='type' value='".$result->elements[$i]->courseType."'>".$result->elements[$i]->courseType."</td><td><input class='btn btn-sm btn-primary' type='submit' value='Save' name='submit1'></td></form></tr>");
}
echo "</table></div>";
}


$id=$_POST["id"];
$names=$_POST["names"];
$course_type=$_POST["type"];



if(isset($_POST["submit1"]))
{
		mysql_query("INSERT INTO courses VALUES('$id','$names','$course_type')");
		echo "Saved ".$id."  ".$names."    ".$course_type;
}

if(isset($_POST["saved_courses"]))
{
	
		$query=mysql_query("SELECT * FROM courses");
		
		$num_rows=mysql_num_rows($query);
		
		if($num_rows!=0)
		{
			echo "<div class='container'><table class='table table-hover table-responsive' width='70%'><tr><th>ID</th><th>Name</th><th>Course Type</th></tr>";
			while($row=mysql_fetch_assoc($query))
			{
				
				echo "
				
				
				<tr><td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['type']."</td></tr>
				
				";
				
			}
			echo "</table></div>";
			
		}
}
?>


