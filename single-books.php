<?php

get_header();



while (have_posts()) {
  the_post() ?>

  <section class="inner" style="width: 100%; max-width: 900px; margin: 5rem auto; padding: 1.5rem; align-items: center; justify-content: center;">
   <article>
        <!-- <h2><?php echo get_field('book_title'); ?></h2> -->
        <img src="<?php echo get_field('book_cover') ?>" alt=" book cover of <?php echo get_field('book_title'); ?>" width="100%"; max-width="300px">
        <div class="book-meta">
           <span><?php echo get_field('book_genre') ?></span>
          <span>Published: <?php echo get_field('book_year') ?></span>
           <span><?php echo get_field('book_publisher') ?></span>
        </div>
        <!-- <p style="margin: 0 0 .5rem 0;">Editors: Kwame Dawes & Chris Abani</p>
        <p style="margin: 0 0 .5rem 0;">Cover Art: Kokeb Zeleke</p>
        <p style="margin: 0 0 .5rem 0;">Publisher: African Poetry Book Fund X Akashic Books, Brooklyn, New York</p> -->
        <p style="margin: 0 0 .5rem 0;"><?php the_content()  ?></p>

        <a href="<?php echo get_field('book_link'); ?>" class="read-more">Get a copy</a>

    </article>

  </section>

<?php }




get_footer();

?>