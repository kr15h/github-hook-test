<?php 

	$command = 'touch test.txt';
	$output = shell_exec( $command );
	echo $output; 

	$command = 'git pull';
	$output = shell_exec( $command );
	echo $output; 

?>
