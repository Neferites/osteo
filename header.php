<?php
  error_reporting(E_ALL^E_NOTICE);
  ini_set("display_errors", 1);
  $error = array();
  $sent = false;

  if($_POST['envoiMessage']) {
    if(strlen($_POST['nom']) < 2) {
      $error['nom'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ nom est <strong>videou inférieur à deux caractères</strong></div>';
    }
    if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
      $error['mail'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ mail est <strong>vide ou incorrect</strong></div>';
    }
    if(strlen($_POST['message'])<10) {
      $error['message'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ message doit <strong>comporter</strong> au moins <strong>10 caractères</strong>.</div>';
    }
    if($_POST['captcha']!='42') {
      $error['captcha'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Veuillez répondre à la question de <strong>vérification</strong>.</div>';
    }

    if(count($error) == 0) {
        
      $headers = 'From: '.  htmlspecialchars($_POST['nom']).' <'.$_POST['mail'].'>';
      $to = "fayolle.marie.osteo@gmail.com";
      $subject = 'Contact osteopathie par site';
      if(mail($to,$subject,htmlspecialchars($_POST['message']),$headers)) {
        $sent = true;
        unset($_POST);
      }
      else{
        $error['notsent'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Une erreur temporaire empèche l\'envoi de votre message.<br />Vous pouvez directement contacter fayolle [point] marie [point] osteo [arobase] gmail [point] com</div>';
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; 
                                             charset=UTF-8"/>
    <title>La Brède Ostéopathie</title>

    <!--[if lt IE 9]>
    <script 
       src="http://html5shim.googlecode.com/svn/trunk/html5.js" 
       type="text/javascript"></script>
    <![endif]-->

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.css">
    
  </head>

  <body>
    <header id="index">
      <nav class="navbar navbar-default navbar-fixed-top osteo-nav" role="navigation">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#osteo-navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#index">Cabinet d'Ostéopathie de La Brède</a>
          </div>

          <div class="collapse navbar-collapse" id="osteo-navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#quand">Quand consulter</a></li>
              <li><a href="#seance">Séance</a></li>


              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle">Renseignements
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a href="#tarifs">Les tarifs</a></li>
                  <li role="presentation"><a href="#horaires">Les horaires</a></li>
                  <li role="presentation"><a href="#plan">Plan d'accès</a></li>
                </ul>
              </li>

              <li><a href="#contact">Contact</a></li>
         		</ul>
          </div>

        </div>
      </nav>
    </header>

    <div class="sub_head drop-shadow-header">
      <div class="container">
        <div class="row">
          <!--<div class="col-lg-2 col-md-2 col-lg-2 col-xs-2 vcenter">
            <img src="images/bibi.jpg" id="thumb-osteo" class="img-thumbnail" alt="Ostéopathie">
          </div>-->
          <div class="col-md-12 text-right">
            <h1>Cabinet d'Ostéopathie de La Brède</h1>
            <p><strong>Marie Fayolle</strong>, diplômée du Collège Ostéopathique Sutherland de Bordeaux.</p>
            <p><i class="fa fa-phone"></i> 06.22.21.12.42</p>
            <p><i class="fa fa-home"></i> 18 Place Montesquieu, 33650 Brede (la)</p>
          </div>
        </div>
      </div>
    </div>

