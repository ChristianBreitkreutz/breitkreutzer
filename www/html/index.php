html>
<head>
<style>

body {
  background-color: #345345;
}


.linkbar {
  height: 140px;
  width: 99%;
  background:#ff00ff;
  margin-top: 10;
  margin-right: 0;
  display: table;
  position: relative;
}

</style>
</head>
<body marginwidth="0" marginheight:"0" >
  <h1>breitkreutzer</h1>
  <hr>
<?php
if ($handle = opendir ( 'projects' )) {
        while ( false !== ($file = readdir ( $handle )) ) {
                if ($file != "." && $file != "..") {
                        echo '<a href="projects/' . $file . '" class="linkbar" ><span>' . $file . 'alksdflaksdljf  <img src="http://www.marions-kochbuch.de/index-bilder/knoblauch-fleisch-wurst.jpg" width=100 /></span></a>';
                }
        }
        closedir ( $handle );
}     

?>
     
</body>
</html>i  