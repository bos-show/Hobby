<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>
<!-- enmty -->
</div>

<div class="blog-img">
<img class="blogtop" src="<?php echo get_template_directory_uri(); ?>/assets/blogtop.jpg">
<p class="blog-title1">one X one</p>
<p class="blog-title2">blog</p>
</div>
<div class="content">


<main>

        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

        <section class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </section>

        <?php
        endwhile;
        endif;
        ?>

        <?php
          the_posts_navigation( array(
            'prev_text'           => '&lt; 過去の投稿',
            'next_text'           => '最近の投稿 &gt;',
            'screen_reader_text'  => 'Navigation',
          ) );
        ?>

    </main>

<?php get_footer(); ?>

<style>

.blog-img {

  position: relative;
  margin: 7vw 0;
  background-color: black;
  font-family: 'Alegreya Sans SC', sans-serif;
}

.blogtop {

  width: 100vw;
  height: auto;
  opacity: 80%;
  -ms-filter: blur(4px);
  filter: blur(4px);
}

.blog-img .blog-title1 {
  position: absolute;
  color: white;
  font-size: 14vw;
  top: 50%;
  left: 50%;
  -webkit-transform : translate(-50%,-50%);
  transform : translate(-50%,-50%);
  border: dashed 2px white;
  padding: 0 5vw 10vw 5vw;
  white-space: nowrap;
}

.blog-img .blog-title2 {
  position: absolute;
  color: white;
  font-size: 14vw;
  top: 61%;
  left: 50%;
  -webkit-transform : translate(-50%,-50%);
  transform : translate(-50%,-50%);
}




main {
  margin: 5vw 5vw 0 5vw;

}

.post {
  width: 100%;
  height: 20vw;
  margin-bottom: 2vw;
  padding-left: 1vw;
  padding-top: 1vw;

  background: #f8f0d7;
  border-left: 1vw dotted rgba(0,0,0,.1);
  box-shadow: 0 0 0 5 #f4e2a9;

}


.post h2 {
  font-size: 7vw;
  margin-bottom: 0;
}

.post h2 a {
  color: #bf7d0d;
  border-bottom: solid 1px #e2c094;
}

.post p {
  font-size: 3vw;
  margin-bottom: 0;
  color: #583519;

}

.posts-navigation {
  margin-top: 3vw;
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

  .post {
    width: 100%;
    height: 14vw;
    margin-bottom: 2vw;
    padding-left: 1vw;
    padding-top: 1vw;

    background: #f8f0d7;
    border-left: 1vw dotted rgba(0,0,0,.1);
    box-shadow: 0 0 0 5 #f4e2a9;

  }


  .post h2 {
    font-size: 3.5vw;
    margin-bottom: 0;
  }

  .post h2 a {
    color: #bf7d0d;
    border-bottom: solid 1px #e2c094;
  }

  .post p {
    font-size: 2.2vw;
  }

  .nav-previous a {
    font-size: 2vw;
    color: #bf7d0d;
    font-weight: 700;
  }


  .nav-next a {
    font-size: 2vw;
    color: #bf7d0d;
    font-weight: 700;
  }
}

@media (min-width: 1200px) {

  .post {

    height: calc(1200px * 0.14);
    margin-bottom: calc(1200px * 0.02);
    padding-left: calc(1200px * 0.01);
    padding-top: calc(1200px * 0.01);

    border-left: calc(1200px * 0.01) dotted rgba(0,0,0,.1);


  }

  .post h2 {
    font-size: calc(1200px * 0.035);
  }

  .post p {
    font-size: calc(1200px * 0.022);
  }

  .nav-previous a {
    font-size: calc(1200px * 0.02);
  }


  .nav-next a {
    font-size: calc(1200px * 0.02);
  }


}



</style>

</body><!-- 画面に表示されるエリアの終了 -->

</html>
