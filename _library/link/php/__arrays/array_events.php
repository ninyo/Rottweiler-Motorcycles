<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_events = array();

/* ————————————————————————————————————————————————————————— */


$array_events[] = array(
	'title' => 'summer event',
	'info' => array(
		'location' => array(
			'city' => 'Bremerton',
			'state' => 'WA',
			),
		'time' => '8:00PM',
		'date' => array(
			'year' => 2016,
			'month' => 6,
			'day' => 23,
			),
		),
	'img' => '_library/img/event/event_one.jpg',
	'trailer' => '', // trailer for event
	);
$array_events[] = array(
	'title' => 'spring equinox',
	'info' => array(
		'location' => array(
			'city' => 'Bremerton',
			'state' => 'WA',
			),
		'time' => '8:00PM',
		'date' => array(
			'year' => 2016,
			'month' => 3,
			'day' => 23,
			),
		),
	'img' => '_library/img/event/event_one.jpg',
	'trailer' => '', // trailer for event
	);
$array_events[] = array(
	'title' => 'branding party',
	'info' => array(
		'location' => array(
			'city' => 'Bremerton',
			'state' => 'WA',
			),
		'time' => '8:00PM',
		'date' => array(
			'year' => 2016,
			'month' => 2,
			'day' => 29,
			),
		),
	'img' => '_library/img/event/event_one.jpg',
	'trailer' => '', // trailer for event
	);
$array_events[] = array(
	'title' => 'rottweiler bikefest',
	'info' => array(
		'location' => array(
			'city' => 'Bremerton',
			'state' => 'WA',
			),
		'time' => '8:00PM',
		'date' => array(
			'year' => 2016,
			'month' => 3,
			'day' => 15,
			),
		),
	'img' => '_library/img/event/event_one.jpg',
	'trailer' => '', // trailer for event
	);


/* ————————————————————————————————————————————————————————— */



/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">events loaded</span>: need to create output functions<br>';

?>