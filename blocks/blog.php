
      <section class="main-blog container-md">
          <div class="main-blog__title slide-up">
              <p><?php echo the_field('title')?></p>
              <h1><?php echo the_field('sub_title')?></h1>
          </div>
          <?php $posts = get_field('blogs')?>
            <?php if($posts) {?>
          <div class="main-blog__blogs">
          <?php foreach($posts as $post) {?>
            <?php setup_postdata($post); ?>
              <div class="main-blog__blog slide-up">
                  <?php echo get_the_post_thumbnail($post)?>
                  <h1><?php echo get_the_title($post)?></h1>
                  <p><?php the_content()?></p>
                  <p class="date"><?php echo get_the_date()?></p>  
              </div>
          <?php } ?>
            </div>
            <?php wp_reset_postdata();?>
            <?php }?>
      </section>