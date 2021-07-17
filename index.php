<?php 
$domain = strtolower($_SERVER['SERVER_NAME']);
if (strpos($domain, "gohorse.dev") !== FALSE) {
    $domain = "gohorse.dev";
    $filename = "gohorse";
    $title = "Go Horse";
    $description = "eXtreme Go Horse (XGH)";
    $keywords = "eXtreme Go Horse, XGH, Go Horse";
    $gtag = "G-JS8QGRYLL6";
} else if (strpos($domain, "devnator.com") !== FALSE) {
    $domain = "devnator.com";
    $filename = "devnator";
    $title = "The Devnator";
    $description = "The Bug Exterminator";
    $keywords = "The Bug Exterminator, Devnator, Terminator, The Devnator, The Terminator, Exterminador, Exterminador do Futuro";
    $gtag = "G-1LWLNPRCB6";
} else {
    die;
}
$commonKeywords = "Developer, Software, Programming, Programação, Desenvolvimento";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.png" />
    <meta charset="UTF-8">
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?=$keywords?>, <?=$commonKeywords?>">
    <meta name="author" content="sergiocabral.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:locale" content="pt-BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$title?>" />
    <meta property="og:description" content="<?=$description?>" />
    <meta property="og:url" content="https://<?=$domain?>/" />
    <meta property="og:site_name" content="<?=$domain?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image" content="https://<?=$domain?>/<?=$filename?>.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?=$title?>" />
    <meta name="twitter:description" content="<?=$description?>" />
    <title><?=$title?></title>
    <style>
        html {
            height: 100%;
            background-color: black;
        }
        div, video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        video {
            animation: showing 0.5s;
        }
        div {
            background-image: url(<?=$filename?>.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            animation: showing 5s;
            z-index: -1;
        }
        @keyframes showing {
            0% {
                opacity: 0;
            }
            75% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
    </head>
    <body>
        <div></div>
        <video autoplay muted loop>
            <source src="<?=$filename?>.mp4" type="video/mp4">
        </video>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$gtag?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?=$gtag?>');
        </script>
    </body>
</html>