<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- Include CSS Styles from this theme -->
 <style>
.navbar {-webkit-box-shadow: 0px 3px 16px 0px rgba(0,0,0,0.17);
-moz-box-shadow: 0px 3px 16px 0px rgba(0,0,0,0.17);
box-shadow: 0px 3px 16px 0px rgba(0,0,0,0.17);}
.list-group li{padding-left: 0px}
a {color:#000;text-decoration: none;}
a:hover{color:#333;text-decoration: none;}
a:hover .card{background-color: #fffaed;border-color:#fcefc9;}
</style>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- Site head plugins -->
<?php Theme::plugins('siteHead'); ?>