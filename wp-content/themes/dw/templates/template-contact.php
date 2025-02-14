<?php /* Template Name: Page "Contact" */?>
<?php get_header(); ?>

<aside>
    <h2>Contact</h2>
</aside>
<!--On ouvre "la boucle" ("The Loop"), la structure de contrôle de contenu propre à Wordpress-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>


    <div><?= get_the_content(); ?></div>


    <!--On ferme "la boucle" ("The Loop")-->
<?php endwhile; else : ?>
    <p>La page est vide !</p> <!--Si jamais il n'y a rien à afficher-->
<?php endif; ?>

<?php get_footer(); ?>
