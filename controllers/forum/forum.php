<?php
if(!authCheck()){
	header("Location: /login");
	return false;
}

$forums = $app["database"]->all("forum");

foreach($forums as $key => $forum):
	$posts[$key]["id"] = $forum->id;
	$posts[$key]["forum"] = $forum->title;
	$posts[$key]["posts"] = $app["database"]->select("posts", ["forum_id" => $forum->id]);
endforeach;

require "views/forum/forum.php";