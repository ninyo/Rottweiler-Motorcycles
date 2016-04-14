<?
$headtitle = 'main';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<? 
$display = $array_controller['landing_page']['switch_display'];
$status = $array_controller['landing_page']['switch_status'];

echo $_group_top_motorcycles;
echo $_section_testimonial;
echo $_group_coreteam;

?>

<?
@include('_library/link/php/footer.php');
?>