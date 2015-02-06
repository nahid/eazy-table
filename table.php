<?php
class Table{

	protected function makeHtmlAttr(array $value) {
		if (is_array($value)) {
			$vals = '';
			foreach ($value as $key => $val) {
				$vals .= $key.'="'.$val.'" ';
			}

			return $vals;
		}
	}

	public function make(array $data, $config = array('border' => 1)){
		$attribute=!is_null($config)?$this->makeHtmlAttr($config):'';
		echo '<table '.$attribute.'>'."\n";
		echo '<tr>';
		foreach($data['header'] as $header){
			echo '<th>'.$header.'</th>';
		}
		echo '</tr>'."\n";
			foreach($data['data'] as $row){
				if(is_array($row)){
					echo '<tr>';
					foreach($row as $data){
						echo '<td>'.$data.'</td>';
					}
					
					echo '</tr>'."\n";
				}
			}

		echo '</table>';
	}
}


$tbl=new Table;


$table=[
	'header'=>['ID', 'Name', 'Dept'],
	'data'=>[
		[2, 'Nahid', 'CSE'],
		[3, 'Firoz', 'CSE'],
		[4, 'Jannat', 'BBA'],
		[5, 'Bijoy', 'CSE']
	]
];





$tbl->make($table, ['border'=>1,'width'=>200]);



