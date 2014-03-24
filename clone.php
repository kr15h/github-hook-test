<?php 

	// clone from git repo
	$command = 'git pull';
	$output = shell_exec( $command );
	echo $output; 

?>
