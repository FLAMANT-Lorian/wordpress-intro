<?php get_header(); ?>

    <!--On ouvre "la boucle" ("The Loop"), la structure de contrôle de contenu propre à Wordpress-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>


    <h2><?= get_the_title(); ?></h2>
    <div><?= get_the_content(); ?></div>


    <!--On ferme "la boucle" ("The Loop")-->
<?php endwhile; else : ?>
    <p>La page est vide !</p> <!--Si jamais il n'y a rien à afficher-->
<?php endif; ?>
<?php get_footer(); ?>