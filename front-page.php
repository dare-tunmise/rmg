<?php get_header() ?>
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay">
            <h1>RASAQ MALIK GBOLAHAN</h1>
            <p>Nigerian poet and translator. Cofounder of Àtẹ́lẹwọ, the first digital journal devoted to publishing work written in the Yorùbá language.</p>
            <button class="read-more-btn">Read More</button>
        </div>
    </section>
    

    <section class="books-section" id="books">
        <h2 class="section-title">My Books</h2>
        
        <div class="carousel-container">
            <div class="carousel" id="books-carousel">
                <!-- Book 1 -->
                <?php 
            $homepagePosts = new WP_Query(array(
            'posts_per_page' => 5,
             'post_type' => 'books'
                ));
                while($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>

                <div class="carousel-item">
                    <div class="book-info">
                        <h3 class="book-title"><?php echo get_field('book_title') ?></h3>
                        <div class="book-meta">
                            <span><?php echo get_field('book_genre') ?></span>
                            <span>Published: <?php echo get_field('book_year') ?></span>
                            <span><?php echo get_field('book_publisher') ?></span>
                        </div>
                        <p class="book-synopsis">
                        <?php the_content() ?> 
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </div>
                    <div class="book-cover">
                       <img src="<?php echo get_field('book_cover') ?>" alt="The Silent Echo Book Cover">
                        <!-- <img src="https://m.media-amazon.com/images/I/91vCORLPlmL._SY522_.jpg" alt="The Silent Echo Book Cover"> -->
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
            
            <div class="carousel-controls">
                <button class="carousel-btn prev-btn">&#8592;</button>
                <button class="carousel-btn next-btn">&#8594;</button>
            </div>
            
            <div class="carousel-indicators" id="carousel-indicators">
                <!-- Indicators will be added via JavaScript -->
            </div>
        </div>
    </section>

    <section class="presentation-container">
        <h2 class="section-title">Readings</h2>
        <div class="video-container">
        <?php 
            $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
             'post_type' => 'video'
                ));
                while($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/<?php echo get_field('video_id') ?>" allowfullscreen></iframe>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </section>
<?php get_footer() ?>