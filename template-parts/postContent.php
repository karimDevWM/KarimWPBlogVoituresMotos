<div class="container-fluid">
    <div class="card">
        <div><?php the_post_thumbnail('') ?></div>
        <div class="card-body">
            <p class="card-text">Date de création : <?= get_the_date(); ?></p>
            <p class="card-text">Catégorie : <?= the_category(); ?></p>
            <p class="card-text">Auteur : <?php echo the_author_meta(); ?></p>
            <p class="card-text">Content : <?= get_the_content(); ?></p>
            <p><strong>age :</strong>
                <?php echo get_post_meta( get_the_ID(), 'age', true ); ?>
            </p>
            <p>
                <strong>race :</strong>
                <?php echo get_post_meta(get_the_ID(), 'race', true ); ?>
            </p>
        </div>
    </div>
        <div class="pagination mt-5">
        <div class="pagination_prev">
                <?php previous_post_link( 'Article Précédent<br>%link' ); ?>
            </div>
            <div class="pagination_next">
                <?php next_post_link('Article Suivant<br>%link' ); ?> 
            </div>
        </div>
</div>