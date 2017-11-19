<?php 
$c =$_POST["comment"];
$u =$_COOKIE["user"];
$x = $_POST["submit"];
$y = $_POST["page"];
$page = $y."Recipe";
if($u == null or $c == null){
	header("Location: $page.php");
}

else{
$doc = new DOMDocument();
$doc->load("$y.xml");

 
$rootTag = $doc->getElementsByTagName("comments")->item(0);
$dataTag = $doc->createElement("comment");

$a =  $doc -> createElement("username", $u);
$b =  $doc -> createElement("com_str", $c);

$dataTag ->appendChild($a);
$dataTag ->appendChild($b);

$rootTag ->appendChild($dataTag);
 $doc->formatoutput = true;
$doc->save("$y.xml");
header("Location: $page.php");
}
?>