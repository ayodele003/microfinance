<?php
require_once('conn.php');

$xmltest = '<?xml version="1.0" encoding="UTF-8"?><entrys><func_id>1000</func_id></entrys>';


 $sql = 'BEGIN MFBUSER.MSG_ROUTER_PROC(:name, :message); END;';
 
 $stmt = oci_parse($conn,$sql);
 
 // Bind the input parameter
 oci_bind_by_name($stmt,':name',$xmltest);
 
 // Bind the output parameter
 oci_bind_by_name($stmt,':message',$message,2000);
 
 // Assign a value to the input 
 //$name = 'Harry';
 
 oci_execute($stmt);
 
 if($stmt){
	echo '<pre>', htmlentities($message), '</pre>';

}else{
	echo "failed";
}
 
 // $message is now populated with the output value
 //print "$message\n";



?>