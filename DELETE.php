<?php
	include 'BSQL_CONFIG.PHP';
	
	class DQuery{
		
		function isDeleteSelf($q){
		$q=mysqli_query($GLOBALS['conn'],"$q");
			if($q){
				return true;
			} else {
				return false;
			}
		}
	
		
		function isDeleteLike($sql, $cc, $l){
		$q=mysqli_query($GLOBALS['conn'],"DELETE FROM $t WHERE $cc LIKE '$l'");
		if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDeleteWhere($t, $cc, $vv){
		$q=mysqli_query($GLOBALS['conn'],"DELETE FROM $t WHERE $cc='$vv'");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDeleteWhereAnd($t, $arr){

		foreach($arr as $key=>$value)
		{
		$keys[]=$key;
		}
		$i=0;
		foreach($arr as $value)
		{
			
		$v[]="".$keys[$i]."='".$value."'";
		$i=$i+1;
		}
		$d=implode(" AND ",$v);
		$q=mysqli_query($GLOBALS['conn'],"DELETE FROM $t WHERE $d");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDeleteWhereOr($t, $arr){

		foreach($arr as $key=>$value)
		{
		$keys[]=$key;
		}
		$i=0;
		foreach($arr as $value)
		{
			
		$v[]="".$keys[$i]."='".$value."'";
		$i=$i+1;
		}
		$d=implode(" OR ",$v);
		$q=mysqli_query($GLOBALS['conn'],"DELETE FROM $t WHERE $d");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDeleteWhereLike($t, $arr){

		foreach($arr as $key=>$value)
		{
		$keys[]=$key;
		}
		$i=0;
		foreach($arr as $value)
		{
			
		$v[]="".$keys[$i]." LIKE '".$value."'";
		$i=$i+1;
		}
		$d=implode(" AND ",$v);
		$q=mysqli_query($GLOBALS['conn'],"DELETE FROM $t WHERE $d");
			if($q){
				return true;
			} else {
				return false;
			}
		}
	}
	
?>