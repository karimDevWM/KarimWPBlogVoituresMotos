<div class="single-garage">
                    <div class="card">
                        <div><?php echo get_the_post_thumbnail('medium'); ?></div>
                        <div class="card-body">
                            <h5 class="card-title"><?= get_the_title(); ?></h5>
                            <p class="card-text"><?= get_the_content(); ?></p>
                            <p class="card-text">Catégorie : <?= the_category(); ?></p>
                            <p class="card-text">Auteur : <?= get_the_author(); ?></p>
                            <p class="card-text">Date de création : <?= get_the_date(); ?></p>
                        </div>
                    </div>
            <hr>
    </div>