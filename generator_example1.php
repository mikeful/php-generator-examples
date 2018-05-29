<?php
// Generator with regular function
function numbers($max = 1) {
	foreach (range(0, $max) as $number) {
		yield $number;
	}
}

foreach (numbers(10) as $item) {
	print $item . "\n";
}

// Generator with anonymous function
$numbers = function($max = 1) {
	foreach (range(0, $max) as $number) {
		yield $number;
	}
	//
};

foreach ($numbers(10) as $item) {
	print $item . "\n";
}

// Generator with anonymous function in foreach-loop
foreach ((function($max = 1) {
	foreach (range(0, $max) as $number) {
		yield $number;
	}
})(10) as $item) {
	print $item . "\n";
}
