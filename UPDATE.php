<?php
	include 'BSQL_CONFIG.PHP';
	
	class UQuery{
		
		function isUpdateSelf($q){
		$q=mysqli_query($GLOBALS['conn'],"$q");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isUpdateAll($t, $c, $v){
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $c='$v'");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isUpdateLike($sql, $c, $v, $cc, $l){
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $c='$v' WHERE $cc LIKE '$l'");
		if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isUpdateWhere($t, $c, $v, $cc, $vv){
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $c='$v' WHERE $cc='$vv'");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isUpdatesWhere($t, $arr, $cc, $vv){

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
		$d=implode(", ",$v);
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $d WHERE $cc='$vv'");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isUpdatesLike($t, $arr, $c, $v){

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
		$d=implode(", ",$v);
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $d WHERE $c LIKE '$v'");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		/*function isUpdatesAndWhere($t, $arr, $arr_){
		$data=implode(", ",$arr);

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
		
		$data_=implode(", ",$arr_);

		foreach($arr_ as $key=>$value)
		{
		$keys_[]=$key;
		}
		$i_=0;
		foreach($arr_ as $value)
		{
			
		$v_[]="".$keys_[$i]."='".$value."'";
		$i_=$i+1;
		}
		
		$d=implode(", ",$v);
		$dd=implode(" AND ",$v_);
		
		echo "UPDATE $t SET $d WHERE $dd";
		$q=mysqli_query($GLOBALS['conn'],"UPDATE $t SET $d WHERE $dd");
			if($q){
				return true;
			} else {
				return false;
			}
		}*/
	}
	
?>