<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_motorcycles = array();

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'XS650',
	'description' => "XS's are all about the details. From the oil tank electrical center to the leaf spring seat. No cut corners, this is a simple yet complex build. The narrow fashion of this machine makes it super fun to whip around. This yamaha is a ripper, and will definitely get some attention.",
	'price' => 7995,
	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112032.png' => 'photo1', //full width top photo
		'2016-04-15_3.57.20.png' => 'photo2', //pair photo 1
		'2016-04-15_3.57.35.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'year' => 1972,
		'make' => 'yamaha',
		'handle bars' => 'rottweiler z-bars',
		'tank' => 'raw steel wasp',
		'frame' => 'tc bros hard tail kit',
		),
	);

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'Shovelhead',
	'description' => "The shovel head motor has always been the mark of someone who truly loves what Harley has to offer. It seems that if you run into someone with a shovel that 8 out of 10 times they're the original owner. The other 2 times are probably the spike in trend over the last few years. This specific shovel has a special place in our hearts. The beauty of vintage Harley motors is each one has a soul, a unique, & often times stubborn, attitude. You can't say that about many of the newer bikes but with out a doubt. This Shovel has soul.",
	'price' => 'call for pricing',
	'video' => '162915972', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112116.png' => 'photo1', //full width top photo
		'2016-04-15_4.03.44.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.26.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'year' => 1980,
		'make' => 'Harley Davidson',
		'motor' => 's&s 93 ci big bore kit',
		'brakes' => 'brembo brakes',
		'suspension' => 'legend air ride',
		'wheels' => '180mm front / 200mm rear',
		),
	);

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'Deluxe',
	'description' => "I love the Deluxe. I rode this bike for a summer. Every single stop light someone will yell out their window with a compliment. We didn't veer too far from stock on this one because of what the bike already stands for. If you love classic, chrome and comfort, come fire this thing off.",
	'price' => 11995,
	'video' => '162915973', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112226.png' => 'photo1', //full width top photo
		'2016-04-15_4.10.46.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.59.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'year' => 2006,
		'make' => 'Harley Davidson',
		'exhaust' => 'vance & hines big radius',
		'risers' => 'roland sands',
		'handle bars' => '18in nyc bars',
		'grips' => 'avon',
		'mileage' => '9,000',
		),
	);

// $array_motorcycles[] = array( //——–––––––motorcycle 1
// 	'make' => '1982 something', //Excess Steel tank
// 	'motorcycle_nick' => 'motor quad',
// 	'description' => 'Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
// 	'price' => 4500,
// 	'video' => '23181483', // IF(value is=='http://vimeo.com/notset'){don't show video area}
// 	'images' => array(
// 		'_library/img/motorcycles/img_2484_1.jpg' => 'photo1', //full width top photo
// 		'_library/img/motorcycles/img_2484_2.jpg' => 'photo2', //pair photo 1
// 		'_library/img/motorcycles/img_2484_3.jpg' => 'photo3', //pair photo 2
// 		),
// 	'specs' => array(
// 		'year' => 1982,
// 		'make' => 'make name',
// 		'engine' => 'engine name',
// 		'other' => 'other specs',
// 		),
// 	);

// $array_motorcycles[] = array( //——–––––––motorcycle 1
// 	'make' => '1982 something', //Excess Steel tank
// 	'motorcycle_nick' => 'five motor',
// 	'description' => 'Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
// 	'price' => 4500,
// 	'video' => '70901373', // IF(value is=='http://vimeo.com/notset'){don't show video area}
// 	'images' => array(
// 		'_library/img/motorcycles/img_2489_1.jpg' => 'photo1', //full width top photo
// 		'_library/img/motorcycles/img_2489_2.jpg' => 'photo2', //pair photo 1
// 		'_library/img/motorcycles/img_2489_3.jpg' => 'photo3', //pair photo 2
// 		),
// 	'specs' => array(
// 		'year' => 1982,
// 		'make' => 'make name',
// 		'engine' => 'engine name',
// 		'other' => 'other specs',
// 		),
// 	);

// $array_motorcycles[] = array( //——–––––––motorcycle 1
// 	'make' => '1982 something', //Excess Steel tank
// 	'motorcycle_nick' => '6 motor',
// 	'description' => 'last Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
// 	'price' => 4500,
// 	'video' => '26251563', // IF(value is=='http://vimeo.com/notset'){don't show video area}
// 	'images' => array(
// 		'_library/img/motorcycles/img_2494_1.jpg' => 'photo1', //full width top photo
// 		'_library/img/motorcycles/img_2494_2.jpg' => 'photo2', //pair photo 1
// 		'_library/img/motorcycles/img_2494_3.jpg' => 'photo3', //pair photo 2
// 		),
// 	'specs' => array(
// 		'year' => 1982,
// 		'make' => 'make name',
// 		'engine' => 'engine name',
// 		'other' => 'other specs',
// 		),
// 	);

/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">motorcycles loaded</span>: need to create output functions<br>';

?>