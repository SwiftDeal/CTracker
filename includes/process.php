<?php
	require 'config.php';
    require 'vendor/autoload.php';
    require 'tracker.php';

    $arr["success"] = false;
	$headers = getallheaders();
    if (isset($headers["Clicks99Track"])) {
		if (isset($_GET['id'])) {
			$track = new LinkTracker($_GET['id']);
			if (isset($track)) {
				if ($track->is_ajax()) {
					$track->process();
					$arr["success"] = true;
				} else {
					$arr["success"] = "Not Ajax Request";
				}
			} else {
				$arr["success"] = "Link Doesnot exist";
			}
		} else {
			$arr["success"] = "No Id Provided";
		}
	} else {
		$arr["success"] = "Headers Not Set";
	}

	echo json_encode($arr);