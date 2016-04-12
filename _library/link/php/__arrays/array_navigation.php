<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_navigation = array();

/* ————————————————————————————————————————————————————————— */

$array_navigation['index'] = array(
	"description" => $loremipsum,
	"subnav" => array(
		),
	);
$array_navigation['about'] = array(
	"description" => $loremipsum,
	"subnav" => array(
		),
	);
$array_navigation['event'] = array(
	"description" => $loremipsum,
	"subnav" => array(
		),
	);
$array_navigation['motorcycles'] = array(
	"description" => $loremipsum,
	"subnav" => array(
		),
	);
// $array_navigation['contact'] = array(	"description" => $loremipsum,	);

/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">navigation loaded</span>: need to create output functions<br>';

?>