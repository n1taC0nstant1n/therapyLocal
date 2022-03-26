<?php
	// pathinfo give info about given file and returns it into an associative array:
$info = pathinfo( __FILE__ );

// the filename key holds file name without extension nor parent path:
$title = ucwords( $info['filename'] );
?>
<?php include('./includes/head.php'); ?>
<?php include('./includes/header.php'); ?>
<?php include('./includes/slider.php'); ?> 
<?php include('./includes/modul_servicii.php'); ?> 
<?php include('./includes/modul_bowen.php'); ?> 
<?php include('./includes/footer.php'); ?>


