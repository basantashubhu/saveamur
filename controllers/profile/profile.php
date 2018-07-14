<?php 
if(!authCheck()){
	header("Location: /");
	return false;
}

require "views/profile/profile.view.php";