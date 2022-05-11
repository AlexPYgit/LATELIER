<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name') ?> </title>

</head>
<body>
    <div class="site" >
        <header>
            <div class="navbar-header" id="desktop">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
</header>


    
