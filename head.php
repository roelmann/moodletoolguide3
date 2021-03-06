<!DOCTYPE HTML>
<html lang="en">
<?php
if (isset($_GET['theme'])) {
    $theme = htmlspecialchars($_GET['theme']);
} else {
    $theme = 'cerulean';
}
?>
  <head>
    <!-- Required meta tags -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootswatch CDN - Cerulean, Cosmo, Cyborg, Darkly, Flatly, Journal, Litera, Lumen, Lux, Materia, Minty, Pulse, Sandstone, Simplex, Sketchy, Slate, Solar, Spacelab, Superhero, United, Yeti -->
    <link rel="stylesheet" href="css/<?php echo $theme.'.min.css';?>">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Moodle ToolGuide 3</title>

    <style>
        .toolrow{margin-top:1rem;}
        .card{box-shadow: 2px 2px 4px 0px #f2f2f2;border-width:3px !important;}
        .card-footer{padding-bottom:0;padding-top:0;}
        .hiderow{display:none;}
        footer{margin-top:2rem;padding-top:2rem;padding-bottom:2rem;}
        .key .card-heading{padding:1rem;}
        @media screen and (min-width: 992px) {
            .toolrow h6.card-header {display:none;}
            .mobinst {display:none;}
        }
        @media screen and (max-width: 991px) {
            .titlerow{display:none;}
            .toolrow{margin-top:2rem;}
            .toolrow .card-body .comment {display:none;}
            .titlecolumn .card-footer {display:none;}
        }
        .hidden {display:none;}
        </style>
  </head>
