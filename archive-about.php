<?php

get_header() ?>

<section class="about-section">
    <div class="about-page">
        <?php while(have_posts()){
                the_post(); ?>
                    <div class="about-image" style="max-width: 800px;">
                        <img style="width: 100%" src="<?php echo get_theme_file_uri('/assets/images/rasaq.jpg') ?>" alt="Rasaq Malik Portrait" class="about-photo;"/>
                        <figcaption style="font-style: italic; color:gray;font-size:12px;">Photo credit: Poetry Stacked</figcaption>
                    </div>
                    <div class="content-div">
                        <?php the_content()?>                        
                        <p style="margin-bottom: 20px;">Hussain Ahmed is a Nigerian poet and environmentalist. He is the author of Soliloquy with the Ghosts in Nile, a 2023 poetry award honoree by the Society of Midland Authors, and a finalist of the Luchei Prize for African Poetry. Ahmed’s second collection Blue Exodus won the 2022 Orison poetry prize, he has a forthcoming collection, Crossroad Mirror from Northwestern University Press in 2025.</p>
                        <p style="margin-bottom: 20px;">Ahmed holds a bachelor's degree from Ahmadu Bello University, Zaria, a Master of Science from Obafemi Awolowo University, Ile-Ife, a Master of Fine Arts in creative writing (poetry) from University of Mississippi where he was awarded The Bondurant Prize and the Barry and Susan Hannah Award. He is completing a doctoral degree in creative writing (poetry) from the University of Cincinnati. </p>
                        <p style="margin-bottom: 20px;">Ahmed’s poems have been featured in Poetry Magazine, Kenyon Review, American Poetry Review, The Cincinnati Review, A Public Space, Gulf Coast Journal and elsewhere. He won the 2024 Gulf Coast Poetry Contest, 2023 Gordon Square Review Poetry Contest, and was a runner-up for the 2023 Auburn Witness Poetry Prize. Ahmed was a finalist for the 2020 Troubadour International Poetry Prize, the 2021 Evand Boland Poetry Prize, 2021 Cave Canem Poetry Prize, 2023 University of Wisconsin Press's Brittingham Prize and Felix Pollak Prize poetry competition, 2022 Michael Waters Poetry Prize, 2022 Omnidawn Open Poetry Book Prize and elsewhere. </p>
                        <p style="margin-bottom: 20px;">He was born in Kakuri.</p>
                    </div>
        <?php } ?>
    </div>
</section>

<?php
get_footer();
?>