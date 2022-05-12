<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name') ?> </title>
    <?php wp_head() ?>
</head>
<body>
  <div class="site" >
    <header class="d-flex justify-content-center">
      <div class="block-container w-100">
        <div class="navbar-header" id="desktop">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <?= get_custom_logo() ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div  id="navbarNav">
                      <?= wp_nav_menu(array(
                      'theme_location' => 'header',
                      'container'=> 'div',
                      'menu_class'=> 'navbar-nav',
                      'container_id'=> 'navbarNav',
                  )) ?>
                </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div class="site-page">




    
