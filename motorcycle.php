<?
$headtitle = 'motorcycle';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div id="body">

<? 
$display = $array_controller['landing_page']['switch_display'];
$status = $array_controller['landing_page']['switch_status'];

/* ————————————————————————————————————————————————————————— 
PASTE BOARD BELOW
————————————————————————————————————————————————————————— */

echo $_group_top_motorcycle;

?>

<?
@include('_library/link/php/footer.php');
?>