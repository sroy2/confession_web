<?php
print "<html><head><title>index.html</title></head><body><xmp>";
//include('index.html');
$data = file_get_contents("index.html");
print $data;
print "</xmp></body></html>";
?>
