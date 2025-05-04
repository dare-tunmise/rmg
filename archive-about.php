<?php

get_header() ?>

<section class="about-section">
    <div class="about-page">
        <?php while(have_posts()){
                the_post(); ?>
                    <div class="about-image" style="max-width: 800px;">
                        <img style="width: 100%" src="<?php echo get_theme_file_uri('/assets/images/rasaq.jpg') ?>" alt="Rasaq Malik Portrait" class="about-photo;"/>
                        <figcaption style="font-style: italic; color:gray;font-size:12px;">Photo credit: Rasaq Malik</figcaption>
                    </div>
                    <div class="content-div">
                        <?php the_content()?>                        
                    </div>
        <?php } ?>
    </div>
</section>

<?php
get_footer();
?>