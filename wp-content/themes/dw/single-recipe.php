<?php get_header(); ?>

<style>
    .recipe{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
    }

    .recipe__ingredients{
        width: 320px;
        padding: 20px;
        background-color: #F1F1F1;
    }

</style>


    <!--On ouvre "la boucle" ("The Loop"), la structure de contrôle de contenu propre à Wordpress-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>


    <h2><?= get_the_title(); ?></h2>

    <div class="recipe">
        <aside class="recipe__ingredients">
            <h3>Ingrédients</h3>
            <p>À compléter&nbsp;!</p>
        </aside>

        <section class="recipe__steps">
            <h3>Étapes</h3>
            <div><?= get_the_content(); ?></div>
        </section>
    </div>

    <!--On ferme "la boucle" ("The Loop")-->
<?php endwhile; else : ?>
    <p>Cette recette n'existe pas&nbsp;!</p> <!--Si jamais il n'y a rien à afficher-->
<?php endif; ?>
<?php get_footer(); ?>