<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link rel="stylesheet" href="normal.css">
</head>
<body >
 
<div class="container">
  <div class="headLine">
      <div class="headline-item">
      Projekte
      </div>
      <div class="headline-item">
      |
      </div>
      <div class="headline-item">
      Musik
      </div>
      <div class="headline-item">
      |
      </div>
      <div class="headline-item" >
      Ich
      </div>
  </div>
  <div class="base">
<?php
if ($handle = opendir ( 'projects' )) {
    while ( false !== ($folder = readdir ( $handle )) ) {
        if ($folder != "." && $folder != "..") {
?>
    <a href="projects/<?php echo $folder ?>" target="newTab" >
    <?php
        $myfile = fopen("projects/".$folder."/css.part", "r");
        echo fread($myfile,filesize("projects/".$folder."/css.part"));
        fclose($myfile);
    ?>
        <span class="text-with-background">
            <?php echo $folder ?>
          </span>
      </div>
    </a>
<?php
        }
    }
    closedir ( $handle );
}
?>
  </div>
</div>

</body>
</html>
