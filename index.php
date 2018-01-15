<?php

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP To-Do List</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	 <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body class="yellow lighten-2">

      <div class="row main valign-wrapper">
        <div class="col s12 m12 main-container">
          <div class="card deep-purple lighten-2">
			<div class="center"><h2>To-do list<i id="showNew" class="fa fa-plus-circle"></i></h2></div>
			<input class="deep-purple lighten-3 center showInput" id="newTask" type="text" placeholder="Add New Task" hidden>
			<ul class="collection">
				<?php 
				 foreach ($todos as $key => $todo) {

				 	if ($todo['done']===false)
						echo '<li class="collection-item" id='.$key.'><span><i class="fa fa-window-close fa-2x"></i></span>'.$todo['tasks'].'</li>';
				 	
					else
						echo '<li class="collection-item" id='.$key.' class="completed"><span><i class="fa fa-window-close fa-2x"></i></span>'.$todo['tasks'].'</li>';
					
				 };

				?>
			</ul>
          </div>
        </div>
      </div>

	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/todos.js"></script>


</body>
</html>