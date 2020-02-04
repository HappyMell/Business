<section class="team-section container-md" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
      <div class="team-section__title">
          <p><?php echo the_field('title')?></p>
          <h1><?php echo the_field('sub_title')?></h1>
      </div>
      
      <div class="team-section__peoples">
      <?php $people = get_field('team')?>
      <?php foreach($people as $person) {?>
          <div class="team-section__people flick" >
              <img src="<?php echo $person['image']?>">
              <p><?php echo $person['name']?></p>
              <p><?php echo $person['position']?></p>
          </div>
      <?php }?>
         
      </div>
     </section>