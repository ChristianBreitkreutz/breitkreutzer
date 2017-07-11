<html>
<head>
<style>

a.outerBox {
  padding: inherit;
  padding-left: 200px;
  padding-right: 1000px;
  background-color: #dedede;

}
div.outerBox {
  padding: 40px;
  margin: 12px;
}
</style>
</head>
<body>
  <h1>breitkreutzer</h1>
  <hr>
<?php
if ($handle = opendir ( 'projects' )) {
	while ( false !== ($file = readdir ( $handle )) ) {
		if ($file != "." && $file != "..") {
			echo '<div class=outerBox ><a class=outerBox href="projects/' . $file . '"><span class = "linkbar">' . $file . '</span></a></div>';
		}
	}
	closedir ( $handle );
}

?>

</body>
</html>