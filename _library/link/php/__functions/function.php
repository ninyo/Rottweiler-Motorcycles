<? /* ————————————————————————————————————————————————————————————

[function.php]

global functions to help control output

Ugly Apostraphe = ’; //find all and replace with '


———————————————————————————————————————————————————————————— */

$description_short = "Voted Best Motorcycle Shop in Western WA. All makes, models and years. You deserve the best. Nobody's better at getting you on the road.";
$description_long = "Rottweiler Motorcycle Co. is your go-to motorcycle shop in Bremerton, Washington. We began production of top-of-the-line motorcycles in 2006. These motorcycles appeal to enthusiasts from all over the country as well as any walk of life. Rottweiler ensures that each motorcycle fits its owner perfectly. Rottweiler Motorcycle Co. boasts an exceptional design and fabrication team with the skills and passion that makes each motorcycle a work of art. What sets Rottweiler Motorcycle Co. apart is our high attention to detail & obsession with perfection while providing the ultimate experience for our customers. Each Rottweiler team member is an artist and master at their craft, bringing a unique style to our approach.";
$description_about = "Recently voted the Best in Western Washington, Rottweiler Motorcycle Company began producing quality motorcycles in 2006, (in Bremerton, WA) quickly creating broad appeal to enthusiasts and new riders alike. RMC is your full service shop (all makes, all models, all years) with a highly skilled design, fabrication, and service team. We do what no one else can. Your motorcycle is a source of pride. You deserve the best, even down to the smallest details. Tire changes? Performance issues? New bars, new seat, controls or suspension? We&#8217;ve got you. And at the end of the day if you can&#8217;t get your motorcycle down here, we&#8217;ll gladly pick it up at no charge. Anything you need or dream of for your ride, we&#8217;ve got you. Give us a call or stop by, and we will give you a tour of our shop.";
$description_medium = "Rottweiler Motorcycle Company began producing quality motorcycles in 2006, (in Bremerton, WA) quickly creating broad appeal to enthusiasts and new riders alike. RMC is your full service shop (all makes, all models, all years) with a highly skilled design, fabrication, and service team. We do what no one else can. Your motorcycle is a source of pride. You deserve the best, even down to the smallest details. Tire changes? Performance issues? New bars, new seat, controls or suspension? We've got you. And at the end of the day if you can't get your motorcycle down here, we'll gladly pick it up at no charge. Anything you need or dream of for your ride, we've got you. Give us a call or stop by, and we will give you a tour of our shop.";

/* ————————————————————————————————————————————————————————— */


/* ———————————————————————————————— */  
//function name_function(){return $output;}//close function $_name_function = name_function();
/* ———————————————————————————————— */  


/* ————————————————————————————————————————————————————————— */


