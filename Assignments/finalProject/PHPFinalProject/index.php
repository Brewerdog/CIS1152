<?php

//navbar links as an array
$nav_Links = array(
    'Home' => 'index.php',
    'Store' => 'guestBook.php',
    'Flourish' => 'flourish.php',
    'Bibliography' => 'bibliography.php'
);

//paragraph information as an array
$paragraph_array = array(
    0 => 'No that\'s not love child of Jerry Garcia and Charles Manson, its Richard Mathew Stallman.  This computer programmer and software freedom activist has done so much work in pioneering
			freedom of software for users to use, distribute, study and modify software that it\'s going to be tough to cover his life and accomplishments in under 1000 words.   He was born March
		Guest	16, 1953 in New York City.  His first real interaction with using computers was in high school at the IBM New York Scientific Center. In the fall of 1970 Stallman went to Harvard
			University and that following spring he went to work at the MIT Artificial Intelligence Laboratory.  He graduated from Harvard in 1974 and enrolled in MIT\'s graduate program for physics. [1]',
    1 => '	One of the most important contributions that Stallman has made to the computing world is the GNU project.  The GNU Project is a free software, mass collaboration project. The GNU project
			gives users freedom and control of how they use their computers and devices, "by collaboratively developing and providing software that is based on the following freedom rights: users are
			free to run the software, share it (copy, distribute), study it and modify it. GNU software guarantees these freedom-rights legally (via its license), and is therefore free software; the
			use of the word "free" always being taken to refer to freedom."  The GNU project came into existence because in the late 70\'s and early 80\'s software manufacturers stopped distributing
			software source code and began using copyrighted and, or restrictive licenses to limit or prohibit copying and redistribution. In 1979 Brian Reid put "time bombs" in the Scribe markup
			language which Stallman called a "crime against humanity." In 1983 Stallman announced his idea of the GNU project and in 1984 quit his job at MIT to work on the project full time.
			Stallman described his need to create the project by saying "As an operating system developer, I had the right skills for this job. So even though I could not take success for granted,
			I realized that I was elected to do the job. I chose to make the system compatible with Unix so that it would be portable, and so that Unix users could easily switch to it."  The GNU
			Manifesto was published in 1985 by Stallman and outlines the reasoning behind the project.  In 1989 the first GNU General Public License was released and much of the GNU system was completed. [1]',
    2 =>  'Stallman is an avid activist for free software and a political campaigner for the free software movement since the beginning of the 1990\'s.  The speeches he most often gives are "The GNU
			Project and the Free Software Movement", "The Dangers of Software Patents," and "Copyright and Community in the Age of Computer Networks."  As 1999 rolled around Stallman called for the creation
			of a free on-line encyclopedia by means of the public\'s ability to contribute articles. The GNUPedia was the new creation and it would eventually give way to Wikipedia, which had similar goals
			and would become widely more popular. [1]  In 2006, Stallman met with the government of the Indian State of Kerala, where he talked the officials into removing proprietary software, like Microsof\'s,
			at state-run schools. The result was a landmark decision to transfer school computers in over twelve thousand high schools from Windows to a free software operating system. [3]  In 1988 Apple\'s
			Macintosh look and feel lawsuits against Microsoft and Hewlett-Packard was responding to by Stallman calling for a boycott of all Apple products because a successful look-and-feel lawsuit would
			"put an end to free software that could substitute for commercial software".  The boycott was later removed in 1995, because the Free Software Foundation began to accept patches to GNU software
			for Apple operating systems.  Stallman has referred to Steve Jobs as having a "malign influence" on computing because of Jobs leadership in guiding Apple to produce closed platforms. In 93, Jobs
			asked Stallman if he could distribute GCC in two parts, one part under GPL and the other part, an Objective-C preprocessor under a proprietary license. Stallman thought it would be "very undesirable
			for free software", so he asked a lawyer for advice. What he learned was that a judge would view such an idea as "subterfuge" and would ask whether it really was just one program. Stallman responded
			to Jobs by saying he believed the idea was not allowed by the GPL, which resulted in the release of the Objective-C front end under GPL.  After Jobs death Stallman was quoted as saying "I\'m not
			glad he\'s dead, but I\'m glad he\'s gone." [2]',
    3 => 'No that\'s not love child of Jerry Garcia and Charles Manson, its Richard Mathew Stallman.  This computer programmer and software freedom activist has done so much work in pioneering
			freedom of software for users to use, distribute, study and modify software that it\'s going to be tough to cover his life and accomplishments in under 1000 words.   He was born March
			16, 1953 in New York City.  His first real interaction with using computers was in high school at the IBM New York Scientific Center. In the fall of 1970 Stallman went to Harvard
			University and that following spring he went to work at the MIT Artificial Intelligence Laboratory.  He graduated from Harvard in 1974 and enrolled in MIT\'s graduate program for physics. [1]',
    4 => 'Stallman\'s life is one that has been mostly devoted to political and software activism. He claims not to care for material wealth, he explains that "I\'ve always lived cheaply...like a student,
			basically. And I like that, because it means that money is not telling me what to do."  He leads life as an atheist, not prescribing to any religion.  Politically he is a Green Party supporter and
			also a supporter of the National Initiative Proposal.  He advises against mobile phones and believes they create privacy issues.  He refuses to use a key card to enter the building in which he works
			because it tracks locations and times of entry, he also tries to avoid using the web from his personal computer.  Stallman is a science fiction fan and has even wrote is own science fiction stories.
			Stallman can speak at least four languages and has somehow managed to keep his eligible bachelor status for his entire life.  While perhaps being a bit eccentric in his own personal life we owe many
			of our software freedoms to Richard Stallman, a true pioneer and rebel, standing tall against the big software companies and standing up for all of us.'
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
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php
                    foreach($nav_Links as $key => $value){
                        if($key == 'Home'){
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
    <h1 class="page-header">Richard Stallman is GNU</h1>
    <div class="row">
        <div class="span4">
            <img Class="img img-polaroid" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/50/NicoBZH_-_Richard_Stallman_%28by-sa%29_%289%29.jpg/399px-NicoBZH_-_Richard_Stallman_%28by-sa%29_%289%29.jpg" />
        </div>
        <div class="span8">
        <?php
        foreach($paragraph_array as $key => $value){
            echo "<p style=\"text-indent: 50px;\">{$value}</p>";
        }
        ?>
        </div>
    </div>


</div> <!-- /container -->


</body>
</html>
