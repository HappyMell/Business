<section class="front-news container-md slide-up">
        <div class="news-title " data-sal-duration="1500" data-sal="fade" data-sal-delay="300" data-sal-easing="ease-out-bounce">
          <p><?php echo the_field('title')?></p>
          <h1><?php echo the_field('big_title')?></h1>
        </div>
        <div class="front-news__main-content">
        <?php $posts =  get_field('news'); 
        if( $posts ): ?>
         

        <div class="front-news__content">
        <?php foreach( $posts as $post): ?>
            <?php setup_postdata($post); ?>
          <div class="front-news__blog"  data-sal-duration="1200" data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease-out-bounce">
            <h2><a href="<?php  echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></h2>
            <p class="date"><?php date?></p>
            <p class="front-news__body">
              <?php the_content($post)?>
            </p>
          </div>  
          <?php endforeach;?>

           </div>

        <?php 
      wp_reset_postdata();
      endif;?>
        </div>
      </section>