<div class="col-md-4">
          <h3 class="pb-2 pt-1">Latest Article</h3>
          <ul class="list-group list-group-flush ">
            <?php
              $listOfKeys = $pages->getList(1, 8);
              if ($listOfKeys) :
              foreach ($listOfKeys as $key) :
              $lPage = new Page($key);
              ?>
            <li class="list-group-item "><a href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
            <?php endforeach ?>
            <?php endif ?>
          </ul>

          <!-- ads 2 -->
          <span>
            <br>
            <!-- start affiliated script -->
            <a target="_blank" href="https://c111.travelpayouts.com/click?shmarker=130872&trs=26496&promo_id=3287&source_type=banner&type=click"><img class="img-fluid" src="https://c111.travelpayouts.com/content?promo_id=3287&trs=26496&shmarker=130872&type=init" alt="Start_Your_Journey_Lifestyle_EN_v1_336x280" width="336" height="280"></a>
            <!-- end affiliated script -->
            <br>
          </span>
          <!--/ ads 2 -->

          <h3 class="pb-2 pt-4">Travel Blog</h3>
          <ul class="list-group list-group-flush pb-5">
            <?php foreach ($staticContent as $staticPage): ?>
            <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
            <li class="list-group-item "><a href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a></li>
            <?php } ?>
            <?php endforeach ?>
          </ul>
        </div>