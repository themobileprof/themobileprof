<?php
$url = "http://35.192.0.70/";
$dir = "linuxmini/";

// Sort in ascending order - this is default
$a = scandir($dir);

foreach ($a as $filename) {
	if ($filename == "." || $filename == ".." || substr($filename, 0, 2) != "wk") {
		continue;
	}
	$segments = explode("-", $filename);
	$period = substr($segments[0], 2);

	$div = explode("d", $period);
	$wk = $div[0];
	$d = $div[1];

	$week[$wk][$d] = $segments[2];
}

foreach ($week as $k => $v) {
	echo '<div class="card" style="width: 15rem; float: left; margin: 5px;">
			  <div class="card-body">
				<h5 class="card-title">Week ' . $k . '</h5>
			<ul class="list-group list-group-flush">';
	foreach ($v as $day => $title) {
		echo "<li class=\"list-group-item\"> <a href=\"" . $url . $dir . "wk" . $k . "d" . $day . "-minilinux-" . $title . "\" target=\"_blank\">Day $day ($title)</a></li>";
	}
	echo '</ul>
				  </div>
				</div>';
}
