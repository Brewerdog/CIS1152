<?php

//navbar links as an array
    $nav_Links = array(
        'Home' => 'index.php',
        'Store' => 'guestBook.php',
        'Flourish' => 'flourish.php',
        'Bibliography' => 'bibliography.php'
    );

//store products as an array
    $products = array();
    $products[0]['title'] = 'Beanie';
    $products[0]['cost'] = 20.00;
    $products[0]['description'] = 'Keep cozy this winter in our navy blue beanies with GNU embroidered in white on the side. They are 100% cotton, and the embroidered GNU logo is 2.16\"H x 2.6\"W. Pair the beanie with our hoodies in either the Free Software Free Society or GPLv3 designs, and you\'ll stay warm this winter while representing free software!';
    $products[0]['img'] = 'http://shop.fsf.org/static/images/productimage-picture-gnu-beanie-120_t200.JPG';
    $products[1]['title'] = 'Signed Photo';
    $products[1]['cost'] =  100.00;
    $products[1]['description'] = 'Spruce up your office or home with our signed 8 1/2 by 11 inch photo print of Richard Stallman. These are individually hand-signed by RMS himself, and feature the \"Happy Hacking\" salutation. The prints are suitable for framing. We have a limited supply, so get yours today.';
    $products[1]['img'] = 'http://shop.fsf.org/static/images/productimage-picture-signed-rms-photo-print-112_t200.JPG';
    $products[2]['title'] = 'Coffee Mug';
    $products[2]['cost'] = 20.00;
    $products[2]['description'] = 'We are pleased to re-introduce our GNU Emacs Reference Mugs. These ceramic mugs feature a two-color Emacs logo as well as a handy Emacs quick-reference guide. Like our Emacs Reference Cards, these mugs feature all the commands needed to dive right into using Emacs. 3.75 inches tall, 3-inch diameter. They\'re perfect for anyone who loves coffee (or tea!) and coding, and buying one helps support the FSF.';
    $products[2]['img'] = 'http://shop.fsf.org/static/images/productimage-picture-gnu-emacs-reference-mugs-111_t200.JPG';



?>

<!DOCTYPE html>
<html lang="en">

<!--head information-->
<head>
    <meta charset="utf-8">
    <title>Nolan Young - Richard Stallman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<!--body information-->
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Richard Stallman</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php
                        foreach($nav_Links as $key => $value){
                            if($key == 'Store'){
                                $active = 'active';
                            }else{
                                $active = '';
                            }
                            echo "<li class='{$active}'><a href='{$value}'>{$key}</a></li>";
                        }
                    ?>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <h1 class="page-header">Support the GNU Movement</h1>
    <div class="row">
    <?php
        foreach($products as $key => $value){
            echo "<span class=\"span3 well\">";
            echo "<h3>{$products[$key]['title']} - \${$products[$key]['cost']}</h3>";
            echo "<img class=\"img-polaroid\" src=\"{$products[$key]['img']}\" >";
            echo "<p style=\"text-indent: 20px;\">{$products[$key]['description']}</p>";
            echo "<hr />";
            echo "<button class=\"btn btn-success\">Add To Cart</button>";
            echo "</span>";
        }

    ?>
    </div>
</div> <!-- /container -->


</body>
</html>
