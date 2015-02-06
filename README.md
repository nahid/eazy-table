eazy-table
==========

A PHP library for making a table

How to use
--------------

Eazy Table is too easy to use. Its a basic PHP table maker library.

to use it at first you have to include table.php file in your desire place

    require_once 'table.php';

after including the file you have to initialize the class 

    $tbl=new Table;

Then you are ready to use it.

For making html table you have to use make() method 

> make($data[, $config])
> 

 - $data - is an array. and it contain two values *header* and *data*. *header* and *data* are the key of the values. Its fixed naming so you can not change the key name.
 - $config - is an array and its optional. If you want to change table attribute then you can define from it.

Now We define all data to the $data variable

    $data=[
	'header'=>['ID', 'Name', 'Department'],
	'data'=>[
		[2, 'Nahid', 'CSE'],
		[3, 'Firoz', 'CSE'],
		[4, 'Jannat', 'BBA'],
		[5, 'Bijoy', 'CSE']
	]];

and for the change table attributes we assign values in *$conf* array

    $conf=['border'=>1,'width'=>200];

and finally we make the table by using

    $tbl->make($data, $conf);



after using it its look like 
![enter image description here](https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/1507741_785972954814983_3551661455207462961_n.jpg?oh=addd23c0353e5f94768fe399aeae503e&oe=554F2182)


thats it 

Thank you :)