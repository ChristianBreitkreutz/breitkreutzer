<h1>Meine Beat Atomes</h1>
<?php
if ($handle = opendir ( 'projects' )) {
	while ( false !== ($file = readdir ( $handle )) ) {
		if ($file != "." && $file != ".." ) {
			echo '<li><a href="projects/' . $file . '">' . $file . '</a></li>';
		}
	}
	closedir ( $handle );
}

?>
