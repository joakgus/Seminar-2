<?php
$c =$_POST["commentDel"] - 1;
$u =$_COOKIE["user"];
$y = $_POST["page"];
$page = $y."Recipe";
if($u != null){
$doc = new DOMDocument();
$doc->load("$y.xml");


$x = $doc->getElementsByTagName("comment")[$c];
	$x->parentNode->removeChild($x);


$doc->save("$y.xml");
header("Location: $page.php");
}
else{
	header("Location: $page.php");
	die;
}
?>