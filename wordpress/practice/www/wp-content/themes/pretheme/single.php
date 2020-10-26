<?php get_header(); ?>

<?php get_header(); ?>

<main>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="time">
  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
</div>

  <p><?php the_content('Read more'); ?></p>

<?php endwhile; endif; ?>


<?php
  the_post_navigation( array(
    'prev_text'           => '前の記事 - %title',
    'next_text'           => '次の記事 - %title',
    'screen_reader_text'  => '前後の記事へのリンク',
  ) );
?>

</main>

<?php get_footer(); ?>

<style>
main {
  margin: 5vw 2vw 7vw 2vw;
}

main .wp-block-image img {
  height: auto;
}

main h1 a {
  font-size: 10vw;
  color: #bf7d0d;
}

main h2 {
  font-size: 6vw;
  margin-bottom: 2vw;
  border-bottom: 4px solid #b37307;
}

main h3 {
  font-size: 5vw;
  margin-bottom: 2vw;
  border-bottom: 2px solid #b37307;

}

main h4 {
  font-size: 4vw;
  margin-bottom: 2vw;
  border-bottom: 1px solid #b37307;

}

main .time {
  font-size: 4vw;
  text-align: right;
}



main p {
  font-size: 5vw;
}

main ul li {
  font-size: 4vw;
}

.wp-block-quote cite {
  font-size: 3.5vw;
}

.wp-block-image figcaption {
  font-size: 3vw;
}


.navigation {
  margin-top: 10vw;
}

.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.nav-links {
  border-top: 1px solid #bf7d0d;
  padding: 0 0 3vw 0;
}

.nav-links:after {
  content: "";
  display: block;
  clear: both;
}

.nav-previous {
  float: left;

}

.nav-previous a {
  font-size: 4vw;
  color: #bf7d0d;
  font-weight: 700;
}

.nav-next {
  float: right
}

.nav-next a {
  font-size: 4vw;
  color: #bf7d0d;
  font-weight: 700;
}





@media (min-width: 600px) {

  main h1 a {
    font-size: 8vw;
    color: #bf7d0d;
  }

  main h2 {
    font-size: 5vw;
    margin-bottom: 2vw;
    border-bottom: 4px solid #b37307;
  }

  main h3 {
    font-size: 4vw;
    margin-bottom: 2vw;
    border-bottom: 2px solid #b37307;

  }

  main h4 {
    font-size: 3vw;
    margin-bottom: 2vw;
    border-bottom: 1px solid #b37307;

  }



  main .time {
    font-size: 2vw;
    text-align: right;
  }





  main p {
    font-size: 2.2vw;
  }


  main ul li {
    font-size: 2.2vw;
  }

  .wp-block-quote cite {
    font-size: 2vw;
  }

  .wp-block-image figcaption {
    font-size: 1.8vw;
  }



  .nav-previous {
    float: left;

  }

  .nav-previous a {
    font-size: 3vw;
    color: #bf7d0d;
    font-weight: 700;
  }

  .nav-next {
    float: right
  }

  .nav-next a {
    font-size: 3vw;
    color: #bf7d0d;
    font-weight: 700;
  }

}

@media (min-width: 1200px) {

  main h1 a {
    font-size: calc(1200px * 0.08);
  }

  main h2 {
    font-size: calc(1200px * 0.05);
  }

  main h3 {
    font-size: calc(1200px * 0.04);

  }

  main h4 {
    font-size: calc(1200px * 0.03);
  }



  main .time {
    font-size: calc(1200px * 0.02);
  }





  main p {
    font-size: calc(1200px * 0.022);
  }


  main ul li {
    font-size: calc(1200px * 0.022);
  }

  .wp-block-quote cite {
    font-size: calc(1200px * 0.02);
  }

  .wp-block-image figcaption {
    font-size: calc(1200px * 0.018);
  }

  .nav-previous a {
    font-size: calc(1200px * 0.03);
  }

  .nav-next a {
    font-size: calc(1200px * 0.03);
  }
}







</style>

</body><!-- 画面に表示されるエリアの終了 -->

</html>
