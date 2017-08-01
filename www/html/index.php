<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link rel="stylesheet" href="normal.css">
</head>
<body>
  <div class="header">
    <h1>- breitkreutzer -</h1>
  </div>

  <div class="menu">
    <ul>
<?php
if ($handle = opendir ( 'projects' )) {
	while ( false !== ($folder = readdir ( $handle )) ) {
		if ($folder != "." && $folder != "..") {
			echo '<li>';
			echo '<a href="projects/'.$folder. '" class="linkbar" >';
            echo '<img src="projects/'.$folder.'/icon.svg" width=100 />';
	            echo $folder ;
            echo '</a>';
            echo '</li>';
		}
	}
	closedir ( $handle );
}

?>
    </ul>
  </div>
</body>
</html>