<? /* ————————————————————————————————————————————————————————————

[function.php]

global functions to help control data output

• function snip_testimonial

• function group_header 			• function group_about_intro
• function group_holding 			• function group_about_ourteam
• function group_footer
• function group_navbar
• function group_lax
• function group_next
• function group_featured_items
• function group_events
• function group_about
• function group_member

• function group_new

———————————————————————————————————————————————————————————— */

$description_short = 'Voted Best Motorcycle Shop in Western WA. All makes, models and years. You deserve the best. Nobody\'s better at getting you on the road.';
$description_long = "Rottweiler Motorcycle Co. is your go-to motorcycle shop in Bremerton, Washington. We began production of top-of-the-line motorcycles in 2006. These motorcycles appeal to enthusiasts from all over the country as well as any walk of life. Rottweiler ensures that each motorcycle fits its owner perfectly. Rottweiler Motorcycle Co. boasts an exceptional design and fabrication team with the skills and passion that makes each motorcycle a work of art. What sets Rottweiler Motorcycle Co. apart is our high attention to detail & obsession with perfection while providing the ultimate experience for our customers. Each Rottweiler team member is an artist and master at their craft, bringing a unique style to our approach.";
$description_about = 'Recently voted the Best in Western Washington, Rottweiler Motorcycle Company began producing quality motorcycles in 2006, (in Bremerton, WA) quickly creating broad appeal to enthusiasts and new riders alike. RMC is your full service shop (all makes, all models, all years) with a highly skilled design, fabrication, and service team. We do what no one else can. Your motorcycle is a source of pride. You deserve the best, even down to the smallest details. Tire changes? Performance issues? New bars, new seat, controls or suspension? We\'ve got you. And at the end of the day if you can’t get your motorcycle down here, we’ll gladly pick it up at no charge. Anything you need or dream of for your ride, we\'ve got you. Give us a call or stop by, and we will give you a tour of our shop.';

/* ————————————————————————————————————————————————————————— */

function section_testimonial(){
	global $array_testimonial;
	/* ——————————————————————————————————
	DESCRIPTION:
	
	——————————————————————————————————- */
	shuffle($array_testimonial);
	$output = $output . '<div class="section" style="background:url(_library/img/asset/bg_testimonial.png) center no-repeat; background-size:cover;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div class="testimonial">';
				$output = $output . '<div class="bar_testimonial_title">';
					$output = $output . '<div class="gfx_quote"></div>';
					$output = $output . '<div class="bar_skinny"></div>';
					$output = $output . '<h1 class="txt_testimonial">testimonial</h1>';
					$output = $output . '<div class="bar_skinny"></div>';
					$output = $output . '<div class="gfx_quote_r"></div>';
				$output = $output . '</div>';
				foreach($array_testimonial as $testimonial){
					$count = $count +1;
					if($count == 1){
						$output = $output . '<p class="message_testimonial">'.$testimonial[testimonial].'</p>';
						}
					} //close foreach loop
				$output = $output . '<div class="quote_tag">';
					$output = $output . '<p>'.$testimonial[name].', '.titlecase($testimonial[location]).', '.strtoupper($testimonial[state]).'</p>';
				$output = $output . '</div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————- */   
	return $output;	
	} //close function
	/* ———————————————————————————————- */   
	$_section_testimonial = section_testimonial();


/* ————————————————————————————————————————————————————————— */

