<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_motorcycles = array();

/* ————————————————————————————————————————————————————————— */

// to remove backslash, highlight all and hit "CMD + /"

// $array_motorcycles[] = array( //——–––––––motorcycle 1
// 	'motorcycle_nick' => 'Motorcycle Name',
// 	'description' => "Motorcycle Description",
// 	'price' => 0, 
// 	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
// 	'images' => array(
// 		'Nameofphoto.png' => 'photo1', //full width top photo
// 		'Nameofphoto.png' => 'photo2', //pair photo 1
// 		'Nameofphoto.png' => 'photo3', //pair photo 2
// 		),
// 	'specs' => array(
// 		'year' => 1972,
// 		'make' => 'yamaha',
// 		'handle bars' => 'rottweiler z-bars',
// 		'tank' => 'raw steel wasp',
// 		'frame' => 'tc bros hard tail kit',
// 		),
// 	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'XS650',
	'description' => "XS's are all about the details. From the oil tank electrical center to the leaf spring seat. No cut corners, this is a simple yet complex build. The narrow fashion of this machine makes it super fun to whip around. This yamaha is a ripper, and will definitely get some attention.",
	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112032.png' => 'photo1', //full width top photo
		'2016-04-15_3.57.20.png' => 'photo2', //pair photo 1
		'2016-04-15_3.57.35.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => '$7,995',
		'year' => 1972,
		'make' => 'yamaha',
		'handle bars' => 'rottweiler z-bars',
		'tank' => 'raw steel wasp',
		'frame' => 'tc bros hard tail kit',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'Shovelhead',
	'description' => "The shovel head motor has always been the mark of someone who truly loves what Harley has to offer. It seems that if you run into someone with a shovel that 8 out of 10 times they're the original owner. The other 2 times are probably the spike in trend over the last few years. This specific shovel has a special place in our hearts. The beauty of vintage Harley motors is each one has a soul, a unique, & often times stubborn, attitude. You can't say that about many of the newer bikes but with out a doubt. This Shovel has soul.",
	'video' => '162915972', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112116.png' => 'photo1', //full width top photo
		'2016-04-15_4.03.44.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.26.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => 'call for pricing',
		'year' => 1980,
		'make' => 'Harley Davidson',
		'motor' => 's&s 93 ci big bore kit',
		'brakes' => 'brembo brakes',
		'suspension' => 'legend air ride',
		'wheels' => '180mm front / 200mm rear',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'Deluxe',
	'description' => "I love the Deluxe. I rode this bike for a summer. Every single stop light someone will yell out their window with a compliment. We didn't veer too far from stock on this one because of what the bike already stands for. If you love classic, chrome and comfort, come fire this thing off.",
	'video' => '162915973', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112226.png' => 'photo1', //full width top photo
		'2016-04-15_4.10.46.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.59.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => '$11,995',
		'year' => 2006,
		'make' => 'Harley Davidson',
		'exhaust' => 'vance & hines big radius',
		'risers' => 'roland sands',
		'handle bars' => '18in nyc bars',
		'grips' => 'avon',
		'mileage' => '9,000',
		),
	);

/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">motorcycles loaded</span>: need to create output functions<br>';

?>