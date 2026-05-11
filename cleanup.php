<?php
$dir = dirname(__FILE__);
$files = glob($dir . "/../*");
foreach($files as $file){
  if(is_file($file) && basename($file) != "cleanup.php"){
    unlink($file);
  }
}
echo "done";
?>
