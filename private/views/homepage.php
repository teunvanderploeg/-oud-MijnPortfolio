<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ik ben Teun en dit is mijn portfolio pagina" />
    <meta name="keywords" content="Portfolio, Teun van der Ploeg, Web Developer, Website" />
    <meta name="author" content="Teun van der Ploeg" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/af1b884290.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Portfolio</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
</head>
<body>
<header>
    <nav class="home-nav">
        <h3 class="logo">Teun</h3>   
        <a href="#Home" >Home</a>
        <a href="#OverMij">Over mij</a>
        <a href="#Projects">Projects</a>
        <a href="#Contact">Contact</a>
    </nav>
</header>
<div id="Home" class="Home">
    <div class="home-text">
        <h1><div class="red-text">&#60;h1&#62;</div>Hallo<div class="red-text">&#60;&#47;h1&#62;</div><br>
        <div class="red-text">ik ben Teun</div> en ik ben een Web Developer</h1>
    </div>
<div>

<div id="OverMij" class="OverMij">
<div class="OverMij-text">
        <h4><div class="red-text">&#60;h4&#62;</div>Ik<div class="red-text">&#60;&#47;h4&#62;</div><br>
     <div class="red-text">Ik ben </div>Teun van der Ploeg</h4>
     <div class="paragraaf-OverMij">
     <p>Ik ben Teun van der Ploeg, ik zit op het mediacollege Amsterdam en daar doe ik een opleiding media development. 
         Mijn goal is om zoveel mogelijk te leren van mijn schooltijd zodat ik als ik ga werken veel kennis heb. 
         Ik vind het leuk om websites te maken zeker de backend van de website. 
         Ook vind ik het leuk om websites te testen op vulnrability. De programeer talen die ik nu kan zijn html, css, js, php en sql</p>
    </div>
    </div>
</div>
<div id="Projects" class="Projects">
    <div class="projects-text"><h4><div class="red-text">&#60;h4&#62;</div>Projects<div class="red-text">&#60;&#47;h4&#62;</div><br>
     <div class="red-text">Dit zijn </div>mijn projecten</h4></div>
    <div class="projecten">
    <div class="project"><h5 class="red-text">TheWall<h5><p class="project-text">Voor dit project heb ik veel gebruik gemaakt van php. Samen met een klasgenoot heb ik dit project gemaakt. Ik heb vooral de backend en hij de frontend.</p><a href="http://29253.hosts2.ma-cloud.nl/TheWall/website/" target=_blank><img class="logo-img" src="images/logotheamwall.png" alt="logotheamwall"></a></div>
    <div class="project"><h5 class="red-text">Wordpress Thema<h5><p class="project-text">Met het maken van dit thema heb ik veel gebruik gemaakt van bootstrap en php. Ik heb veel geleerd over hoe de wordpress website in elkaar zit en wat er allemaal geladen moet worden.</p><a href="http://29253.hosts2.ma-cloud.nl/WordpressTestSite/wordpress/" target=_blank><img class="logo-img" src="images/wordpresslogo.png" alt="wordpresslogo"></a></div>
    <div class="project"><h5 class="red-text">Project OP<h5><p class="project-text">Dit project heb ik vroeg in het eerste jaar gemaakt. Ik leerde er veel over hoe je een website mooi kan maken en de beginselen van php.</p><a href="http://29253.hosts2.ma-cloud.nl/ma/bewijzenmap/periode1.2/projectop/" target=_blank><img class="logo-img" src="images/projectoplogo.png" alt="projectoplogo"></a></div>
    <div class="project"><h5 class="red-text">Fake hacking<h5><p class="project-text">Dit is een hackaton project waarbij je mensen hun wachtwoord moet raden met behulp van hun foto's en hun tweets. Hier heb ik geleerd dat het belangrijk is om goed samen te werken. En goed te bespreken wie wat doet.</p><a href="http://29253.hosts2.ma-cloud.nl/fake/start/" target=_blank><img class="logo-img" src="images/fakelogo.png" alt="?"></a></div>
    <div class="project"><h5 class="red-text">Komt snel...<h5><p class="project-text">Komt snel....</p><a href="#" target=_blank><img class="logo-img" src="images/nogniks.png" alt="?"></a></div>
    <div class="project"><h5 class="red-text">Komt snel...<h5><p class="project-text">Komt snel....</p><a href="#" target=_blank><img class="logo-img" src="images/nogniks.png" alt="?"></a></div>
    </div
</div>

<div id="Contact" class="Contact">
<div class="contact-text">
    <h4><div class="red-text">&#60;h4&#62;</div>Contact<div class="red-text">&#60;&#47;h4&#62;</div><br>
     <div class="red-text">Dit zijn mijn </div>contactpagina's</h4>
</div>
<div class="contact-buttons">
<a href="https://www.linkedin.com/in/teun-van-der-ploeg/" target=_blank><div class="ronde-button link-linkedin"><i class="fab fa-linkedin-in"></i></div></a>
<a href="https://github.com/teunvanderploeg" target=_blank><div class="ronde-button link-github"><i class="fab fab fa-github"></i></div></a>
<a href="https://www.hackthebox.eu/home/users/profile/63725" target=_blank><div class="ronde-button link-hackthebox"><img class="hacktheboxlogo" src="images/hacktheboxlogo.png" alt="hacktheboxlogo"></div></a>
<a><div class="ronde-button link-email">Teun@vanderploeg.net</div></a>
</div>
</div>

<div class="gray-box-1"></div>
<div class="gray-box-2"></div>
<div class="gray-box-3"></div>
<div class="gray-box-4"></div>
<div class="gray-box-5"></div>
<div class="gray-box-6"></div>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script> 
</body>
</html>

