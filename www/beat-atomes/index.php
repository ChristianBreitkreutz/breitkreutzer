<h1>Meine Beat Atomes</h1>
<?php
if ($handle = opendir ( '.' )) {
	while ( false !== ($file = readdir ( $handle )) ) {
		if ($file != "." && $file != ".." && strtolower ( substr ( $file, strrpos ( $file, '.' ) + 1 ) ) == 'pdf') {
			echo '<li><a href="' . $file . '">' . $file . '</a></li>';
		}
	}
	closedir ( $handle );
}

?>
