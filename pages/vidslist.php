<?php
$vidslist = new Vidslist();
switch (@$_GET['mode'])
{
	case 'discover':
		$vids = $vidslist->getDiscoverVideos(18);
		$title = $lang['discover'];
	break;
	
	case 'subscriptions':
		if(!isset($session)) {
			header('Location: ./?page=log');
			exit();
		}

		$vids = $vidslist->getSubscriptionsVideos(100);
		$subs = $vidslist->getSubscriptions();
		$title = $lang['subscriptions'];
	break;
	
	default:
		$vids = $vidslist->getNewVideos(18);
		$title = $lang['news'];
	break;
}
?>