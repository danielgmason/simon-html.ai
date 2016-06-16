<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("https://rss.mention.com/ert1/r7tf/a/h92-PPunHJyH7Kb84IRLi2j9ru4=");
$mysql_hostname = "us-cdbr-iron-east-04.cleardb.net"; // Example : localhost
$mysql_user = "b4fbb18f7f69fd";
$mysql_password = "1c31170b";
$mysql_database = "heroku_94f6456c3f9e9c3";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");

$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $title = $xmlObject->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
  $link  = $xmlObject->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
  $pubDate  = $xmlObject->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
  $description  = $xmlObject->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
  $category  = $xmlObject->item($i)->getElementsByTagName('category')->item(0)->childNodes->item(0)->nodeValue;
  $sql   = "INSERT INTO `test_table_3` (title, link, pubDate, description, category) VALUES ('$title', '$link', '$pubDate', '$description', '$category')";
  mysql_query($sql);
  print "Finished Item $title n<br/>";
}

?>  