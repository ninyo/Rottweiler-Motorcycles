<?
$headtitle = 'main';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<? 
$display = $array_controller['landing_page']['switch_display'];
$status = $array_controller['landing_page']['switch_status'];

/* ————————————————————————————————————————————————————————— 
PASTE BOARD BELOW
————————————————————————————————————————————————————————— */


echo $_group_header;
echo $_section_testimonial;
// echo $_group_featured_items;

?>

<?
@include('_library/link/php/footer.php');
?>