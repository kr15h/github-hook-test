<?php 

$get_passw = "cloneplease";

if ( $_GET['passw'] == "cloneplease" ) {
	// clone from git repo
	$command = 'git pull';
	exec( $command );
} 

?>
