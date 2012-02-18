<?php
print "<html><head><title>json files</title></head><body>";

$dir = "./js/";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
  if ($dh = opendir($dir)) {
    while (($file = readdir($dh)) !== false) {
      if (filetype($file) != "dir" ){ //&& $file != "jquery.min.js"){
        echo "<a href='./js/$file'>$file</a><xmp>";
        include("./js/$file");
        echo "</xmp>\n";        
      }
    }
  closedir($dh);
  }
}

print "</xmp></body></html>";
?>
