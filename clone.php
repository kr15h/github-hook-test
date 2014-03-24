<?php 

$get_passw = "cloneplease";

if ( $_GET['passw'] == "cloneplease" ) {
	// clone from git repo
	$command = 'git clone https://github.com/kr15h/github-hook-test.git .';
	exec( $command );
} 

?>
