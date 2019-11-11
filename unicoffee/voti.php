<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/wp-load.php";
   include_once($path);

$ip=$_SERVER['REMOTE_ADDR'];
$art=$_POST["art"];
$voto=$_POST["voto"];

$conta = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}art_vote where ip='$ip' and art=$art");

if ($conta==0){
	$wpdb->insert("{$wpdb->prefix}art_vote",array('art'=>$art,'val'=>$voto,'ip'=>$ip));
}else{
	$wpdb->update("{$wpdb->prefix}art_vote",array('val'=>$voto),array('art'=>$art,'ip'=>$ip));
}
?>