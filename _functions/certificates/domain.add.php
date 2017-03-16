<?php

function Certificate_Domain_Add($Connection, $Username, $Domain, $ValidationKey) {

	global $Time;

	$Username = Puff_Member_Sanitize_Username($Username);

	Puff_Member_Key_Create($Connection, $Username, $Domain, $ValidationKey);

	$Result = mysqli_query($Connection, 'INSERT INTO `Domains` (`Username`, `Domain`, `Added`) VALUES (\''.$Username.'\', \''.$Domain.'\', \''.$Time.'\');');
	return $Result;

}
