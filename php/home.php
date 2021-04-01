<?php if ($WHERE_AM_I == 'home'): ?>
    <!-- affiliate travel form -->
    <div class="container-fluid bg-danger pt-5 pb-5">
    <div class="container">
      <br><br>
      <div class="row">
      <h1 class="fw-bolder text-white display-5"><?php echo $site->slogan(); ?></h1>
      <span class="lead text-white"><?php echo $site->description(); ?></span>
      <p class="pt-3">
        <!-- start affiliated script -->
        <script charset="utf-8" src="//www.travelpayouts.com/widgets/79ece7e4bd51fddd5a7e3e6308b8f035.js?v=2160" async></script>
        <!-- end affiliated script -->
      </p>
      </div>
    </div>
    </div>
    <!--/ affiliate travel form -->
    <?php endif; ?>
    <!-- ads 1 -->
    <div class="container pt-5 pb-3">
      <br><br>
      <div class="row">
        <div class="col text-center">
          <!-- start affiliated script -->
          <a target="_blank" href="https://c104.travelpayouts.com/click?shmarker=130872&trs=26496&promo_id=2931&source_type=banner&type=click"><img class="img-fluid" src="https://c104.travelpayouts.com/content?promo_id=2931&trs=26496&shmarker=130872&type=init" alt="728*90" width="728" height="90"></a>
          <!-- end affiliated script -->
        </div>
      </div>
    </div>
    <!--/ ads 1 -->

    <!-- content -->
    <div class="container pt-5">
      <div class="row ">
        <div class="col-md-8 pb-5 ">
          <h2 class="pb-3"><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('Recommendation for you')) ?></h2>
          <?php if (empty($content)) { $language->p('No pages found'); } ?>
          <?php foreach ($content as $page): ?>
          <!-- cd 1 -->
          <a href="<?php echo $page->permalink(); ?>">
            <div class="card mb-3 rounded gap-3 mb-4">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->title(); ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body align-middle">
                    <h5 class="card-title"><?php echo $page->title(); ?></h5>
                    <p class="card-text"><small class="text-muted"><i class="far fa-clock text-danger"></i>&nbsp;<?php echo $page->date(); ?></small><br>
                    <?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!--/ cd 1 -->
          <?php endforeach ?>
          <!-- nav -->
          <?php if (Paginator::numberOfPages()>1): ?>
          <div class="col-md-12 pt-4 position-relative text-center">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <?php if (Paginator::showPrev()): ?>
            <a class="btn btn-outline-dark" href="<?php echo Paginator::previousPageUrl() ?>" role="button">Previous</a>
            <?php endif ?>
            <?php if (Paginator::showNext()): ?>
            <a class="btn btn-outline-dark" href="<?php echo Paginator::nextPageUrl() ?>" role="button">Next</a>
            <?php endif ?>
            </div>
          </div>
          <?php endif ?>
          <!--/ nav -->
        </div>
        <!-- sidebar -->
        <?php include('sidebar.php'); ?>
        <!--/ sidebar -->
         <!-- ads 3 -->
          <div class="container pb-5">
            <div class="row">
              <div class="col text-center">
                <!-- start affiliated script -->
                <a target="_blank" href="https://c163.travelpayouts.com/click?shmarker=130872&trs=26496&promo_id=4686&source_type=banner&type=click"><img class="img-fluid"  src="https://c163.travelpayouts.com/content?promo_id=4686&trs=26496&shmarker=130872&type=init" alt="Hello Adventure" width="728" height="90"></a>
                <!-- end affiliated script -->
              </div>
            </div>
          </div>
          <!--/ ads 1 -->
      </div>
    </div>
    <!--/ content -->