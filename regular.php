<?php
$str = "hello_how_r_u";
$pattern = "/hello/i";
echo"naman<br>";
echo preg_match($pattern, $str); 
echo"<br>";
echo preg_match_all($pattern, $str);
echo"<br>";
echo preg_replace($pattern, "naman", $str);
?>
