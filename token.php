<?php
$ct = mktime();
setcookie('token',md5('sobeorganic'.$ct), 0, '/');
# 'Expires' in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

# Always modified
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

# HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

# HTTP/1.0
header("Pragma: no-cache");
echo $ct; 
?>