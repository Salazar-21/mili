<?php 
$data='';
$filename='sabaduky.json';
if(is_file(filename)){
	$data=file_get_contents($filename);
}
$json_arr=json_decode($data, true);
$json_arr[]=array(
   'name'=>$_REQUEST['name'],
   'edad'=>$_REQUEST['edad'],
   'identidadsecreta'=>$_REQUEST['identidadsecreta'],
   'poderes'=>$_REQUEST['poderes']
);
file_put_contents($filename, json_encode($json_arr));
header("Location:http://localhost/page/sabaduky.html");

 ?>