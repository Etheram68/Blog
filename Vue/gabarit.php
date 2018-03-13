<!DOCTYPE HTML>
<html>
<head>
    <title>Blog</title>
    <base href="<?= $racineWeb ?>"
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link href="Contenu/css/normalize.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="Contenu/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contenu/css/font-awesome.css">
    <link href="Contenu/css/visiteur.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="Contenu/css/404.css" type="text/css">
   	<link href="Contenu/css/toolkit.css" rel="stylesheet">
    <link href="Contenu/css/application.css" rel="stylesheet">
    	
      <style>
        body {
        width: 1px;
        min-width: 100%;
        width: 100%;
      }
      </style> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='Roboto-css'
          href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Roboto+Slab-css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:1,300,400,400italic,700,700italic'>
    <link rel='stylesheet' id='Caudex-css' href='http://fonts.googleapis.com/css?family=Caudex:100,300,400,400italic,700,700italic'>
    <link rel='stylesheet' id='Lato-css' href='http://fonts.googleapis.com/css?family=Lato:100,300,400'>
    <link rel='stylesheet' id='Great+Vibes-css' href='http://fonts.googleapis.com/css?family=Great+Vibes'>
    <link rel="stylesheet" type="text/css" href="Contenu/css/font-awesome.css" media="screen">

</head>

<body class="with-top-navbar">
	<div class="growl" id="app-growl"></div>
	
	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary app-navbar">
		<a class="navbar-brand" href="index.php">
    <img src="Contenu/images/brand-white.png" alt="brand">
    </a>

  <button class="navbar-toggler navbar-toggler-right d-md-none" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="histoire">Mon histoire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
      </ul>
      <form class="form-inline float-right d-none d-md-flex">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>      
  </div>
</nav>

<header class="visiteur">

    <h1 class="titre-page">Mon Blog</h1>
    <h2 class="titre-complement">Retrouvez mes articles</h2>

</header>

<div class="container">
            <?php if (!empty($flash)): ?>
                <div class="alert alert-<?= $flash['type'] ?>">
                    <p><strong><?= ucfirst($flash['type']) ?> !</strong> <?= $flash['message'] ?></p>
                </div>
            <?php endif; ?>
    <?= $contenu ?>
</div>


<footer>

    <div class="container">
        <div class="row link-zone">
            
            <div>
                <h3>Site conçu grace à</h3>
                    <p>Booststrap <a target="_blank" href="https://getbootstrap.com/">Framework CSS</a><br>
                    Tiny Mce. <a target="_blank" href="http://tinymce.com">WYSIWYG editor</a><br>
                    Développé par François Frey</a></p>
            </div>
            <div>
                
            </div>
            <div>
                <h3>Écrivez-moi</h3>
                <p> Jean Forteroche<br><span>
                        Maison des auteurs<br>
                          3, impasse de l'ange bleu<br>
                          40100 Gignac<br>
                          Tel. 05 55 24 45 90 <br>
						  </span>
            </div>

        </div>
    </div>


    <div class="copyright">
        <div class="container">
            <p>&copy; 2018 François Frey - Blog -  <a href="admin">Administration</a></p>
        </div>
    </div>

</footer>
      <script src="Contenu/js/menu/jquery.min1.js"></script>
      <script src="Contenu/js/menu/popper.min1.js"></script>
      <script src="Contenu/js/menu/chart1.js"></script>
      <script src="Contenu/js/menu/toolkit1.js"></script>
      <script src="Contenu/js/menu/application1.js"></script>
      <script src="Contenu/js/jquery.js"></script>
      <script src="Contenu/js/bootstrap.min.js"></script>
      <script src='Contenu/js/tinymce/tinymce.min.js'></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
</body>
</html>
