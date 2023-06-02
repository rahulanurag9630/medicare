<?
$a="hello world";
$b=&$a;
$a="hi $b";
echo $a." ";
echo $b;
?>