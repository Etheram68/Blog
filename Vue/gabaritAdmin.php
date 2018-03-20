<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="backoffice">
    <meta name="author" content="Pierre-Emmanuel Laporte">

    <title>Administration</title>
    <base href="<?= $racineWeb ?>">
    <link rel="stylesheet" href="Contenu/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contenu/css/administration.css"/>
    <link rel="stylesheet" href="Contenu/css/font-awesome.css">
    
<link type="text/css" rel="stylesheet" href="Contenu/css/custom.css"/>

    <script src="Contenu/js/jquery.js"></script>
    <script src="Contenu/js/bootstrap.min.js"></script>
    <script src='Contenu/js/tinymce/tinymce.min.js'></script>
</head>

<body class="body">


<?php $this->actif = "class='active'" ?>
<div class="bg-dark" id="wrap">
    
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand float-left text-center" href="#">
                    <h4 class="text-white"><img src="Contenu/images/logow.png" class="admin_img" alt="logo"> Accueil</h4>
                </a>
            
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="lienPass" href="#">Retourner au site</a></li>
                <li><a id="lienPass" href="admin/modifierMdp">Changer votre mot de passe</a></li>
                <li><a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
        <div id="left" style="min-height: 1261px;">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="Contenu/images/admin.jpg">
                        <p class="text-white user-info">Welcome Admin</p>
                    </a>
                    
                </div>
            </div>

        
                <ul id="menu" class="bg-blue dker">
                    <li <?php if (($this->menuActif == "Tableau de bord")) {
                        echo($this->actif);
                    } ?>>
                        <a id="lienDashboard" href="admin/">
                            <img src="Contenu/images/symbol/dashboard.png" alt="Tableau de bord"
                                 title="Tableau de bord"><span class="link-title"> Tableau de bord </span>
                        </a>
                    </li>
                    <?php if ($this->grade == "Administrateur") { ?>
                        <li <?php if (($this->menuActif == "Administration")) {
                            echo($this->actif);
                        } ?>>
                            <a id="lienAdministration" href="admin/administration">
                                <img src="Contenu/images/symbol/admin.png" alt="Panneau d'administration"
                                     title="Panneau d'administration">Gestion des Articles</a><span
                                    class="sr-only">(current)</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->grade == "Moderateur" || $this->grade == "Administrateur") { ?>
                    <li <?php if (($this->menuActif == "Moderation")) {
                        echo($this->actif);
                    } ?>>
                        <a id="lienModeration" href="admin/moderation">
                            <img src="Contenu/images/symbol/moderer.png" alt="Panneau de modération"
                                 title="Panneau de modération"> Gestion des Commentaires
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ($this->grade == "Administrateur") { ?>
                    <li <?php if (($this->menuActif == "Utilisateurs")) {
                        echo($this->actif);
                    } ?>>
                        <a id="lienUtilisateurs" href="admin/utilisateurs">
                            <img src="Contenu/images/symbol/user.png" alt="Panneau de gestion utilisateur"
                                 title="Gestion utilisateur(s)">Utilisateur(s)
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            </div>

           <div id="content" class="bg-container">
             <header class="head">  
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        
            <?php if (!empty($flash)): ?>
                <div class="alert alert-<?= $flash['type'] ?>">
                    <p><strong><?= ucfirst($flash['type']) ?> !</strong> <?= $flash['message'] ?></p>
                </div>
            <?php endif; ?>
            </div>
                    </div>
                </div>
            </header>
                
            
            <?= $contenu ?>
        </div>
        
</div>
</body>
</html>