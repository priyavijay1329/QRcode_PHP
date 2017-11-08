<?php
$dir = 'phpqrcode/temp';
$leave_files = array('test.png');

foreach( glob("$dir/*") as $file ) {
    if( !in_array(basename($file), $leave_files) )
        unlink($file);
	
	echo "Success";
}
?>