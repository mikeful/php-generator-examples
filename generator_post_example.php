<?php
// Generator function loading and displaying list of posts with different templates
$postIds = [123, 234, 345, 456, 567, 678, 789];

$postHandler = function($idList = []) {
	if (empty($idList)) {
		return;
	}

	$firstPost = array_shift($idList);
	// TODO Fetch post from database here
	yield '<div class="top-featured">' . $firstPost . '</div>';

	$secondPost = array_shift($idList);
	// TODO Fetch post from database here
	yield '<div class="featured">' . $secondPost . '</div>';

	foreach ($idList as $otherPost) {
		// TODO Fetch post from database here
		yield '<div class="regular-post">' . $otherPost . '</div>';
	}
};

foreach ($postHandler($postIds) as $item) {
	print $item . "\n";
}
