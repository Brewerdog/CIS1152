<?php
    $intro_message = null;

//navbar links as an array
    $nav_Links = array(
        'Home' => 'index.php',
        'Store' => 'guestBook.php',
        'Flourish' => 'flourish.php',
        'Bibliography' => 'bibliography.php'
    );

//links as associates of arrays within the flourish
    $information_links = array();
    $information_links[0]['title'] = 'Stallman\'s Personal Page';
    $information_links[0]['link'] = 'https://stallman.org/';
    $information_links[1]['title'] = 'Interview With Stallman';
    $information_links[1]['link'] = 'http://www.gnu.org/philosophy/luispo-rms-interview.html';
    $information_links[2]['title'] = 'Stallman Wikipedia Page';
    $information_links[2]['link'] = 'http://en.wikipedia.org/wiki/Richard_Stallman';

    if($_POST['name']){
        $intro_message = "<p class=\"lead text-info\">Welcome {$_POST['name']}. Please click on the links to learn more about Mister Stallman!</p>";
    }

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

<!--remainder of flourish with a finite loop and a conditional-->
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
                            if($key == 'Flourish'){
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

//ente your name form to personalize and add to the floursh
<div class="container">
    <h1 class="page-header">More On Richard Stallman</h1>
    <?php
        if($intro_message == null){
    ?>
    <form action="flourish.php"  method="post">
        <label>Personalize Your Experience</label>
        <input name="name" placeholder="Please Enter Your Name" id="name">
        <input type="submit" class="btn btn-primary" value="Enter">
    </form>
    <?php
        }else{
            echo $intro_message;
        }
    ?>
    <?php
      foreach($information_links as $key => $value){
          echo "<h2>".$information_links[$key]['title']."<small> ".$information_links[$key]['link']."</small></h2>".
          "<a href=\"{$information_links[$key]['link']}\" class=\"btn btn-info\" target=\"_blank\">Take Me There</a>";
      }
    ?>
</div> <!-- /container -->


</body>
</html>
