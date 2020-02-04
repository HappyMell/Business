<section class="about-services container" >
          <div class="about-services__title" data-sal-duration="1200" data-sal="fade" data-sal-delay="300" data-sal-easing="ease-out-bounce">
              <p><?php echo the_field('title')?></p>
              <h1><?php echo the_field('large_title')?></h1>
          </div>
          <div class="about-services__choice">
          <?php $services = get_field('services')?>
          <?php foreach($services as $service) {?>
          <div class="about-services__choices" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease-out-bounce">          
            <i class="<?php echo $service['icon']?> fa-3x"></i>
              <p><?php echo $service['category']?></p>
              <p><?php echo $service['details']?></p>
          </div>
          <?php }?>
          

          </div>
         
      </section>