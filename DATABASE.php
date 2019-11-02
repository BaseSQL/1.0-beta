<?php
	include 'BSQL_CONFIG.PHP';
	
	class DBQuery{
		function isCreateDB($db){
		$q=mysqli_query($GLOBALS['conn'],"CREATE DATABASE $db");
			if($q){
				return true;
			} else {
				return false;
			}
		}
		
		function isDropDB($db){
		$q=mysqli_query($GLOBALS['conn'],"DROP DATABASE $db");
			if($q){
				return true;
			} else {
				return false;
			}
		}
	}
	
?>