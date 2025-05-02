<?php 
get_header(); 
?>

<div id="main">
    <section class="first-container">
        <h1 style="margin: 1.5rem 0; color: rgb(229, 224, 216); font-weight: 700; font-family: condensed; font-size:2.5rem;">Publications</h1>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: rgb(229, 224, 216);">SELECTED POEMS</h3>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'poetry') : ?>
                    <div class="pub" style="margin:1rem 0;">
                        <h4 style="color:rgb(229, 224, 216); font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color:rgb(229, 224, 216); text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div>
                <?php endif; 
            } 
            ?>
        </div>

        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: rgb(229, 224, 216);">SELECTED NONFICTION</h3>
            <?php 
            while(have_posts()) {
                the_post();  
                $genre = get_field('genre');
                if ($genre == 'nonfiction') : ?>
                    <div class="pub" style="margin:1rem 0;">
                        <h4 style="color:rgb(229, 224, 216); font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4>
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php echo get_field('link') ?>" style="color:rgb(229, 224, 216); text-transform: capitalize;">
                                “<?php echo get_field('title'); ?>”
                            </a>
                        </p>
                    </div>
                <?php endif; 
            } 

            echo paginate_links();
            ?>
        </div>
		        <div class="pub-container">
            <h3 style="margin: 2rem 0; color: rgb(229, 224, 216);">NEWSLETTER</h3>
            <?php 
                $homepagePosts = new WP_Query(array(
                'posts_per_page' => 25
                 ));
            while($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>
                    <div class="pub" style="margin:1rem 0;">
                        <!-- <h4 style="color:rgb(229, 224, 216); font-family: condensed; font-weight: 400; font-size:14px; text-transform: uppercase; line-height: 1em; letter-spacing: .12em;">
                            <?php echo get_field('journal') ?>
                        </h4> -->
                        <p style="text-transform: Capitalize; font-family: garamond; margin:1rem 0 0 1rem;">
                            <a href="<?php the_permalink() ?>" style="color:rgb(229, 224, 216); text-transform: capitalize;">
                                “<?php the_title(); ?>”
                            </a>
                        </p>
                    </div>
                <?php 
            } ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>