function section_copyright(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="section_copyright" style="background:black; padding:20px;width:100%;text-align:center;"><p style="font-size:0.9em;">Rottweiler Motorcycle Company &copy; 2006&ndash;'.date('Y').'. All Rights Reserved. Site design by <a style="text-decoration:none;" href="http://nin-yo.com" target="none">nin-yo.com</a> in Bremerton, WA</p></div>';

	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_section_copyright = section_copyright();


/* ————————————————————————————————————————————————————————— */

function group_header(){
	global $_section_grid_motorcycles;
	global $_section_primary_title;
	global $description_long;
	global $description_short;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="parallax-window header_main" style="height:100vh; background-position:center; background-repeat:no-repeat; background-size:cover;" data-parallax="scroll" data-image-src="_library/img/asset/bg_motorcyles.jpg">';
		$output = $output . '<div class="block_header">';
			$output = $output . '<div class="logo"></div>';
			$output = $output . '<p>'.$description_short.'</p>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div class="container_introduction">';
		$output = $output . '<div class="section" style="background:#f7f8f8;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<h1 class="title">'.titlecase('Your one stop motorcycle shop').'</h1>'; 
			$output = $output . '<p>'.$description_long.'</p>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '</div>';


	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_group_header = group_header();

/* ————————————————————————————————————————————————————————— */

function group_footer($array_social_network){
	global $array_social_network;
	global $description_short;
	/* ——————————————————————————————————
	DESCRIPTION:
	—————————————————————————————————— */

	$output = $output . '<div class="container_footer">';
		$output = $output . '<div class="ending">';
			$output = $output . '<div class="container_logo">';
					$output = $output . '<div class="logo_c revealOnScroll" data-animation="flipInX"></div>';
					$output = $output . '<div class="logo_rm revealOnScroll" data-animation="flipInY"></div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
		$output = $output . '<p class="snippet">'.$description_short.'</p>';
		$output = $output . '<div class="footer_follow_station">';
			foreach($array_social_network as $username){
				foreach($username as $network => $social){
					if($network == 'vimeo'){$output = $output . '<a href="http://vimeo.com/'.$social.'" class="vimeo" target="none"></a>';}
					if($network == 'snapchat'){$output = $output . '<a href="" class="snapchat" target="none"></a>';}
					if($network == 'instagram'){$output = $output . '<a href="http://instagram.com/'.$social.'" class="instagram " target="none"></a>';}
					if($network == 'facebook'){$output = $output . '<a href="http://facebook.com/'.$social.'" class="facebook " target="none"></a>';}
					if($network == 'twitter'){$output = $output . '<a href="http://twitter.com/'.$social.'" class="twitter " target="none"></a>';}
					if($network == 'fyuse'){$output = $output . '<a href="http://fyu.se/u/'.$social.'" class="fyuse " target="none"></a>';}
					}
				}
			$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */    
	return $output;
	} //close function
	/* ———————————————————————————————— */
	$_group_footer = group_footer();


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

function vertical_logo(){
	global $headtitle;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	if($headtitle !== 'main'){$output = $output . '<div class="vertical_logo"><a href="/" style="width:100%;height:100%;display:block;"></a></div>';}

	/* ———————————————————————————————— */  
	return $output;} //close function 
	/* ———————————————————————————————— */  
	$_vertical_logo = vertical_logo();

/* ————————————————————————————————————————————————————————— */

function section_nav_section(){
	$array_pages[] = array(
		'motorcycles',
		'about',
		);
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<nav class="nav" role="navigation">';
		$output = $output . '<div class="container_logo">';
			$output = $output . '<div class="logo_c"></div>';
			$output = $output . '<div class="logo_rm"></div>';
		$output = $output . '</div>';
    	$output = $output . ' <ul>';
            $output = $output . '<li><a href="index.php">Home</a></li>';
            foreach($array_pages as $id => $pages){
            	foreach($pages as $page)
            	$output = $output . '<li><a href="'.$page.'.php">'.ucfirst($page).'</a></li>';
            }
            $output = $output . '<li><a href="http://shop.rmco.us/">Shop</a></li>';
        $output = $output . '</ul>';

        $output = $output . '<div class="nav__toggle-btn"></div>';
        $output = $output . '<div class="section_nav_bottom">';
	        $output = $output . '<p>282 Wilkes Ave, Bremerton, WA 98312</p>';
			$output = $output . '<p>Hours of Operations: 9:00AM &ndash; 6:00PM</p>';
		$output = $output . '</div>';
    $output = $output . '</nav>';

	/* ———————————————————————————————— */  
	return $output;} //close function 
	/* ———————————————————————————————— */  
	$_section_nav_section = section_nav_section();

/* ————————————————————————————————————————————————————————— */

function section_testimonial(){
	global $array_testimonial;
	$array_bg_testimonial[] = array(
		'bg_2606.jpg',
		'bg_2607.jpg',
		'bg_2618.jpg',
		);
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	shuffle($array_testimonial);
	shuffle($array_bg_testimonial);
	$counta = 0;

		foreach($array_bg_testimonial as $cover){
			shuffle($cover);
			foreach($cover as $urls){
				$counta = $counta +1;

				if($counta == 1){
					$output = $output . '<div class="section testimonial_photo" style="background:url(_library/img/asset/'.$urls.') center no-repeat; background-size:cover;">';
					}
				}
			}
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

	/* ———————————————————————————————— */   
	return $output;	
	} //close function
	/* ———————————————————————————————— */      
	$_section_testimonial = section_testimonial();


/* ————————————————————————————————————————————————————————— */

function section_coreteam(){
	global $array_members;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="section">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div class="img_grid_team">';
				$output = $output . '<ul>';
					foreach($array_members as $id => $member){
						$output = $output . '<li>';
							$output = $output . '<a href="member.php?id='.$id.'">';
								$output = $output . '<div class="photo" style="background-image:url(_library/img/team/'.$member[still].')"></div>';
								$output = $output . '<div class="nametag">';
									$output = $output . '<div class="name">'.$member['name']['first'].' <span class="text_reveal">'.$member['name']['last'].'</span></div>';
									$output = $output . '<div class="position">'.titlecase($member['position']).'</div>';
								$output = $output . '</div>';
							$output = $output . '</a>';
						$output = $output . '</li> ';
						}
				$output = $output . '</ul>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */       
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
					$output = $output . '<a href="motorcycle.php?id='.$id.'">';
						$output = $output . '<div class="container">';
							$output = $output . '<p class="title_year">'.$motorcycle['specs']['year'].'</p>';
							$output = $output . '<h1 class="title_name">'.$motorcycle['motorcycle_nick'].'</h1>';
						$output = $output . '</div>';
						$photo_count = 0;
						foreach($motorcycle[images] as $photo => $description){
							$photo_count = $photo_count + 1;
							if($photo_count == 1){
								$output = $output . '<div class="cover" style="background:url(_library/img/motorcycles/'.$photo.')center no-repeat;background-size:cover;"></div>';
								}
							}
						$output = $output . '<div class="under"></div>';
					$output = $output . '</a>';
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
	global $description_medium;

	$array_content_about[] = array(
		'_library/img/asset/img_2449.jpg',
		'_library/img/asset/img_2452.jpg',
		'_library/img/asset/img_2472.jpg',
		'_library/img/asset/img_2501.jpg',
		'_library/img/asset/img_2495.jpg',
		'_library/img/asset/img_2282.jpg',
		);
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="parallax-window header_short" style="background-position:center; background-repeat:no-repeat; background-size:cover;" data-parallax="scroll" data-image-src="_library/img/asset/bg_about.jpg"></div>';	
	$output = $output . '<div class="section" style="background:#f7f8f8;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				$output = $output . section_primary_title("our story",'a look inside');
			$output = $output . '</div>';
			$output = $output . '<div class="content_group">';
				$count = 0;
				foreach($array_content_about as $location){
					shuffle($location);
					foreach($location as $url){
						$count = $count +1;
						if($count == 1){
							$output = $output . '<div class="content_leftside" style="background:url('.$url.')center no-repeat; background-size:cover;"></div>';
							}
						}
					}
				$output = $output . '<div class="content_rightside">';
					$output = $output . '<h2>'.ucwords('Recently voted the Best in Western Washington').'</h2>';
					$output = $output . '<p>'.$description_medium.'</p>';
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
	global $array_motorcycles;
	global $_section_grid_motorcycles;
	global $loremipsum;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$match = $_GET['id'];
	$next = $match + 1;
	$previous = $match - 1;
	$amount = count($array_motorcycles);

	$count = 0;
	foreach($array_motorcycles as $id => $motorcycle){
		if($match == $id){
			foreach($motorcycle[images] as $url => $description){
				$count = $count +1;
				if($count==1){
					$output = $output . '<div class="parallax-window header_short" style="background-position:center; background-repeat:no-repeat; background-size:cover;" data-parallax="scroll" data-image-src="_library/img/motorcycles/'.$url.'"></div>';	
					}
				}
			}
		} //end of foreach loop
	$output = $output . '<div class="section" style="background:#f7f8f8;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				foreach($array_motorcycles as $id => $motorcycle){
					if($match == $id){
						$output = $output . '<div class="title_primary">';
							$output = $output . '<div class="container">';
								$output = $output . '<p class="above">'.$motorcycle[specs][year].'</p>';
								$output = $output . '<h1 class="title">'.$motorcycle[motorcycle_nick].'</h1>';
							$output = $output . '</div>';
						$output = $output . '</div>';
						}
					} //end of foreach loop
			$output = $output . '</div>';
			// $output = $output . '<h2>'.ucwords('One-liner Illor alibera dolupti oreiumenim quidi volore nos').'</h2>';
		$output = $output . '</div>';
		$output = $output . '<div class="container_video_full_width">';
			$output = $output . '<div class="section_previous">';
				$output = $output . '<a href="motorcycle.php?id='.$previous.'" class="previous">'; 
				if($previous >= 0){
					foreach($array_motorcycles as $id => $motorcycle){
						if($id == $previous){
							$count = 0;
							foreach($motorcycle[images] as $url => $description){
								$count = $count +1;
								if($count == 1){
									$output = $output . '<div style="background:url(_library/img/motorcycles/'.$url.')center no-repeat; background-size:cover;" class="thumb">';
									}
								}
							}
						}
						$output = $output . '<div class="left"></div>';
					$output = $output . '</div>';
				$output = $output . '</a>';
					}
			$output = $output . '</div>';
			$output = $output . '<div class="section_video js-video [vimeo, widescreen]">';
				foreach($array_motorcycles as $id => $motorcycle){
					if($id == $match){
						$output = $output . '<iframe src="https://player.vimeo.com/video/'.$motorcycle[video].'" frameborder="0" allowfullscreen></iframe>';
						}
					}
			$output = $output . '</div>';
			$output = $output . '<div class="section_next">';
				$output = $output . '<a href="motorcycle.php?id='.$next.'" class="next">';
				if($next < $amount){
					foreach($array_motorcycles as $id => $motorcycle){
						if($id == $next){ //this checks if the current id is equal to the next number. 
							$count = 0; //this sets the count to 0 for counting the photos
							foreach($motorcycle[images] as $url => $description){ //this splits the image array into individual photos
								$count = $count +1; //this is just to associate a count to each photo
								if($count == 1){ //this is just to place in the first of array if the photo's number is 1
									$output = $output . '<div style="background:url(_library/img/motorcycles/'.$url.')center no-repeat; background-size:cover;" class="thumb right">';
									}
								}
							}
						}
					}else{$output = $output . '<div>';}
						$output = $output . '<div class="right"></div>';
					$output = $output . '</div>'; 
				$output = $output . '</a>'; //end of a.next
			$output = $output . '</div>'; 
		$output = $output . '</div>'; //end of container_video_full_width
		$output = $output . '<div class="inner">';
			foreach($array_motorcycles as $id => $motorcycle){
				if($id == $match){
					$output = $output . '<p>'.$motorcycle[description].'</p>';
					$output = $output . '<div class="img_grid_double" style="">';
					$count = 0;
					foreach($motorcycle[images] as $url => $description){
						$count = $count +1;
						if($count != 1){
							$output = $output . '<div class="" style="background:url(_library/img/motorcycles/'.$url.')center no-repeat;background-size:cover;"></div>';	
							}
						}
					$output = $output . '</div>';
					}
				}
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;} //close function
	/* ———————————————————————————————— */
	 $_group_top_motorcycle = group_top_motorcycle();

/* ————————————————————————————————————————————————————————— */

function group_top_member(){
	global $array_members;
	global $loremipsum;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$match = $_GET['id'];
	$count = 0;
	$array_content_cover[] = array(
		'_library/img/asset/img_2449.jpg',
		'_library/img/asset/img_2452.jpg',
		'_library/img/asset/img_2472.jpg',
		'_library/img/asset/img_2501.jpg',
		'_library/img/asset/img_2495.jpg',
		'_library/img/asset/img_2282.jpg',
		);
	foreach($array_content_cover as $cover){
		shuffle($cover);
		foreach($cover as $url){}
		}
	$output = $output . '<div class="parallax-window header_short" style="background-position:center; background-repeat:no-repeat; background-size:cover;" data-parallax="scroll" data-image-src="'.$url.'"></div>';	
		$output = $output . '<div class="section" style="background:#f7f8f8;">';
			$output = $output . '<div class="inner">';
				$output = $output . '<div class="container_profile">';
					$output = $output . '<div class="content_left_side">';
						foreach($array_members as $id => $member){
							if($match == $id){
								$output = $output . '<div class="member_infotag">';
									if(!isset($member[gif])){//for still
										$output = $output . '<div class="member_photo" style="background:url(_library/img/team/'.$member[still].') center no-repeat;background-size:cover;"></div>';
										}else{//for gif
										$output = $output . '<div class="member_photo" id="giphy" style="background:url(_library/img/team/'.$member[gif].')"></div>';	
										}
									$output = $output . '<div class="bound_text">';
										$output = $output . '<h1 class="member_name">'.$member[name][first].' '.$member[name][last].'</h1>';
										$output = $output . '<p class="member_position">'.titlecase($member[position]).'</p>';
									$output = $output . '</div>';
									$popularity = count($member[social]);
									if($popularity != 0){
										$output = $output . '<div class="member_follow_station" id="follow_station_desktop">';
										foreach($member[social] as $network => $username){
											if($network == 'vimeo'){$output = $output . '<a href="http://vimeo.com/'.$username.'" class="vimeo" target="none"></a>';}
											if($network == 'snapchat'){$output = $output . '<a href="" class="snapchat" target="none"></a>';}
											if($network == 'instagram'){$output = $output . '<a href="http://instagram.com/'.$username.'" class="instagram" target="none"></a>';}
											if($network == 'facebook'){$output = $output . '<a href="http://facebook.com/'.$username.'" class="facebook" target="none"></a>';}
											if($network == 'twitter'){$output = $output . '<a href="http://twitter.com/'.$username.'" class="twitter" target="none"></a>';}
											if($network == 'fyuse'){$output = $output . '<a href="http://fyu.se/u/'.$username.'" class="fyuse" target="none"></a>';}
											} //close foreach loop
										$output = $output . '</div>';
										} //close conditional
								$output = $output . '</div>';
								
									$output = $output . '<p class="member_description">'.$member[description].'</p>';
									
								$popularity = count($member[social]);
								if($popularity != 0){
									$output = $output . '<div class="member_follow_station" id="follow_station_nondesktop">';
									foreach($member[social] as $network => $username){
										if($network == 'vimeo'){$output = $output . '<a href="http://vimeo.com/'.$username.'" class="vimeo opposite" target="none"></a>';}
										if($network == 'snapchat'){$output = $output . '<a href="" class="snapchat opposite" target="none"></a>';}
										if($network == 'instagram'){$output = $output . '<a href="http://instagram.com/'.$username.'" class="instagram opposite" target="none"></a>';}
										if($network == 'facebook'){$output = $output . '<a href="http://facebook.com/'.$username.'" class="facebook opposite" target="none"></a>';}
										if($network == 'twitter'){$output = $output . '<a href="http://twitter.com/'.$username.'" class="twitter opposite" target="none"></a>';}
										if($network == 'fyuse'){$output = $output . '<a href="http://fyu.se/u/'.$username.'" class="fyuse opposite" target="none"></a>';}
										} //close foreach loop
									$output = $output . '</div>';
									} //close conditional
								} //close conditional
							} //close foreach
					// $output = $output . '<div class="video-container">';
					// 	$output = $output . '<iframe src="https://player.vimeo.com/video/'.$member[video].'" frameborder="0" allowfullscreen></iframe>';
					// $output = $output . '</div>';
				$output = $output . '</div>'; //close content_left_side
				$output = $output . '<div class="content_right_side" id="specs_non_mobile">';
					$output = $output . '<div class="specs_photo" style="background:url(_library/img/motorcycles/'.$member[motorcycle].')center no-repeat;background-size:cover;"></div>';
					$output = $output . '<div class="specs_container">';
						$output = $output . '<p class="title">ride details</p>';
						$output = $output . '<ul class="details">';
							foreach($array_members as $id => $member){
								if($match == $id){
									foreach($member[details] as $category => $detail){
										$output = $output . '<li>';
											$output = $output . '<p class="category">'.ucwords($category).'</p>';
											$output = $output . '<p class="detail">'.ucwords($detail).'</p>';
										$output = $output . '</li>';
										}
									}
								}
						$output = $output . '</ul>';
					$output = $output . '</div>';
				$output = $output . '</div>'; //close content_right_side
			$output = $output . '</div>'; //close container_profile
		$output = $output . '</div>'; //close inner
		$output = $output . '<div class="section" id="specs_mobile" style="background:#312b29;">';
			$output = $output . '<div class="container_profile">';
				$output = $output . '<div class="content_right_side">';
					$output = $output . '<div class="specs_container">';
						$output = $output . '<p class="title">ride details</p>';
						$output = $output . '<ul class="details">';
							foreach($array_members as $id => $member){
								if($match == $id){
									foreach($member[details] as $category => $detail){
										$output = $output . '<li>';
											$output = $output . '<p class="category">'.ucwords($category).'</p>';
											$output = $output . '<p class="detail">'.ucwords($detail).'</p>';
										$output = $output . '</li>';
										}
									}
								}
						$output = $output . '</ul>';
					$output = $output . '</div>';
				$output = $output . '</div>'; //close content_right_side
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>'; //close section
			
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
	——————————————————————————————————— */
	$output = $output . '<div class="parallax-window header_short" style="background-position:center; background-repeat:no-repeat; background-size:cover;" data-parallax="scroll" data-image-src="_library/img/asset/bg_motorcyles.jpg"></div>';	
	$output = $output . '<div class="section" style="background:#f7f8f8;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div style="text-align:center;">';
				$output = $output . section_primary_title("our motorcycle's",'lineup');
			$output = $output . '</div>';
			$output = $output . '<h2>'.titlecase('One of a kind').'</h2>'; 
			$output = $output . "<p>Each motorcycle contains a personal story. We're proud of understanding each motorcycle's past. We embrace its unique characteristics given by their previous owners. You will find more details by selecting a motorcycle below.</p>";
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
	——————————————————————————————————— */
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

function group_chris(){
	global $loremipsum;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="section" style="background:black;">';
		$output = $output . '<div class="inner" style="text-align:center;">';
			$output = $output . '<div class="title_secondary" style="display:inline-block;">';
				$output = $output . '<div class="liner">';
					$output = $output . '<div class="line"></div>';
					$output = $output . '<p class="above">remembering</p>';
					$output = $output . '<div class="line"></div>';
				$output = $output . '</div>';
				$output = $output . '<h1 class="title">Chris Hicks</h1>';
				$output = $output . '<div class="content_group">';
					$output = $output . '<div class="photo_chris"></div>';
					$output = $output . '<div class="content_rightside">';
						$output = $output . "<p>Rottweiler Motorcycle Company began producing quality motorcycles in 2006, (in Bremerton, WA) quickly creating broad appeal to enthusiasts and new riders alike. RMC is your full service shop (all makes, all models, all years) with a highly skilled design, fabrication, and service team. We do what no one else can. Your motorcycle is a source of pride. You deserve the best, even down to the smallest details. Tire changes? Performance issues? New bars, new seat, controls or suspension? We've got you. And at the end of the day if you can't get your motorcycle down here, we'll gladly pick it up at no charge. Anything you need or dream of for your ride, we've got you. Give us a call or stop by, and we will give you a tour of our shop.</p>";
					$output = $output . '</div>';
				$output = $output . '</div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_group_chris = group_chris();

/* ————————————————————————————————————————————————————————— */
// OLD CODE BELOW
/* ————————————————————————————————————————————————————————— */

function group_featured_items($array_items, $_section_primary_title){
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
				$output = $output . '<div style="text-align:center;">';
					$output = $output . section_primary_title("our",'featured items');
				$output = $output . '</div>';
				$output = $output . '<h2>If you would like to see more of our products, visit our shop!</p>';
				$output = $output . '<div class="btn copper">Visit Shop</div>';
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

?>