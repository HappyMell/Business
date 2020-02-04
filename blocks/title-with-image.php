<section class="work-section container-md">
      <div class="work-section__title" data-sal-duration="1200" data-sal="fade" data-sal-delay="300" data-sal-easing="ease-out-bounce">
          <p><?php echo the_field('title')?></p>
          <h1><?php echo the_field('sub_title')?></h1>
      </div>
      
      <div class="work-section__projects">
      <?php $projects = get_field('projects')?>
      <?php foreach($projects as $project) {?>
          <div class="work-section__project" data-sal-duration="500" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
              <img src="<?php echo $project['image']?>">
              <p><?php echo $project['title']?></p>
              <p><?php echo $project['category']?></p>
          </div>
      <?php }?>
        

       
      </div>
     </section>