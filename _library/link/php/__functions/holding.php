<? /* ————————————————————————————————————————————————————————————

[function.php]

global functions to help control data output

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

?>