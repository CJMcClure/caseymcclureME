<!DOCTYPE html>
<html>
<head>

  <link rel="icon" href="graphics/favicon.png" type="image/gif" sizes="32x32">
  <title>Casey McClure | Web Design &amp; Development Portfolio</title>

  <!-- Hello meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta name="author" content="Casey McClure">
  <meta name="description" content="Casey McClure's Web Design &amp; Development
  Portfolio." />
  <!--Buh-bye meta-->

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
  <section class="portfolio_row">
      <img class="portfolio_presentation" alt="sparrow_presentation" src="graphics/sparrow_responsive.jpg" />
      <div class="portfolio_spread_details">
        <h1>Sparrow Furniture Restoration &amp; Art</h1>
        <p>
          Sparrow Furniture Restoration &amp; Art is a boutique online gallery,
          containing works from Kimberly McClure, of Sparrow Designs. It's
          still under construction, but I've included a mockup.
        </p>
        <p><span class="spec">Stack:</span> HTML, CSS, Bootstrap</p>
      </div>
  </section>
</body>
</html>
