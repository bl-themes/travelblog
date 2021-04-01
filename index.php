<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body>
   <?php Theme::plugins('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP.'topbar.php'); ?>
    <?php
      if ($WHERE_AM_I == 'page') {
      if ($page->slug() == 'error') {
         include(THEME_DIR_PHP.'error.php');
      }
      else {
         include(THEME_DIR_PHP.'page.php');
      }
      } else {
      include(THEME_DIR_PHP.'home.php');
      }
    ?>
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
    <?php Theme::plugins('siteBodyEnd'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>