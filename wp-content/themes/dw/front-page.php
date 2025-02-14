<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="Auhtor" content="auhtor">
    <title><?= wp_title('·', 'false', 'right') . get_bloginfo('name'); ?></title>
</head>
<body>
<header>
    <h1><?= get_bloginfo('name'); ?></h1>
    <p><?= get_bloginfo('description'); ?></p>
</header>
<main>

    <aside>
        <h2>Bienvenue sur mon site&nbsp;!</h2>
    </aside>
    <!--On ouvre "la boucle" ("The Loop"), la structure de contrôle de contenu propre à Wordpress-->
    <?php if (have_posts()): while (have_posts()): the_post(); ?>



        <h2><?= get_the_title(); ?></h2>
        <div><?= get_the_content(); ?></div>



        <!--On ferme "la boucle" ("The Loop")-->
    <?php endwhile; else : ?>
        <p>La page est vide !</p> <!--Si jamais il n'y a rien à afficher-->
    <?php endif; ?>
</main>
</body>
</html>
