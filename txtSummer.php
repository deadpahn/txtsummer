<?php
$masterText = file_get_contents('book.txt');
$lines = explode("\n", $masterText);
//clean text
$lines = str_replace("©", "", $lines);
$lines = str_replace("*", "", $lines);
$lines = str_replace("\r", "", $lines);

//check if line contains period
foreach($lines as $line){
  if (!empty($line)){
    $arrLine = explode(".", $line);
    if(count($arrLine) > 2){
      $firstLine = reset($arrLine);
        end($arrLine);
      $lastLine = prev($arrLine);
      echo $firstLine . ".";
      echo $lastLine . ".";
    }
  }
}
?>
