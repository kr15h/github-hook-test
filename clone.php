<?php 
	
	// delete all
	$command = 'rm -rf *';
	$output = shell_exec( $command );
	echo $output."\n"; 

	// clone git repo
	$command = 'git clone https://github.com/kr15h/github-hook-test.git .';
	$output = shell_exec( $command );
	echo $output."\n"; 

	// delete .git directory to save space
	$command = 'rm -rf .git';
	$output = shell_exec( $command );
	echo $output."\n"; 

?>
