<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <div class="Pays">
        <div>
            <h2><?= get_the_title(); ?></h2>
            <figure>
                <?= get_the_post_thumbnail(size: 'medium', attr: ['class'=> 'country_img']); ?>
            </figure>
        </div>
        <divv>
            <h4>Description&nbsp;:</h4>
            <p><?= get_the_excerpt(); ?></p>
        </divv>
    </div>

    <!--On ferme "la boucle" ("The Loop")-->
<?php endwhile; else : ?>
    <p>Ce pays n'existe pas&nbsp;!</p> <!--Si jamais il n'y a rien à afficher-->
<?php endif; ?>

<?php get_footer();