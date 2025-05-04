<?php 
get_header(); 
?>

<section class="publications-container">
    <h1 class="publications-title">Publications</h1>

    <div class="publications-section">
        <h3 class="section-heading">Selected Poems</h3>
        <?php 
        while(have_posts()) {
            the_post();  
            $genre = get_field('genre');
            if ($genre == 'poetry') : ?>
                <div class="publication-item">
                    <h4 class="publication-journal"><?php echo get_field('journal') ?></h4>
                    <p class="publication-title">
                        <a href="<?php echo get_field('link') ?>">
                            “<?php echo get_field('title'); ?>”
                        </a>
                    </p>
                </div>
            <?php endif; 
        } 
        wp_reset_postdata();
        ?>
    </div>

    <div class="publications-section">
        <h3 class="section-heading">Selected Essays</h3>
        <?php 
        rewind_posts();
        while(have_posts()) {
            the_post();  
            $genre = get_field('genre');
            if ($genre == 'essay') : ?>
                <div class="publication-item">
                    <h4 class="publication-journal"><?php echo get_field('journal') ?></h4>
                    <p class="publication-title">
                        <a href="<?php echo get_field('link') ?>">
                            “<?php echo get_field('title'); ?>”
                        </a>
                    </p>
                </div>
            <?php endif; 
        } 
        wp_reset_postdata();
        ?>
    </div>

    <div class="publications-section">
        <h3 class="section-heading">Selected Interviews</h3>
        <ul class="publication-list">
        <?php 
        rewind_posts();
        while(have_posts()) {
            the_post();  
            $genre = get_field('genre');
            if ($genre == 'interview') : ?>
                <li class="publication-list-item">
                    <a href="<?php echo get_field('link') ?>">
                        <?php echo get_field('journal') ?>
                    </a>
                </li>
            <?php endif; 
        } 
        wp_reset_postdata();
        ?>
        </ul>
    </div>

    <div class="publications-section">
        <h3 class="section-heading">Selected Reviews</h3>
        <ul class="publication-list">
        <?php 
        rewind_posts();
        while(have_posts()) {
            the_post();  
            $genre = get_field('genre');
            if ($genre == 'review') : ?>
                <li class="publication-list-item">
                    <a href="<?php echo get_field('link') ?>">
                        <?php echo get_field('journal') ?>
                    </a>
                </li>
            <?php endif; 
        } 
        wp_reset_postdata();
        ?>
        </ul>
    </div>

    <div class="publications-section">
        <h3 class="section-heading">Selected Nonfiction</h3>
        <?php 
        rewind_posts();
        while(have_posts()) {
            the_post();  
            $genre = get_field('genre');
            if ($genre == 'nonfiction') : ?>
                <div class="publication-item">
                    <h4 class="publication-journal"><?php echo get_field('journal') ?></h4>
                    <p class="publication-title">
                        <a href="<?php echo get_field('link') ?>">
                            “<?php echo get_field('title'); ?>”
                        </a>
                    </p>
                </div>
            <?php endif;
        } 
        wp_reset_postdata();
        ?>
        <div class="publications-pagination">
            <?php echo paginate_links(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>