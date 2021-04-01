<?php Theme::plugins('pageBegin'); ?>
    <!-- content -->
    <div class="container pt-5">
      <br><br><br>
      <div class="row ">
        <div class="col-md-12 pb-5 text-center">
        <img class="img-fluid rounded pb-5" src="<?php echo Theme::src('img/404error.png'); ?>" alt="Error" width="500">
        <p><a class="btn btn-warning" href="<?php echo $site->url(); ?>" role="button">Go to homepage</a></p>
        </div>
      </div>
    </div>
    <!--/ content -->
    <!--/ footer -->
  <?php Theme::plugins('pageEnd'); ?>