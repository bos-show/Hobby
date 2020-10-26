<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
  <img class="heading" src="<?php echo get_template_directory_uri(); ?>/assets/staff/onexoneheading.png">
  <div class="about-page">

    <div class="about-staff">
      <p>スタッフ紹介</p>
      <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/staff/line.png">
      <div class="staff">
        <div class="staff-png-l">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/staff/湊谷 健太（ミナトヤ　ケンタ）.jpg">
        </div>
        <div class="staff-sentence-r">
          <pre>湊谷  健太</pre>
          <small>初めまして。オーナースタイリストの湊谷です。<br>
            お客様の個性を活かして可愛くかっこよくなりましょう！<br>
            よろしくお願い致します☆
          </small>
        </div>
      </div>
      <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/staff/star.png">
      <div class="staff">
        <div class="staff-png-r">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/staff/稲垣 花菜（イナガキ　カナ）.jpg">
        </div>
        <div class="staff-sentence-l">
          <pre>稲垣  花菜</pre>
          <small>
            初めまして！4月から新しく加わりました花菜です！<br>
            日頃の疲れを癒す<br>
            シャンプーとマッサージはお任せください！<br>
            One×One HAIR唯一の女子で<br>
            おしゃべりが大好きなので<br>
            気軽になんでも話しかけてください(^ ^)
          </small>
        </div>
      </div>
      <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/staff/star.png">
      <div class="staff">
        <div class="staff-png-l">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/staff/滑川 裕也（ナメリカワ　ユウヤ）.jpg">
        </div>
        <div class="staff-sentence-r">
          <pre>滑川  裕也</pre>
          <small>ハイライト、透明感カラー、メンズカット得意です！<br>
            お客様のライフスタイルに合わせて<br>
            似合うスタイルを提案させていただきます。<br>
            お店では、楽しい空間を作ります。
          </small>
        </div>
      </div>
      <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/staff/line.png">

    </div>

    <img class="information-png" src="<?php echo get_template_directory_uri(); ?>/assets/staff/salonInfomation.png">

    <div class="info-wrapper">
      <div class="info-left">
        <p>
          店舗名
        </p>
        <p>
          住所<br>
          <br>
        </p>
        <p>
          TEL
        </p>
        <p>
          営業時間
        </p>
      </div>
      <div class="info-right">
        <p>
          One× One hair(ワン　バイ　ワン　ヘアー)
        </p>
        <p>
          〒 930-0966<br>
          富山県富山市石金1-9-12 パークサイド石金1階
        </p>
        <p>
          076-461-3122
        </p>
        <p>
          平日 am9:00~pm20:00<br>
          (カット最終受付 19:00)<br>
          土日祝 am9:00~pm19:00<br>
          (カット最終受付 18:00)
        </p>
      </div>
    </div>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.4197204691636!2d137.23110641528675!3d36.68845077997173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff791c10747f371%3A0x1ce824b480275491!2zT25lw5dPbmUgSEFJUu-8iOODr-ODs-ODkOOCpOODr-ODs-ODmOOCou-8iQ!5e0!3m2!1sja!2sjp!4v1580473248284!5m2!1sja!2sjp"
        width="100%" height="105%" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
  </div>

    <?php get_footer(); ?>
    <style>


      .heading {
        position: absolute;
        top: 6vw;
        left: 0;
        width: 100%;
        height: auto;
      }

      .about-page {
        margin-top: 60vw;
        text-align: center;
        font-size: 2.6vw;
        font-weight: 600;
      }

      .about-staff {
        font-family: serif;
      }

      .staff {
        width: 75%;
        margin: 0 12.5% 0 12.5%;
        font-family: serif;
        height: auto;
      }

      .staff pre {
        margin-top: 0;
        margin-bottom: 1.5vw;
        font-family: serif;
        font-size: 3.2vw;
      }

      .staff small {
        font-weight: 300;
        margin-bottom: 0;
      }

      .staff-png-l {
        float: left;
        width: 35vw;
      }

      .staff-png-r {
        float: right;
        width: 35vw;
      }

      .staff-sentence-r {
        float: right;
        width: 40vw;
        text-align: left;
      }

      .staff-sentence-l {
        float: left;
        width: 40vw;
        text-align: left;
      }

      .staff-png-l img {
        float: left;
        width: 25vw;
        height: auto;
      }

      .staff-png-r img {
        float: right;
        width: 25vw;
        height: auto;
      }

      .line {
        width: 75%;
        margin: 5vw 0;
      }

      .information-png {
        width: 75%;
        height: auto;
        margin: 10% auto 7% auto;
      }

      .info-wrapper {
        width: 100%;
        height: auto;
        font-family: serif;
        font-style: italic;
        font-weight: 200;
      }

      .info-left {
        width: 17%;
        float: left;
        margin-left: 18%;
        text-align: left;
      }

      .info-right {
        width: 65%;
        float: right;
        text-align: left;
      }

      .map {
        height: 0;
        overflow: hidden;
        padding-bottom: 71.25vw;
        position: relative;
        clear: both;
      }

      .map iframe {
        position: absolute;
        left: 0;
        top: 15vw;
        height: 100%;
        width: 100%;
      }



      @media (max-width: 600px) {

        .about-page {
          font-size: 4vw;

        }

        .staff {
          width: 85%;
          margin: 0 7.5% 0 7.5%;

        }
        .staff-png-l {

          width: 45vw;
        }

        .staff-png-r {

          width: 45vw;
        }

        .staff-png-l img {

          width: 35vw;

        }

        .staff-png-r img {

          width: 35vw;

        }

        .staff pre {
          font-size: 4vw;
        }
        .info-left {

          margin-left: 13%;

        }

        .info-right {
          width: 70%;

        }
      }

      @media (min-width: 1200px) {

        .about-page {
          font-size: calc(1200px * 0.026);

        }

        .staff pre {
          font-size: calc(1200px * 0.032);
        }

        .staff-png-l {
          width: calc(1200px * 0.35);
        }

        .staff-png-r {
          width: calc(1200px * 0.35);
        }

        .staff-png-l img {
          width: calc(1200px * 0.25);
        }

        .staff-png-r img {
          width: calc(1200px * 0.25);
        }

        .staff-sentence-r {
          width: calc(1200px * 0.4);
        }

        .staff-sentence-l {
          width: calc(1200px * 0.4);
        }

      }






    </style>

</body><!-- 画面に表示されるエリアの終了 -->

</html>
