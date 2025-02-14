<?php get_header(); ?>

    <style>
        .recipe {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }

        .recipe__ingredients {
            width: 320px;
            padding: 20px;
            background-color: #F1F1F1;
            display: flex;
            flex-direction: column-reverse;
        }

        .recipe_fig{ /*Image qui s'adapte en fonction de la taille du carré (container)*/
            display: block;
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 0;
        }

        .recipe_img{
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>


    <!--On ouvre "la boucle" ("The Loop"), la structure de contrôle de contenu propre à Wordpress-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>


    <h2><?= get_the_title(); ?></h2>

    <p><?= get_the_excerpt(); ?></p>

    <div class="recipe">
        <aside class="recipe__ingredients">
            <div>
                <h3>Ingrédients</h3>
                <p>À compléter&nbsp;!</p>
                <figure class="recipe_fig">
                    <?= get_the_post_thumbnail(size: 'medium', attr: [
                            'class' => 'recipe_img', // Ajouter un class à l'image
                    ]); ?>
                </figure>
            </div>
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