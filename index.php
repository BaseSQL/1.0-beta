<?php

include 'DELETE.php';

$x=new DQuery;


$mydata=$x->isDeleteWhere("demo","id","1");
print_r($mydata);

?>