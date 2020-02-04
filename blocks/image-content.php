<section class="about-section container-md ">
<?php $card = get_field('image_&_content')?>

<?php foreach($card as $cards) {?>
        <div class="about-card slide-up" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease-out-bounce">
          <div class="about-card__img">
            <img src="<?php echo $cards['image']?>" />
          </div>
          <div class="about-card__info">
            <p class="card-title"><?php echo $cards['title']?></p>
            <h1><?php echo $cards['big_title']?></h1>
            <p class="card-paragraph">
              <?php echo $cards['content']?>
            </p>

            <button class="card-button">
              <a href="<?php echo $cards['button']['url']?>">Learn More</a>
            </button>
          </div>
        </div>
<?php }?>
 
     
      </section>