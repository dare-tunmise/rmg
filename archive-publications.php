<?php 
get_header(); 
?>
    <section class="first-container" style="max-width: 800px; margin: 5rem auto; padding:1rem  2rem;">
        <h1 style="margin: 1.5rem 0; color: #000000; font-weight: 700; font-family: condensed; font-size:2.5rem;">Publications</h1>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: #000000;">SELECTED POEMS</h3>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'poetry') : ?>
                    <div class="pub" style="margin:1rem 0;">
                        <h4 style="color: #000000; font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color: #000000; text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div>
                <?php endif; 
            } 
            ?>
        </div>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: #000000;">SELECTED ESSAYS</h3>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'essay') : ?>
                    <div class="pub" style="margin:1rem 0;">
                        <h4 style="color: #000000; font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color: #000000; text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div>
                <?php endif; 
            } 
            ?>
        </div>

        <div class="pub-container">
            <h3 style="margin: 1rem 0; color: #000000;">SELECTED INTERVIEWS</h3>
            <ul style="padding-left: 20px;">
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'interview') : ?>
                     <li><a href="<?php echo get_field('link') ?>" style="color: #000000; font-weight: 500; font-size:20px;"> <?php echo get_field('journal') ?></a></li>
                    <!-- <div class="pub" style="margin:1rem 0;">

                        <h4 style="color: #000000; font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color: #000000; text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div> -->
                <?php endif; 
            } 
            ?>
            </ul>
        </div>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: #000000;">SELECTED REVIEWS</h3>
            <ul>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'review') : ?>
                 <li><a href="<?php echo get_field('link') ?>" style="color: #000000; font-family: condensed; font-weight: 500; font-size:25px;"> <?php echo get_field('journal') ?></a></li>
                    <!-- <div class="pub" style="margin:1rem 0;">
                        <h4 style="color: #000000; font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color: #000000; text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div> -->
                <?php endif; 
            } 
            ?>
            </ul>
        </div>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: #000000;">SELECTED NONFICTION</h3>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'nonfiction') : ?>
                    <div class="pub" style="margin:1rem 0;">
                        <h4 style="color: #000000; font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color: #000000; text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div>
                <?php endif;
            } 

            echo paginate_links();
            ?>
        </div>
    </section>

<?php get_footer(); ?>