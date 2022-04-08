<?php 
    $args = array(
        'post_type' => 'garage',
        // classé par titre
        'orderby' => 'title',
        // tri par ordre croissant
        'order' => 'ASC',
        // 'tax_query' => array(
        //     array(
        //         'taxonomy' => 'type-vehicules',
        //         // 'field'    => 'slug',
        //         // 'terms'    => 'auto',
        //     ),
        // ),
    );
    // création d'un objet query de la classe WP_Query()
    $query = new WP_Query( $args );
    // tants que query a des postes à afficher
    while($query->have_posts())
    {    
        $query->the_post();
    ?>
        <div class="card">
                    <div><?php echo get_the_post_thumbnail('medium'); ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= get_the_title(); ?></h5>
                        <p class="card-text"><?= get_the_excerpt(); ?></p>
                        <p class="card-text">Catégorie : <?= the_category(); ?></p>
                        <p class="card-text">Auteur : <?= get_the_author(); ?></p>
                        <p class="card-text">Date de création : <?= get_the_date(''); ?></p>
                        <a href="<?= the_permalink(); ?>" class="btn btn-primary">Lire l'article</a>
                    </div>
        </div>
        <hr>
    <?php    
    }
    ?>