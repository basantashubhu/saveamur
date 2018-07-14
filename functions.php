<?php 
function dd($value) {
	echo "<pre>";
	echo var_dump($value);
	echo "</pre>";
	die();
}

function authCheck(){
	if(isset($_SESSION["auth"]))
		return true;
	return false;
}

function auth(){
	if(!isset($_SESSION["auth"]))
		return false;
	return (object) $_SESSION["auth"];	
}
if(authCheck())
	$user = $app["database"]->selectId("users", auth()->id)[0];

function gender(){
	return [
		"Male",
		"Female",
		"Other"
	];
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp