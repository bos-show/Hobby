<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
  </div>
  <div class="empty">
  </div>

  <div class="container">
    <div class="row justify-content-between">
      <div class="d-none d-md-block col-md-3 order-2">
        <div class="container">
          <div class="row">
            <h1 style="text-align:center; width:255px; font-size:20px; height:74px; border-bottom:solid 2px black"><span style="display:inline-block; margin-top:45px">スタッフ</span></h1>
            <ul class="nav nav-sidebar text-center">
              <li class="col-12 stylist">湊谷</li>
              <li class="col-12 stylist">宮島</li>
              <li class="col-12 stylist">稲垣</li>
              <li class="col-12 stylist">滑川</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-1">
          <h1 style="font-size:60px; border-bottom:solid 2px black">Gallery</h1>
          <div class="container-fluid">
            <div class="row mt-5 py-3">
              <div class="col-md-6 col-lg-4 my-3">
                <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                  <div class="card-body text-center pb-0">
                    <h6 class="card-title">タイトル</h6>
                    <p>担当者：湊谷</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 my-3">
                <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                  <div class="card-body text-center pb-0">
                    <h6 class="card-title">タイトル</h6>
                    <p>担当者：湊谷</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 my-3">
                <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                  <div class="card-body text-center pb-0">
                    <h6 class="card-title">タイトル</h6>
                    <p>担当者：湊谷</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 my-3">
              <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                <div class="card-body text-center pb-0">
                  <h6 class="card-title">タイトル</h6>
                  <p>担当者：湊谷</p>
                </div>
              </div>
              </div>
              <div class="col-md-6 col-lg-4 my-3">
                <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                  <div class="card-body text-center pb-0">
                    <h6 class="card-title">タイトル</h6>
                    <p>担当者：湊谷</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 my-3">
                <div class="card px-4 py-2 rounded shadow" style="border:solid 4px rgb(236, 230, 230)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/garelly/style8.jpg" class="img-fluid">
                  <div class="card-body text-center pb-0">
                    <h6 class="card-title">タイトル</h6>
                    <p>担当者：湊谷</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>

  <style>

  .container {
    margin-bottom: 5vw;
  }


    .empty {
      margin: 10vw 0;
    }

    .stylist {
      margin-top:5px;
      margin-bottom:5px;
      font-size:20px;
    }

    </style>
    <!-- <script src="js/jquery-3.4.1.slim.min.js"></script> -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('bootstrap-js','js/bootstrap.bundle.min.js',array('jquery')); ?>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    
</body><!-- 画面に表示されるエリアの終了 -->
</html>
