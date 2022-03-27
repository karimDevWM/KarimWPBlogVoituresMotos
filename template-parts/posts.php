
<div class="container">
    <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
                    <div class="card">
                        <div><?= the_post_thumbnail(); ?></div>
                        <div class="card-body">
                            <h5 class="card-title"><?= the_title(); ?></h5>
                            <p class="card-text"><?= the_excerpt(); ?></p>
                            <p class="card-text">Catégorie : <?= the_category(); ?></p>
                            <p class="card-text">Auteur : <?= get_the_author(); ?></p>
                            <p class="card-text">Date de création : <?= get_the_date(); ?></p>
                            <a href="<?= the_permalink(); ?>" class="btn btn-primary">Lire l'article</a>
                        </div>
                    </div>
    <?php
            endwhile;
        endif;
        
    ?>
</div>