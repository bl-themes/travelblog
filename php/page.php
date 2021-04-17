<?php Theme::plugins('pageBegin'); ?>
    <!-- content -->
    <div class="container pt-5">
      <br><br><br>
      <div class="row ">
        <div class="col-md-8 pb-5">
        <?php if ($page->coverImage()): ?>
        <img class="img-fluid rounded mt-1" src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>">
        <p class="text-secondary pt-1"><small><?php echo $page->custom('figure'); ?></small></p>
        <?php endif ?>
        <!-- ads 1 -->
        <!-- start affiliated script -->
          <a target="_blank" href="https://c104.travelpayouts.com/click?shmarker=130872&trs=26496&promo_id=2931&source_type=banner&type=click"><img class="img-fluid" src="https://c104.travelpayouts.com/content?promo_id=2931&trs=26496&shmarker=130872&type=init" alt="728*90" width="728" height="90"></a>
          <!-- end affiliated script -->
        <!--/ ads 1 -->
        <h1 class="pt-4"><?php echo $page->title(); ?></h1>
        <p class="text-secondary"><small><i class="far fa-folder text-danger"></i>&nbsp;<?php echo $page->category() ?> &nbsp;<i class="far fa-clock text-danger"></i>&nbsp;<?php echo $page->date(); ?> &nbsp;<i class="far fa-user text-danger"></i>&nbsp;<?php echo $page->user('nickname'); ?></small></p>
        <p class="pt-3"><?php echo $page->content(); ?></p>
            <?php Theme::plugins('pageEnd'); ?>
        <br>
        <?php if (!empty($page->tags(true))): ?>
        <ul class="nav">
          <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
          <li class="nav-item bg-light me-3 rounded">
            <a class="nav-link" href="<?php echo DOMAIN_TAGS.$tagKey ?>"><i class="fas fa-hashtag text-warning"></i>&nbsp;<?php echo $tagName; ?></a>
          </li>
          <?php endforeach ?>
        </ul>
        <?php endif; ?>
        </div>
        <!-- sidebar -->
        <?php include('sidebar.php'); ?>
        <!--/ sidebar -->
         <!-- ads 3 -->
          <div class="container pb-5">
            <div class="row">
              <div class="col text-center">
                <!-- start affiliated script -->
                <a target="_blank" href="https://c163.travelpayouts.com/click?shmarker=130872&trs=26496&promo_id=4686&source_type=banner&type=click"><img class="img-fluid" src="https://c163.travelpayouts.com/content?promo_id=4686&trs=26496&shmarker=130872&type=init" alt="Hello Adventure" width="728" height="90"></a>
                <!-- end affiliated script -->
              </div>
            </div>
          </div>
          <!--/ ads 3 -->
      </div>
    </div>
    <!--/ content -->
    <!--/ footer -->
