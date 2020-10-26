<?php
/*
Template Name: Top
*/
?>


<?php get_header(); ?>

<img class="top-view" src="<?php echo get_template_directory_uri(); ?>/assets/top/topview.png">


  <div class="top-page">
    <div class="top-assets">
      <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/top/line.png">
    </div>
    <div class="introduction1">
      <p>お一人お一人に専属のスタイリスト</p>
      <img class="step1" src="<?php echo get_template_directory_uri(); ?>/assets/top/step.png">
    </div>


    <img class="star" src="<?php echo get_template_directory_uri(); ?>/assets/top/star.png">

    <div class="introduction2">
      <p>ハイライト、グラデーションを</p>
      <p>得意とした高いカラー技術</p>
      <img class="step2" src="<?php echo get_template_directory_uri(); ?>/assets/top/step.png">
    </div>

    <img class="star" src="<?php echo get_template_directory_uri(); ?>/assets/top/star.png">

    <div class="introduction3">
      <p>pc・スマホから簡単ご予約</p>
      <img class="step3" src="<?php echo get_template_directory_uri(); ?>/assets/top/step.png">
    </div>

    <img class="star" src="<?php echo get_template_directory_uri(); ?>/assets/top/star.png">
    <div class="introduction4">
      <p>アフターケアも充実の安心サポート</p>
      <img class="step4" src="<?php echo get_template_directory_uri(); ?>/assets/top/step.png">
    </div>

    <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/top/line.png">

    <div class="wall-assets">
      <img class="wall" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/stylebg.jpg">
      <img class="style1" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style1.jpg">
      <img class="style2" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style2.jpg">
      <img class="style3" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style3.jpg">
      <img class="style4" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style4.jpg">
      <img class="style5" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style5.jpg">
      <img class="style6" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style6.jpg">
      <img class="style7" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style7.jpg">
      <img class="style8" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style8.jpg">
      <img class="style9" src="<?php echo get_template_directory_uri(); ?>/assets/top/style一覧/style9.jpg">


    </div>

    <img class="all" src="<?php echo get_template_directory_uri(); ?>/assets/top/allstyle.png">



  </div>
  <?php get_footer(); ?>
  <style>




    .top-view {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: auto;
      z-index: 1;

    }

    .top-page {
      margin-top: 60vw;
      text-align: center;
      font-size: 2.6vw;
      font-family: serif;
      font-weight: 600;
    }

    .top-page p {
      margin: 1%;
    }



    .line {
      width: 75%;
    }

    .introduction1 {
      position: relative;
      text-align: right;
      padding: 4% 10% 4% 10%;
      margin: 5% 5% 5% 0;

    }

    .introduction2 {
      position: relative;
      text-align: left;
      padding: 4% 10% 4% 10%;
      margin: 5% 0 5% 6%;
    }

    .introduction3 {
      position: relative;
      text-align: right;
      padding: 5% 10% 5% 10%;
      margin: 5% 5% 5% 0;


    }

    .introduction4 {
      position: relative;
      text-align: left;
      padding: 5% 10% 5% 15%;

      margin: 5% 0 5% 0;
    }


    .step1 {
      position: absolute;
      top: -5%;
      left: 18%;
      height: 135%;
      width: auto;
    }

    .step2 {
      position: absolute;
      top: 0;
      right: 12%;
      height: 101%;
      width: auto;
    }

    .step3 {
      position: absolute;
      top: -4%;
      left: 18%;
      height: 117%;
      width: auto;
    }

    .step4 {
      position: absolute;
      top: -3%;
      right: 12%;
      height: 117%;
      width: auto;

    }



    .star {
      width: 75%;
    }

    .wall-assets {
      text-align: center;
      position: relative;
      margin-top: 7%;
    }

    .wall {
      width: 83%;
    }

    .style1 {
      position: absolute;
      top: 2.5%;
      left: 19%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style2 {
      position: absolute;
      top: 2.5%;
      left: 40%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style3 {
      position: absolute;
      top: 2.5%;
      left: 61%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style4 {
      position: absolute;
      top: 36%;
      left: 19%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style5 {
      position: absolute;
      top: 36%;
      left: 40%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style6 {
      position: absolute;
      top: 36%;
      left: 61%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style7 {
      position: absolute;
      top: 72%;
      left: 19%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style8 {
      position: absolute;
      top: 72%;
      left: 40%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .style9 {
      position: absolute;
      top: 72%;
      left: 61%;
      height: 24%;
      width: auto;
      padding: 2px;
      background-color: white;
    }

    .all {
      width: 20%;
      margin: 4% 0;
    }

    @media (min-width: 1200px) {

      .top-page {
        font-size: calc(1200px * 0.026);
      }

    }


  </style>

</body><!-- 画面に表示されるエリアの終了 -->

</html>
