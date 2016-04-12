<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize content

this will include:

1. Facebook -> Facebook Page
2. Twitter -> Twitter Page
3. Instagram -> Instagram Page
4. Snapchat -> Internal Snapchat Page
5. Vimeo
———————————————————————————————————————————————————————————— */

$array_social_network = array();

/* ————————————————————————————————————————————————————————— */

$array_social_network[] = array(
	"network" => 'instagram',
	"link" => 'instagram.com/rottweilermoto',
	//"description" => $loremipsum,
	);
$array_social_network[] = array(
	"network" => 'twitter',
	"link" => 'twitter.com/rottweilermoto',
	//"description" => $loremipsum,
	);
$array_social_network[] = array(
	"network" => 'vimeo',
	"link" => 'vimeo.com/rottweilermoto',
	//"description" => $loremipsum,
	);
$array_social_network[] = array(
	"network" => 'facebook',
	"link" => 'facebook.com/rottweilerbikes',
	//"description" => $loremipsum,
	);
/*$array_social_network[] = array(
	"network" => 'snapchat',
	"link" => 'rottweilermotorcycles',
	//"description" => $loremipsum,
	);*/
// $array_social_network['contact'] = array(	"description" => $loremipsum,	);

/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">navigation loaded</span>: need to create output functions<br>';

?>