<?php 
	$id = $_POST['id'];

	if(is_readable('assets/todos.json')){

	$todos = file_get_contents('assets/todos.json');
	$todos = json_decode($todos,true);

	array_splice($todos, $id, 1);

	$file = fopen('assets/todos.json','w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);

	}

 ?>