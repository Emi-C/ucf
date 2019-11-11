<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/wp-load.php";
   include_once($path);

$art=$_POST["art"];
$social=$_POST["social"];

$chk = $wpdb->get_var("SELECT conta FROM {$wpdb->prefix}art_share where art=$art and social=$social");

if(!$chk) {
	$wpdb->insert("{$wpdb->prefix}art_share",array('art'=>$art,'social'=>$social,'conta'=>1));
}else{
	$conta=$chk+1;
	$wpdb->update("{$wpdb->prefix}art_share",array('conta'=>$conta),array('art'=>$art,'social'=>$social));
}
?>