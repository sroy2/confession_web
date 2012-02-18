<?php
print "<html><head><title>css files</title></head><body>";

$dir = ".";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
  if ($dh = opendir($dir)) {
    while (($file = readdir($dh)) !== false) {
      if (pathinfo($file, PATHINFO_EXTENSION)=="css"){ //&& $file != "jquery.min.js"){
        echo "<a href='./$file'>$file</a><xmp>";
        include("./$file");
        echo "</xmp>\n";        
      }
    }
  closedir($dh);
  }
}

print "</xmp></body></html>";
?>
