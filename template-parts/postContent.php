<div class="container-fluid">
    <div class="card">
        <div><?php the_post_thumbnail('') ?></div>
        <div class="card-body">
            <p class="card-text">Date de création : <?= get_the_date(); ?></p>
            <p class="card-text">Catégorie : <?= the_category(); ?></p>
            <p class="card-text">Auteur : <?= get_the_author(); ?></p>
            <p class="card-text">Content : <?= get_the_content(); ?></p>
            <p><strong>date de sortie :</strong>
                <?php echo get_field('date_sortie'); ?>
            </p>
            <p>
                <strong>puissance :</strong>
                <?php echo get_field('puissance_en_chevaux_ou_cm3'); ?>
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