<?php

if(!isset($session)) {
	header("Location: ./");
	exit();
}

$vids = Manager::getVideosFromUser($session->getId());
if(empty($vids)) {
	$err = $lang['error_no_videos_uploaded'];	
}

?>