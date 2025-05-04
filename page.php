<?php get_header();

while(have_posts()) {
    the_post() ?>

    <section class="first-container">
            <div class="single-container" style="width: 100%; max-width: 600px; padding: 10px;margin:10% auto;box-sizing: border-box;">   
                <h1 style= "color: #000000; margin: 1rem 0;; text-align: center;"><?php the_title(); ?></h1> 
                <div class="form-div" style="width: 100%; max-width: 600px; box-sizing: border-box; margin:0 auto;"><?php the_content(); ?></div>  
            </div>
    </section>
  <?php }

get_footer() ?>