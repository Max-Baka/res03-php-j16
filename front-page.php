<?php  
    $menuItems = getNavigationMenu();  
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header>
            
        <nav>
        
            <ul>
                <li id="img"><img src="https://koombackoffice.rezoloco.com/images/cooperatives/5fcdf65ca56d2.png"></li>
                <li>Accueil</li>
                <li>A propos</li>
                <li>Mes Projets</li>
                <li>Me Contacter</li>
            </ul>        
        </nav>
</header>
<main>
     <section id="title">
            <h1>YEPFOLIO</h1>
            <h2>DEVELOPPEMENT WEB & MOBILE</h2>
        </section>
        <section id="artic">
            <article>
                <h2>YEPFOLIO EN QUELQUES MOTS</h2>
                <p>Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                    Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                    Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                    Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                    Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                </p>
            </article>
        </section>
        <section id="articles">
            <h2>MES DERNIERS PROJETS</h2>
            <ul>
                <article id="art1">
                    <h3>Application santé</h3>
                    <p>Pharmacie de Maurepas</p>
                </article>
                <article id="art2">
                    <h3>Site E-commerce</h3>
                    <p>Librairie l'écume des jours</p>
                </article>
                <article id="art3">
                    <h3>Site vitrine</h3>
                    <p>Bonlangerie Galetier</p>
                </article>
                <article id="art4">
                    <h3>Site Institutionnel</h3>
                    <p>Mairie de Ploutruc</p>
                </article>
                <article id="art5">
                    <h3>Site Promotionnel</h3>
                    <p>Festival des choses</p>
                </article>
            </ul>
         </section>
        </main>
    <footer>
         <section id="contact">
            <h2>ME CONTACTER</h2>
            <form>
                <fieldset>
                    <label for="name">Prénom + Nom *</label>
                    <input type="text" id="name" name="user_name">
                
                    <label for="name">Email*</label>
                    <input type="email" id="email" name="email">
                
                    <label for="name">Message</label>
                    <input type="text" id="text" name="text">
              
                    <input type="submit" value="envoyer">
                </fieldset>
               
               
                    
                
            </form>
         </section>
</footer>
        <?php wp_footer(); ?>
    </body>
</html>