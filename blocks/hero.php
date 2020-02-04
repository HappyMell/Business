<section class="main-hero container"  data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
        <div class="main-hero__img">
          <img src="<?php echo get_field('image')?>" /> 
          <div class="main-hero__info" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease-out-bounce">
            <h1><?php echo get_field('header')?></h1>
            <p><?php echo get_field('sub_header')?></p>
            <?php $type = get_field('type')?>
            <?php if($type) {?>
            <button class="hero-button">
              <a href="<?php echo get_field('button')['url']?>">Learn More</a>
            </button>
            <?php }?>
          </div>
        </div>       
      </section>