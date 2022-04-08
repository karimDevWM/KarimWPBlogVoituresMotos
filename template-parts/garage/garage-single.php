<div class="car-spec-head">
    <h3>Presentation <?= the_field('modele')."-".get_the_title(); ?></h3>
    <p><?php the_post_thumbnail('large'); ?></p>
</div>
<div class="car-spec-sheet">
    <div class="fields-labels">
        <p>modele : </p>
        <p>annee : </p>
    </div>
    <div class="fields-content">
        <p><?= the_field('modele'); ?></p>
        <p><?= the_field('annee'); ?></p>
    </div>

</div>

<!--============================================================================-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= get_the_title(); ?></h5>
                            <p class="card-text">Catégorie : <?php get_the_category(); ?></p>
                            <p class="card-text">Auteur : <?= get_the_author(); ?></p>
                            <p class="card-text">Date de publication : <?= get_the_date(); ?></p>
                            
                            
                        </div>
                    </div>
            <hr>