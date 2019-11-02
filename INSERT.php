<?php
	include 'BSQL_CONFIG.PHP';
	
	class InQuery{
		function isInsert($t, $arr){

		foreach($arr as $key=>$value)
		{
			$keys[]=$key;
		}
		foreach($arr as $value)
		{
		 $v[]=$value;
		}
		$d=implode(", ",$keys);
		$ds= '\''.implode('\',\'', $v).'\'';
		$q=mysqli_query($GLOBALS['conn'],"INSERT INTO $t ($d) VALUES ($ds)");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isInsertAll($t, $arr){
		foreach($arr as $value)
		{
		 $v[]=$value;
		}
		$ds= '\''.implode('\',\'', $v).'\'';
		$q=mysqli_query($GLOBALS['conn'],"INSERT INTO $t VALUES ($ds)");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isInsertSelf($sql){
		$q=mysqli_query($GLOBALS['conn'],"$sql");
			if($q){
				return true;
			} else {
				return false;
			}
		}
	}
	
?>