function section_coreteam(){
	global $array_members;
	/* ——————————————————————————————————
	DESCRIPTION:
	
	——————————————————————————————————- */
	$output = $output . '<div class="section">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div class="img_grid_team">';
				$output = $output . '<ul>';
					foreach($array_members as $id => $member){
						$output = $output . '<li>';
							$output = $output . '<div class="photo" style="background-image:url(_library/img/team/team-'.$member['name']['first'].'.jpg)"></div>';
							$output = $output . '<div class="nametag">';
								$output = $output . '<div class="name">'.$member['name']['first'].' <span class="text_reveal">'.$member['name']['last'].'</span></div>';
								$output = $output . '<div class="position">'.$member['position'].'</div>';
							$output = $output . '</div>';
						$output = $output . '</li> ';
						}
				$output = $output . '</ul>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————- */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_section_coreteam = section_coreteam();

/* ————————————————————————————————————————————————————————— */

function section_primary_title($above, $title){
	/* ——————————————————————————————————
	DESCRIPTION:
	
	——————————————————————————————————- */

	$output = $output . '<div class="title_primary">';
		$output = $output . '<div class="container">';
			$output = $output . '<p class="above">'.$above.'</p>';
			$output = $output . '<h1 class="title">'.$title.'</h1>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_section_primary_title = section_primary_title();

/* ————————————————————————————————————————————————————————— */

function section_grid_motorcycles(){
	global $array_motorcycles;
	/* ——————————————————————————————————
	DESCRIPTION:
	
	——————————————————————————————————- */
	$output = $output . '<div class="img_grid_motorcycles">';
		$output = $output . '<ul>';
			foreach($array_motorcycles as $id => $motorcycle){
				$output = $output . '<li class="parent">';
					$output = $output . '<div class="container">';
						$output = $output . '<p class="title_year">'.$motorcycle['specs']['year'].'</p>';
						$output = $output . '<h1 class="title_name">'.$motorcycle['motorcycle_nick'].'</h1>';
					$output = $output . '</div>';
					$photo_count = 0;
					foreach($motorcycle[images] as $photo => $description){
						$photo_count = $photo_count + 1;
						if($photo_count == 1){
							$output = $output . '<div class="cover" style="background:url('.$photo.')center no-repeat;background-size:cover;"></div>';
							}
						}
					$output = $output . '<div class="under"></div>';
				$output = $output . '</li>';
				}
		$output = $output . '</ul>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_section_grid_motorcycles = section_grid_motorcycles();

/* ————————————————————————————————————————————————————————— */

function group_top_about($_section_primary_title){
	global $_section_coreteam;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————- */
	$output = $output . '<div class="header_short" style="background:url(_library/img/asset/bg_about.jpg)center no-repeat; background-size:cover;"></div>';
	$output = $output . '<div class="section" style="background:white;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				$output = $output . section_primary_title("our story",'a look inside');
			$output = $output . '</div>';
			$output = $output . '<div class="content_group">';
				$output = $output . '<div class="content_leftside"></div>';
				$output = $output . '<div class="content_rightside">';
					$output = $output . '<h2>'.ucwords('Recently voted the Best in Western Washington').'</h2>';
					$output = $output . '<p>Rottweiler Motorcycle Company began producing quality motorcycles in 2006, (in Bremerton, WA) quickly creating broad appeal to enthusiasts and new riders alike. RMC is your full service shop (all makes, all models, all years) with a highly skilled design, fabrication, and service team. We do what no one else can. Your motorcycle is a source of pride. You deserve the best, even down to the smallest details. Tire changes? Performance issues? New bars, new seat, controls or suspension? We’ve got you. And at the end of the day if you can’t get your motorcycle down here, we’ll gladly pick it up at no charge. Anything you need or dream of for your ride, we’ve got you. Give us a call or stop by, and we will give you a tour of our shop.</p>';
				$output = $output . '</div>';
			$output = $output . '</div>';
			$output = $output . $_section_grid_motorcycles;
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;} //close function
	/* ———————————————————————————————— */
	 $_group_top_about = group_top_about();

/* ————————————————————————————————————————————————————————— */

function group_top_motorcycle($_section_primary_title){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————- */
	$output = $output . '<div class="header_short" style="background:url(_library/img/asset/bg_motorcyles.jpg)center no-repeat; background-size:cover;"></div>';
	$output = $output . '<div class="section" style="background:white;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				$output = $output . section_primary_title("our motorcycle's",'craftsmanship');
			$output = $output . '</div>';
			$output = $output . '<h2>'.ucwords('testing multiple words').'</h2>';
			$output = $output . '<p>We\'re proud of each motorcycle\'s story and personality. We understand their characteristics and influence from their owners, and embrace its history. You can find the extra details by viewing our motorcycle listing below.</p>';
			$output = $output . $_section_grid_motorcycles;
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;} //close function
	/* ———————————————————————————————— */
	 $_group_top_motorcycle = group_top_motorcycle();

/* ————————————————————————————————————————————————————————— */

function group_top_member(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————- */

	/* ———————————————————————————————— */
	return $output;} //close function
	/* ———————————————————————————————— */
	 $_group_top_member = group_top_member();

/* ————————————————————————————————————————————————————————— */

function group_top_motorcycles($_section_primary_title){
	global $_section_grid_motorcycles;
	global $_section_primary_title;
	global $loremipsum;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————- */
	$output = $output . '<div class="header_short" style="background:url(_library/img/asset/bg_motorcyles.jpg)center no-repeat; background-size:cover;"></div>';
	$output = $output . '<div class="section" style="background:white;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				$output = $output . section_primary_title("our motorcycle's",'craftsmanship');
			$output = $output . '</div>';
			$output = $output . '<h2>'.ucwords('testing multiple words').'</h2>';
			$output = $output . '<p>We\'re proud of each motorcycle\'s story and personality. We understand their characteristics and influence from their owners, and embrace its history. You can find the extra details by viewing our motorcycle listing below.</p>';
			$output = $output . $_section_grid_motorcycles;
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_group_top_motorcycles = group_top_motorcycles();

/* ————————————————————————————————————————————————————————— */

function group_coreteam(){
	global $_section_coreteam;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————- */
	$output = $output . '<div style="section">';
		$output = $output . '<div class="inner" style="text-align:center;">';
			$output = $output . '<div class="title_secondary" style="display:inline-block;">';
				$output = $output . '<div class="liner">';
					$output = $output . '<div class="line"></div>';
					$output = $output . '<p class="above">our</p>';
					$output = $output . '<div class="line"></div>';
				$output = $output . '</div>';
				$output = $output . '<h1 class="title">core team</h1>';
				$output = $output . '<p>Each Rottweiler team member is an artist at their craft.</p>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . $_section_coreteam;
	/* ———————————————————————————————— */
	return $output;
	} //close function 
	/* ———————————————————————————————— */
$_group_coreteam = group_coreteam();

/* ————————————————————————————————————————————————————————— */

function titlecase($string, $delimiters = array(" ", "-", "O'"), $exceptions = array("to", "a", "the", "of", "by", "for", "and", "with", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X")) { 
	/* 
	Exceptions in lower case are words you don't want converted 
	Exceptions all in upper case are any words you don't want converted to title case 
	but should be converted to upper case, e.g.: 
	king henry viii or king henry Viii should be King Henry VIII 
	*/ 
	foreach ($delimiters as $delimiter){ 
		$words = explode($delimiter, $string); 
		$newwords = array(); 
		foreach ($words as $word){ 
			if (in_array(strtoupper($word), $exceptions)){ 
							// check exceptions list for any words that should be in upper case 
							$word = strtoupper($word); 
				} elseif (!in_array($word, $exceptions)){ 
							// convert to uppercase 
					$word = ucfirst($word); 
					} 
			array_push($newwords, $word); 
			} 
		$string = join($delimiter, $newwords); 
		} 
		return $string; 
	// titlecase(); can be used to intermingle.
	} 

/* ————————————————————————————————————————————————————————— */

function group_header($array_members, $array_controller){
	global $array_controller;
	global $headtitle;
	global $loremipsum;
	global $description_short;
	/* ——————————————————————————————————
	DESCRIPTION:
	depending on what page you land on, it will switch out the
	header to match the page you're on

	USED:
	on all rootlevel .php pages at the top.
	—————————————————————————————————— */

	$switch_status = $array_controller['landing_page']['switch_status'];

	if($headtitle == 'main'){
		if($switch_status == 'default'){
			$output = $output . '<div id="group_header" class="parallax__group">';
				$output = $output . '<video loop muted autoplay class="fullscreen-bg__video parallax__layer parallax__layer--base" style="background:#333333;">';//poster="_library/img/asset/bg_hero_fade.png"
					$output = $output . '<source src="_library/img/asset/rmco_header.mp4" type="video/mp4">';
					$output = $output . '<source src="_library/img/asset/rmco_header.webm" type="video/webm">';
				    $output = $output . '<source src="_library/img/asset/rmco_header.ogv" type="video/ogg">';
				$output = $output . '</video>';
				$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
					$output = $output . '<div class="block_vh_center">';
						$output = $output . '<div id="logo_large"></div>';
						// $output = $output . '<h1>We build custom motorcycles</h1>';
						$output = $output . '<p style="color:white;">'.$description_short.'</p>';
						// $output = $output . '<div class="btn copper">Open Garage</div>';
					$output = $output . '</div>';
				$output = $output . '</div>';			
			$output = $output . '</div>'; //closed group_header, but left parallax class open so the whole body document will be affected.	
			}else{
				$output = $output . '<div id="group_header" class="parallax__group">';
					$output = $output . '<div class="parallax__layer parallax__layer--base" style="background:#333333; background:url(_library/img/asset/bg_hero_fade.png) center; background-size:cover;"></div>';
					$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
						$output = $output . '<div class="block_vh_center">';
							$output = $output . '<div id="logo_large"></div>';
							$output = $output . '<h1>We build custom motorcycles</h1>';
							$output = $output . '<p>Get a glance of our new customized motorcycles!</p>';
							$output = $output . '<div class="btn copper">Open Garage</div>';
						$output = $output . '</div>';
					$output = $output . '</div>';			
				$output = $output . '</div>'; //closed group_header, but left parallax class open so the whole body document will be affected.
				}
		}elseif($headtitle == 'about'){
			$output = $output . '<div id="group_header" class="parallax__group" style="height:540px;">';
				$output = $output . '<div class="parallax__layer parallax__layer--back" style="top:-87px;background:#333333; background:url(_library/img/asset/bg_about.jpg) center; background-size:cover;"></div>';
				$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
					$output = $output . '<div class="block_vh_center">';
						$output = $output . '<h1 style="margin:183px 0 0 0;">We build custom motorcycles</h1>';
					$output = $output . '</div>';
				$output = $output . '</div>';			
			$output = $output . '</div>'; //closed group_header, but left parallax class open so the whole body document will be affected.
		}elseif($headtitle == 'motorcycle'){
			$output = $output . '<div id="group_header" class="parallax__group" style="height:540px;">';
				$output = $output . '<div class="parallax__layer parallax__layer--back" style="top:-87px;background:#333333; background:url(_library/img/asset/bg_about.jpg) center; background-size:cover;"></div>';
				$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
					$output = $output . '<div class="block_vh_center">';
						$output = $output . '<h1 style="margin:183px 0 0 0;">We build custom motorcycles</h1>';
					$output = $output . '</div>';
				$output = $output . '</div>';			
			$output = $output . '</div>'; //closed group_header, but left parallax class open so the whole body document will be affected.
		}elseif($headtitle == 'member'){
			$output = $output . '<div id="group_header" class="parallax__group" style="height:540px;">';
				$output = $output . '<div class="parallax__layer parallax__layer--back" style="top:-87px;background:#333333; background:url(_library/img/asset/bg_about.jpg) center; background-size:cover;"></div>';
				$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
					$output = $output . '<div class="block_vh_center">';
						$output = $output . '<h1 style="margin:183px 0 0 0;">We build custom motorcycles</h1>';
					$output = $output . '</div>';
				$output = $output . '</div>';			
			$output = $output . '</div>'; //closed group_header, but left parallax class open so the whole body document will be affected.
			}
		
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_header = group_header();


/* ————————————————————————————————————————————————————————— */

function group_holding($array_members, $array_controller, $array_social_network){
	global $array_controller;
	global $array_social_network;
	global $headtitle;
	global $loremipsum;
	/* ——————————————————————————————————
	DESCRIPTION:
	depending on what page you land on, it will switch out the
	header to match the page you're on

	USED:
	on all rootlevel .php pages at the top.
	—————————————————————————————————— */

	$switch_status = $array_controller['landing_page']['switch_status'];

	
	if($switch_status == 'default'){
		$output = $output . '<video loop muted autoplay class="fullscreen-bg__video parallax__layer parallax__layer--base" style="background:#333333;">'; //poster="_library/img/asset/bg_hero_fade.png" 
		    $output = $output . '<source class="sourcevideo" src="_library/img/asset/rmco_header.mp4" type="video/mp4">';
		    $output = $output . '<source class="sourcevideo" src="_library/img/asset/rmco_header.webm" type="video/webm">';
		    $output = $output . '<source class="sourcevideo" src="_library/img/asset/rmco_header.ogv" type="video/ogg">';
		$output = $output . '</video>';
		}else{
			$output = $output . '<div class="parallax__layer parallax__layer--base" style="background:#333333; background-image:url(_library/img/asset/bg_hero_fade.png); background-size:cover;></div>';//
			}
	$output = $output . '<div class="lock parallax__layer parallax__layer--fore" style="text-align:center;">';
			$output = $output . '<div class="block_vh_center">';
				$output = $output . '<div style="display:inline-block; height:270px; width:270px; margin-bottom:20px; background:url(_library/img/asset/asset_logo.svg) no-repeat"></div>';
				$output = $output . '<p style="color:white; margin:0;">Stay tuned for our new site launch!</p>'; //Be sure to check us out in the near future for our new site launch!
				$output = $output . '<ul class="social_network">';
					foreach($array_social_network as $social){
						$output = $output . '<li style="display:inline-block" class="icon_'.$social['network'].'">';
						if($social['network']!=='snapchat'){
							$output = $output . '<a href="http://'.$social['link'].'" target="none" style="display:block; width:100%; height:100%;"></a>';
							}else{
								/* COMEBACK
								• here is where you'll create an absolute div that has 20px margins on all sides
								• this will also have a background-color of $color_snapchat in scss file
								• this page will contain:
									1) the snapchat ghost
									2) snapchat scan pic
									3) snapchat account name
									4) quick description for:
										mobile:  "please take a screenshot, and add by snapcode using your library" <tutorial_snapchat_1.gif>
										tablet:  "please scan the code above from within snapchat" <tutorial_snapchat_2.gif>
										desktop: "please scan the code above from within snapchat" <tutorial_snapchat_2.gif>
								*/
								}
						$output = $output . '</li>';
						}
				$output = $output . '</ul>';
			$output = $output . '</div>';
		$output = $output . '</div>';			
	
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_holding = group_holding();


/* ————————————————————————————————————————————————————————— */

function group_footer($array_social_network){
	global $array_social_network;
	global $description_short;
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	—————————————————————————————————— */

		$output = $output . '<div id="group_footer" class="parallax__group" style="z-index:300">';
			$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
				$output = $output . '<div class="small_block">';
					$output = $output . '<div id="logo_small" style="margin-bottom:40px;"></div>';
					$output = $output . '<p>'.$description_short.'</p>';
					$output = $output . '<ul class="social_network">';
						foreach($array_social_network as $social){
							$output = $output . '<li style="display:inline-block" class="icon_'.$social['network'].'">';
							if($social['network']!=='snapchat'){
								$output = $output . '<a href="http://'.$social['link'].'" target="none" style="display:block; width:100%; height:100%;"></a>';
								// $output = $output . '<a href="http://google.com" target="none" style="display:block; width:100%; height:100%;"></a>';
								}else{
									/* COMEBACK
									• here is where you'll create an absolute div that has 20px margins on all sides
									• this will also have a background-color of $color_snapchat in scss file
									• this page will contain:
										1) the snapchat ghost
										2) snapchat scan pic
										3) snapchat account name
										4) quick description for:
											mobile:  "please take a screenshot, and add by snapcode using your library" <tutorial_snapchat_1.gif>
											tablet:  "please scan the code above from within snapchat" <tutorial_snapchat_2.gif>
											desktop: "please scan the code above from within snapchat" <tutorial_snapchat_2.gif>
									*/
									}
							$output = $output . '</li>';
							}
					$output = $output . '</ul>';
				$output = $output . '</div>';      
			$output = $output . '</div>';
			$output = $output . '<div class="bar_stopper"></div>';
		$output = $output . '</div>';
		$output = $output . '<div id="group_copyright" class="parallax__group">';
			$output = $output . '<div class="lock parallax__layer parallax__layer--back">';
			$output = $output . '<p>Rottweiler Motorcycle Company &copy; '.date("Y").'. All Rights Reserved.</p>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_footer = group_footer();

/* ————————————————————————————————————————————————————————— */

function group_navbar(){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	——————————————————————————————————- */
	$output = $output . '<div id="group_navbar">';
		$output = $output . '<div class="logo_horiz" style="position:absolute;top:0;left:0;height:10px;width:10px;"></div>';
	$output = $output . '</div>';
	/* ———————————————————————————————- */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_navbar = group_navbar();

/* ————————————————————————————————————————————————————————— */

function group_lax(){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	—————————————————————————————————— */
	$output = $output . '<div id="group_lax" class="parallax__group">';
		$output = $output . '<div class="mask parallax__layer parallax__layer--base"></div>';
		$output = $output . '<div class="bg parallax__layer parallax__layer--deep"></div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_lax = group_lax();

/* ————————————————————————————————————————————————————————— */

function group_next($description_long){
	global $_snip_testimonial;
	global $description_long;
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	—————————————————————————————————— */
	$output = $output . '<div id="group_next" class="parallax__group">';
		$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
			$output = $output . '<div class="small_block">';
				$output = $output . '<h1>YOUR ONE STOP MOTORCYCLE SHOP</h1>';
			$output = $output . '</div>';
			$output = $output . '<p>'.$description_long.'</p>';
			$output = $output . '<div class="photo"></div>';
			$output = $output . $_snip_testimonial;
		$output = $output . '</div>';
	$output = $output . '</div>';
	
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_next = group_next();

/* ————————————————————————————————————————————————————————— */

function group_featured_items($array_items){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "featured items" group on this page

	this section is cool, because on the landing page it looks at all
	the items within the $array_items, and will only display ONLY the
	top 4 items if it's featured, and if it's in stock. 

	NOTE
	there can only be four featured items. if there is five featured 
	it will still only display four. 
	—————————————————————————————————— */
	global $headtitle;
	global $array_items;

	if($headtitle == 'main'){
		$output = $output . '<div id="group_featured_items" class="parallax__group">';
			$output = $output . '<div class="lock">';
				$output = $output . '<div class="small_block">';
					$output = $output . '<h1>Featured Items</h1>';
					$output = $output . '<p>If you would like to see more of our products, visit our shop!</p>';
					$output = $output . '<div class="btn copper">Visit Shop</div>';
				$output = $output . '</div>'; 
			$output = $output . '</div>';
			$output = $output . '<ul>';
				$count = 0;

				foreach($array_items as $item){
					$image_cover = $item['image_cover'];

					if($item['featured']){
						if($item['stock']){
							$count = $count + 1;
							if($count <= 4){
								$output = $output . '<li class="parent">';
									$output = $output . '<div class="container">';
										
									if($image_cover == true){
										$output = $output . '<p><i>in stock</i></p>';
										$output = $output .'<h2>'.$item['item#'].'</h2>';	
										}else{
											$output = $output . '<p><i>Note to team</i></p>';
											$output = $output .'<h2>'.$item['item#'].' needs photo</h2>';	
											}
									
									$output = $output . '</div>';
									
									if(isset($image_cover)){
										$output = $output . '<div class="cover" style="background:#333 url(_library/img/product/'.$image_cover.') center; background-size:cover;">';
										$output = $output . '</div>';
										}else{
											$output = $output . '<div class="cover" style="background:#333">';
											$output = $output . '</div>';
											}
									
								$output = $output . '</li>';
								}
							}
						}
					}

			$output = $output . '</ul>';   
		$output = $output . '</div>';  
		}else{
			$output = $output . 'not index!, probably featured items page?';
		}
	
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_featured_items = group_featured_items();

/* ————————————————————————————————————————————————————————— */

function group_events(){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page

	DETAILS:
	the idea here is to get all the events to output the correct
	string value in the form of an epoch. 

	once it's all in that form, push all values into an array called
	$epoch from within the function. then sort the array from lowest 
	first to highest last. This is so that you can show the most newest
	upcoming event wherever it is created in the array without doing it
	manually.

	once it's sorted, you'll need to loop the array to match with the
	events array. if the array's epoch time matches the epoch time, then 
	add count. then if count is equal or less than 3 display event

	now only display if count is less than or equal to 3.
	—————————————————————————————————— */
	global $headtitle;
	global $array_events;

	if($headtitle == 'main'){
		$output = $output . '<div id="group_events" class="parallax__group">';
			$output = $output . '<div class="lock">';
				$output = $output . '<div class="small_block">';
					$output = $output . '<h1>Events</h1>';
					$output = $output . '<p>Nam aut videnda musdant emporum quame volorum enimolessim quidunt volor sit odis illaut que ne pel maio molor millitatem. Xeriorum nobitio doleniet, occum nonsequid unt qui</p>';
				$output = $output . '</div>';  
				$count = 0;
				
				foreach($array_events as $key => $event){
					
					$year = $event['info']['date']['year']; // to put into $humantime
					$month = $event['info']['date']['month']; // to put into $humantime
					$day = $event['info']['date']['day']; // to put into $humantime

					$humantime = $month .'/'. $day .'/'. $year; // this will give the string M/DD/YYYY
					//echo $humantime . ' -> epoch: '; 
					$date = new DateTime($humantime); // format: MM/DD/YYYY

					/*——taken from epochconverter———————————*/
					$epochformula = $date->format('U'); 
					$epoch = $epochformula+$dayvalue;
					/*——-------------------------———————————*/

					$key = $epoch;
					global $epoch;

					/*—group———————————*/
					// $event['info']['epoch'] = $epoch; // this makes it so that values will be pushed into here
					// $epochlist[] = $epoch; // this pushes all the epoch values into a new array.
					// asort($epochlist); // nice! now you got the array that is sorted from nearest to farthest
					/*—end of group————*/

					
					}
			$output = $output . '</div>';
		$output = $output . '</div>';
			}else{
				$output = $output . 'not index!, probably events page?';
			}
	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_events = group_events(); 

/* ————————————————————————————————————————————————————————— */

function group_about($array_members){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "about" group on this page, if GET variable ?team hasn't been set.
	—————————————————————————————————— */
	
	// $output = $output . 'board about';

	$output = $output . '<div id="wrap_intro" class="parallax__group">';
		$output = $output . '<div id="lock_intro">';
			$output = $output . '<h1>Our Story</h1>';
			$output = $output . '<p>Velendeb itatem haribus a il idellor roviduc iendandae volorio vento consequ aessum doluptatur? Quidi ut fuga. Pa cullat omnisquis doloriberit, </p>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	$output = $output . '<div id="wrap_intro">';
		$output = $output . '<div id="lock_intro">';
			$output = $output . '<h1>Our Team</h1>';
			$output = $output . '<p>Velendeb itatem haribus a il idellor roviduc iendandae volorio vento consequ aessum doluptatur? Quidi ut fuga. Pa cullat omnisquis doloriberit, </p>';
			$output = $output . '<ul class="grid">';
			foreach($array_members as $member => $info){
				$output = $output . '<li style="list-style:none;" class="'.$member.'">';
				$output = $output . '<a style="display:block;" href="about.php?team='.$member.'">';
				$output = $output . ucfirst($member) . " " . ucfirst($info['name']['last']);
				$output = $output . '</a>';
				$output = $output . '</li>';
				}
			$output = $output . '</ul>';  
		$output = $output . '</div>';
	$output = $output . '</div>'; 

	/* ———————————————————————————————— */
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_about = group_about($array_members);

/* ————————————————————————————————————————————————————————— */

function group_member($array_members){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "member" group on this page, if GET variable ?team is set.
	—————————————————————————————————— */

	$member = $_GET['team'];
	$output = $output . '<h2>';
	$output = $output . ucfirst($member);
	$output = $output . '</h2>';
	$member_namelast = $array_members[$member]['name']['last'];

	/* ———————————————————————————————— */
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_member = group_member($array_members);

/* ————————————————————————————————————————————————————————— */

function group_about_intro($array_members){
	/* ——————————————————————————————————
	DESCRIPTION:
	display groups depending on if GET variable ?team is or isnt set.

	NOTE:
	this only works if you output the function WITH its argument, not by its variable.
	—————————————————————————————————— */

	if(!isset($_GET['team'])){ 
		//——————SHOW board_about——————————
		$output = $output . group_about($array_members);
	}else{
		//——————SHOW board_member—————————
		$output = $output . group_member($array_members);
		}

	/* ———————————————————————————————— */
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_about_intro = group_about_intro($array_members);

/* ————————————————————————————————————————————————————————— */

function snip_testimonial($array_testimonial){
	/* ——————————————————————————————————
	DESCRIPTION:
	this function basically creates a container that holds one quote from the $array_testimonial arrays
	and displays it.
	—————————————————————————————————— */
	$count = 0;
	shuffle($array_testimonial);
	foreach($array_testimonial as $testimonial){
		$count = $count +1;
		if($count == 1){
			$output = $output . '<div class="snip_testimonial">';
				$output = $output . '<div class="testimonial">';
					$output = $output . '<h1>Testimonial</h1>';
					$output = $output . '<div class="quotemark_l"></div>';
					$output = $output . '<div class="quotemark_r"></div>';
					$output = $output . '<p class="quote">"' .$testimonial[testimonial]. '"</p>';
					$output = $output . '<p class="person"><i>' .$testimonial[name].', '.titlecase($testimonial[location]).', '.strtoupper($testimonial[state]).'</i></p>';
				$output = $output . '</div>';
			$output = $output . '</div>';
			} //close foreach loop
		}
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_snip_testimonial = snip_testimonial($array_testimonial);

/* ————————————————————————————————————————————————————————— */

function group_about_ourstory(){
	global $_snip_testimonial;
	global $description_about;
	global $array_members;
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	——————————————————————————————————- */
	$output = $output . '<div id="group_about_ourstory" class="parallax__group" style="z-index:300">';
		$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
			$output = $output . '<div class="small_block">';
				$output = $output . '<h1>Our Story</h1>';
				$output = $output . "<p>$description_about</p>";
			$output = $output . '</div>';
			$output = $output . $_snip_testimonial;
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div id="group_about_ourteam" class="parallax__group" style="z-index:300">';
		$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
			$output = $output . '<div class="small_block">';
				$output = $output . '<h1>Our Team</h1>';
				$output = $output . "<p>Velendeb itatem haribus a il idellor roviduc iendandae volorio vento consequ aessum doluptatur? Quidi ut fuga. Pa cullat omnisquis doloriberit, </p>";
			$output = $output . '</div>';
			$output = $output . '<ul>';
				foreach($array_members as $name => $member){
					$output = $output . '<li class="parent">';
						$output = $output . '<div class="container">';
							$output = $output .'<h2 color="white">'.$name.'</h2>';
							$output = $output .'<div style="width: 50px;margin: 0 auto;margin-top: -4px;margin-bottom: 6px;height: 2px;background: red;"></div>';
							$output = $output .'<p color="white">'.$member[position].'</p>';
						$output = $output . '</div>';
						$output = $output . '<div class="cover" style="background:url(_library/img/asset/img_team_'.$name.'.jpg) center; background-size:cover;"></div>';
					$output = $output . '</li>';
					}
			$output = $output . '</ul>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————- */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_about_ourstory = group_about_ourstory();

/* ————————————————————————————————————————————————————————— */

function group_about_motorcycle(){
	global $_snip_testimonial;
	global $description_about;
	global $array_members;
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	——————————————————————————————————- */
	$output = $output . '<div id="group_about_motorcycle" class="parallax__group" style="z-index:300">';
		$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
			$output = $output . '<div class="small_block">';
				$output = $output . '<h1>Our Story</h1>';
				$output = $output . "<p>$description_about</p>";
			$output = $output . '</div>';
			$output = $output . $_snip_testimonial;
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div id="group_about_ourteam" class="parallax__group" style="z-index:300">';
		$output = $output . '<div class="lock parallax__layer parallax__layer--base">';
			$output = $output . '<div class="small_block">';
				$output = $output . '<h1>Our Team</h1>';
				$output = $output . "<p>Velendeb itatem haribus a il idellor roviduc iendandae volorio vento consequ aessum doluptatur? Quidi ut fuga. Pa cullat omnisquis doloriberit, </p>";
			$output = $output . '</div>';
			$output = $output . '<ul>';
				foreach($array_members as $name => $member){
					$output = $output . '<li class="parent">';
						$output = $output . '<div class="container">';
							$output = $output .'<h2 color="white">'.$name.'</h2>';
							$output = $output .'<div style="width: 50px;margin: 0 auto;margin-top: -4px;margin-bottom: 6px;height: 2px;background: red;"></div>';
							$output = $output .'<p color="white">'.$member[position].'</p>';
						$output = $output . '</div>';
						$output = $output . '<div class="cover" style="background:url(_library/img/asset/img_team_'.$name.'.jpg) center; background-size:cover;"></div>';
					$output = $output . '</li>';
					}
			$output = $output . '</ul>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————- */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_about_motorcycle = group_about_motorcycle();

/* ————————————————————————————————————————————————————————— */

function group_new(){
	/* ——————————————————————————————————
	DESCRIPTION:
	display "landing intro" group on this page
	——————————————————————————————————- */
	// $output = $output . '<div>';
	// $output = $output . '</div>';
	/* ———————————————————————————————- */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_new = group_new();

/* ————————————————————————————————————————————————————————— */	

?>