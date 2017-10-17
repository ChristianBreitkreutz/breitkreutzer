<html>
  <head>
    <?php require('header.php'); ?>
  </head>
  <body >
  <div class="container">
    <?php require('headline.php'); ?>
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
