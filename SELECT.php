<?php
	include 'BSQL_CONFIG.PHP';
	
	class SQuery{
		
		//--------------- SELECT START --------------------
		function isSelectAssoc($sql){
			$q=mysqli_query($GLOBALS['conn'],$sql);
				while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
				return $toData;
		}
		
		function isSelectArray($sql){
			$q=mysqli_query($GLOBALS['conn'],$sql);
				while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
				return $toData;
		}
		
		function isSelectbyGroup($sql, $g){
		$q=mysqli_query($GLOBALS['conn'],$sql.' GROUP BY '.$g);
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		function isSelectbyOrder($sql, $o, $s){
		$q=mysqli_query($GLOBALS['conn'],$sql." ORDER BY $o $s");
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		function isSelectbyLike($sql, $c, $l){
		$q=mysqli_query($GLOBALS['conn'],$sql." WHERE $c LIKE '$l'");
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		function isSelectbyWhere($sql, $o, $v){
		$q=mysqli_query($GLOBALS['conn'],$sql." WHERE $o='$v'");
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		function isSelectbyWhereAnd($sql, $arr){
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
		$q=mysqli_query($GLOBALS['conn'],$sql." WHERE $d");
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		function isSelectbyWhereOr($sql, $arr){
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
		$q=mysqli_query($GLOBALS['conn'],$sql." WHERE $d");
		while($data=mysqli_fetch_array($q)){
				$toData[]=$data;
			}
			return $toData;
		}
		
		//--------------- SELECT END --------------------
		
	}
	
?>