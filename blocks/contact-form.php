<section class="contact-us container-sm">
        <div class="contact-us__body slide-up">
        <div class="contact-us__title">
          <h1><?php echo the_field('title')?></h1>
          <p><?php echo the_field('details')?></p>
        </div>
        <div class="contact-us__form" >
        [ninja_form id=1]
        </div>

        
        </div>
        <div class="contact-us__offices slide-up">
          <div class="contact-us__office flick">
           <?php echo the_field('office_details')?>
          </div>

          <div class="contact-us__office flick">
           <?php echo the_field('offices')?>
          </div>

          <div class="contact-us__office flick">
            <?php echo the_field('hours')?>
          </div>

          <div class="contact-us__office flick">
           <?php echo the_field('contact')?>
          </div>
        </div>
      </section>