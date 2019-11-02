<?php
	include 'BSQL_CONFIG.php';
	
	class TBQuery{
		function isCreateTB($db, $arr){
		foreach($arr as $key=>$value)
		{
		$keys[]=$key;
		}
		$i=0;
		foreach($arr as $value)
		{
			
		$v[]="".$keys[$i]." ".$value."";
		$i=$i+1;
		}
		$d=implode(", ",$v);
		$q=mysqli_query($GLOBALS['conn'],"CREATE TABLE $db ($d);");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDropTB($db){
		$q=mysqli_query($GLOBALS['conn'],"DROP TABLE $db");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isTruncateTB($db){
		$q=mysqli_query($GLOBALS['conn'],"TRUNCATE TABLE $db");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDropTBCol($db, $c){
		$q=mysqli_query($GLOBALS['conn'],"ALTER TABLE $db DROP COLUMN $c");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isAddTBCol($db, $c, $t){
		$q=mysqli_query($GLOBALS['conn'],"ALTER TABLE $db ADD $c $t");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isModifyTBCol($db, $c, $t){
		$q=mysqli_query($GLOBALS['conn'],"ALTER TABLE $db ALTER COLUMN $c $t");
			if($q){
				return true;
			} else {
				return false;
			}
		}
	}
	
?>