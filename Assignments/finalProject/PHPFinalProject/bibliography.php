<?php

//navbar links as an array
$nav_Links = array(
    'Home' => 'index.php',
    'Store' => 'guestBook.php',
    'Flourish' => 'flourish.php',
    'Bibliography' => 'bibliography.php'
);
//APA bibliography as an array
$paragraph_array = array(
        0 =>'<li>[1] Richard Matthew Stallman | biography - American computer programmer. (n.d.). Retrieved May 2, 2015, from http://www.britannica.com/EBchecked/topic/1055658/Richard-Matthew-Stallman </li>',
	    1 =>'<li>[2] Leave It To Richard Stallman To Go There. (n.d.). Retrieved May 2, 2015, from http://www.forbes.com/sites/briancaulfield/2011/10/10/leave-it-to-richard-stallman-to-go-there</li>',
		2 =>'<li>[3] An Interview with Richard Stallman on Freedom, Android, Amazon, Facebook, Steve Jobs...- Open Source For You. (2012, March 19). Retrieved May 2, 2015, from http://www.opensourceforu.com/2012/03/rms-interview-richard-stallman-freedom-android-amazon-facebook-steve-jobs/</li>'
);


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
            <div class="nav-collapse">
                <ul class="nav">
                    <?php
                    foreach($nav_Links as $key => $value){
                        if($key == 'Bibliography'){
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

<!--image information-->
<div class="container">
    <h1>Richard Stallman</h1>
    <div class="row">
        <div class="span4">
            <img Class="img img-polaroid" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/50/NicoBZH_-_Richard_Stallman_%28by-sa%29_%289%29.jpg/399px-NicoBZH_-_Richard_Stallman_%28by-sa%29_%289%29.jpg" />
        </div>
        <div class="span8">
            <ul>
            <?php
            foreach($paragraph_array as $key => $value){
                echo "{$value}";
            }
            ?>
            </ul>
        </div>
    </div>


</div> <!-- /container -->


</body>
</html>
