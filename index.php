<?php
	require 'vendor/autoload.php';
  use Latitude\QueryBuilder\SelectQuery;
	use Latitude\QueryBuilder\InsertQuery;
	use Latitude\QueryBuilder\UpdateQuery;
	use Latitude\QueryBuilder\DeleteQuery;
	use Latitude\QueryBuilder\Conditions;
	
	echo '<h1>Latitude Query Builder</h1>';
	
	echo '<section>'.
	'<p>A zero dependency PHP library, easy to use and can make query building fast.</p>'.
	'</section>';
	
	echo '<h2>Select</h2>'; // echo '<h2></h2>'; echo '<p></p>';
	$select = SelectQuery::make('id', 'name')
		->from('students');
	echo $select->sql() . '<br/><br/>';
	
	print_r($select->params());
	echo '<br/>';
	
	echo '<h2>Insert</h2>';
	
	
	$insert = InsertQuery::make('students', [
			'name' => 'Derek Christian',
	]);
	
	echo $insert->sql() . '<br/><br/>';
	
	
	print_r($insert->params());
	
	echo '<br/>';
	
	echo '<h2>Update</h2>';
	
$update = UpdateQuery::make('students', [
    'name' => 'Derek',
	])
	->where(
    Conditions::make('id = ?', 0)
	);

	echo $update->sql() . '<br/><br/>';
		
	print_r($update->params());
	
	echo '<h2>Delete</h2>';

	$delete = DeleteQuery::make('students')
	->where(
		Conditions::make('name AND id IS NULL')
	);
	echo $select->sql() . '<br/><br/>';
	
	print_r($delete->params());
	
?>