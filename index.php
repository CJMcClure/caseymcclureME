<!DOCTYPE html>
<html>
<head>

  <link rel="icon" href="graphics/favicon.png" type="image/gif" sizes="32x32">
  <title>Web Design &amp; Full Stack Development</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta name="author" content="Casey McClure" />
  <meta name="description" content="Casey McClure is a Web Designer &amp; Full-
  stack developer in the Orlando, Fl area. Casey specializes in HTML, CSS, JS,
  PHP, SQL, and MVC architecture." />

  <link type="text/css" rel="stylesheet" href="css/main.css" />

</head>
<body>
  <? include_once "includes/analytics.php" ?>
  <header>
    <a href="index.php">
    <img id="logo" alt="caseymcclure.me" src="graphics/caseymcclure_logo.svg" />
    </a>
    <nav class="main_nav">
      <ul>
        <li><a href="index.php">cm.me</a></li>
        <li><a href="portfolio.php">portfolio</a></li>
        <li>contact</li>
      </ul>
    </nav>
    <nav class="mobile_nav">
      <ul>
        <li class="menu"><img class="menu_button" alt="hamburger_button" src="graphics/menu_button.png" />
          <ul>
            <li><a href="index.php">cm.me</a></li>
            <li><a href="portfolio.html">portfolio</a></li>
            <li>contact</li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <section id="video_cta">
    <video src="videos/bash.mp4" autoplay loop preload=""></video>
    <div id="layer"></div>
  </section>
  <section>
    <img id="casey_photo" alt="casey_mcclure" src="img/casey-mcclure.jpg"/>
    <p class="temp_p">
      I'm a web designer &amp; full-stack developer,
      based in the Orlando, Florida area. I prefer to stay "Vanilla" and my
      favorite stack is HTML, CSS, JS, &amp; PHP on Apache (Linux, Unix, or
      Windows). Sometimes prepackaged tools are more efficient and I know my way
      around many preprocessors, plugins, libraries, and frameworks too.
    </p>
  </section>
</body>
</html>
