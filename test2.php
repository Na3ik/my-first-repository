<?php 
require_once "db.php";
require_once "config_class.php";
$index = new Data;
$result = $index->select("section",array("title", "description"), "id = 4");
$res = $index->select("articles",array("title", "intro_text", "date", "id"), "", "date", false, "3");

?>