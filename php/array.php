<?php
/**
 * Created by PhpStorm.
 * User: ANSHUL
 * Date: 20-Apr-16
 * Time: 6:48 PM
 */
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="site-header">
    <nav class="container">
        <div class="logo"><a href="#">Whatevr</a></div>
        <div class="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<div class="banner">
    <img
        sizes="(max-width: 1920px) 100vw, 1920px"
        srcset="
          img/bg-sm.jpg 400w,
          img/bg-md.jpg 768w,
          img/bg-l.jpg 1200w,
          img/bg-xl.jpg 1920w"
        src="img/bg-l.jpg"
        alt=""
    >
</div>
<hr>

<div class="container">
    <?php
        $shopinglist =  array('coffee', 'tea', 'sugar');

        echo '<p>'. $shopinglist[0] . '</p>';

/*    echo '<ul>';
    for($i=0;$i<count($shopinglist);$i++){
        echo '<li>'. $shopinglist[$i] . '</li>';
    }
    echo '</ul>';
*/

    echo '<ul>';
    foreach($shopinglist as $item){
        echo '<li>'. $item . '</li>';
    }
    unset($item);
    echo '</ul>';

    array_push($shopinglist, 'dal');

    sort($shopinglist);
    rsort($shopinglist);
    print $shopinglist;
    echo '<ul>';
    foreach($shopinglist as $item){
        echo '<li>'. $item . '</li>';
    }
    unset($item);
    echo '</ul>';

    ?>
</div>


<div style="height:2000px; "></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/main.js" async defer></script>

</body>
</html>
