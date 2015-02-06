<html>
<head>
	<title>Eazy Table Example</title>
</head>
<body>
<?php

require_once 'table.php';

$tbl=new Table;


$table=[
	'header'=>['ID', 'Name', 'Department'],
	'data'=>[
		[2, 'Nahid', 'CSE'],
		[3, 'Firoz', 'CSE'],
		[4, 'Jannat', 'BBA'],
		[5, 'Bijoy', 'CSE']
	]
];





$tbl->make($table, ['border'=>1,'width'=>200]);

?>
</body>
</html>