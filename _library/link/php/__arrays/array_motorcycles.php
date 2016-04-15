<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_motorcycles = array();

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( //——–––––––motorcycle 1
	'motorcycle_nick' => 'XS650',
	'description' => 'one Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
	'price' => 7995,
	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'_library/img/motorcycles/img_2453_1.jpg' => 'photo1', //full width top photo
		'_library/img/motorcycles/img_2453_2.jpg' => 'photo2', //pair photo 1
		'_library/img/motorcycles/img_2453_3.jpg' => 'photo3', //pair photo 2
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
	'description' => 'two Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
	'price' => 'call for pricing',
	'video' => '53363288', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'_library/img/motorcycles/img_2474_1.jpg' => 'photo1', //full width top photo
		'_library/img/motorcycles/img_2474_2.jpg' => 'photo2', //pair photo 1
		'_library/img/motorcycles/img_2474_3.jpg' => 'photo3', //pair photo 2
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
	'description' => 'three Haris suntessum que odita volest, consequ atibus. Piet et apidit quaeperit inciet quiam, quo berepel endipid quos rernam fugiam quiae. Nequos vercima volore opturec tionsequibus expel illiqui resti sum doluptat aut voles et moluptam, ipisqui blab ius sim illant omnistion cullore venet maximus abo. Nem num viti vent quid que volori at. Veniaernam ipit faccusant. Ehendio. Del ma vellorem. Nam faceprae pa quis as aut mint. Facepro vitisqui aceationsed mo molorest ma dolore, intotae qui di',
	'price' => 11995,
	'video' => '76355633', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'_library/img/motorcycles/img_2483_1.jpg' => 'photo1', //full width top photo
		'_library/img/motorcycles/img_2483_2.jpg' => 'photo2', //pair photo 1
		'_library/img/motorcycles/img_2483_3.jpg' => 'photo3', //pair photo 2
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