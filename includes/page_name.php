<?php
	// pathinfo give info about given file and returns it into an associative array:
$info = pathinfo( __FILE__ );

// the filename key holds file name without extension nor parent path:
$title = ucwords( $info['filename'] );
?>