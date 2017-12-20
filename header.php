<!DOCTYPE html>
<html>
<head>
<title>Great Old Games</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<!--setup the dosbox frame-->
<style type="text/css">
	.dosbox-container { width: 640px; height: 400px; }
</style>
<!--[if lt IE 9]>
<link href="layout/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
<script src="layout/scripts/ie/css3-mediaqueries.min.js"></script>
<script src="layout/scripts/ie/html5shiv.min.js"></script>
<![endif]-->
</head>
<body class="">
<div class="wrapper row1">
  <header id="header" class="full_width clear">
    <div id="hgroup">
      <h1><a href="index.html">Great Old Games</a></h1>
      <h2> Play and download over a 1000 DOS games for free!</h2>
    </div>
    <div id="header-contact">
      <ul class="list none">
        <li><span class="icon-envelope"></span> <a href="#">info@greatoldgames.com</a></li>
        <!--<li><span class="icon-phone"></span> +xx xxx xxxxxxxxxx</li> -->
      </ul>
    </div>
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="topnav">
    <ul class="clear">
      <li class="active"><a href="index.php" title="Homepage">Home</a></li>
      <li><a class="drop" href="#" title="Categories">Games</a>
        <ul>
          <li><a href="search.php?gamesbyletter=a'" title="Search By Letter">Search By Letter</a></li>
          <li class="last-child"><a href="categories.php" title="Categories">Categories</a></li>
        </ul>
      </li>
	 
	  <!--
      <li><a class="drop" href="#" title="Elements">Elements</a>
        <ul>
          <li><a href="elements/buttons.html" title="Buttons">Buttons</a></li>
          <li><a href="elements/alert-messages.html" title="Alert Messages">Alert Messages</a></li>
          <li><a href="elements/font-icons.html" title="Font Icons">Font Icons</a></li>
          <li><a href="elements/call-to-action.html" title="Call To Action">Call To Action</a></li>
          <li><a href="elements/columns.html" title="Columns">Columns</a></li>
          <li><a href="elements/columns-no-gutter.html" title="Columns - No Gutter">Columns - No Gutter</a></li>
          <li><a href="elements/lists.html" title="Lists">Lists</a></li>
          <li><a href="elements/accordions.html" title="Accordions">Accordions</a></li>
          <li><a href="elements/tabs.html" title="Tabs">Tabs</a></li>
          <li><a href="elements/toggles.html" title="Toggles">Toggles</a></li>
          <li class="last-child"><a href="elements/pricing-tables.html" title="Pricing Tables">Pricing Tables</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#" title="Portfolio Layouts">Portfolio Layouts</a>
        <ul>
          <li><a href="portfolio-layouts/portfolio-overview-full-width-content.html" title="Full Width Portfolio">Full Width Portfolio</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-2columns.html" title="2 Column Grid">2 Column Grid</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-2columns-leftsidebar.html" title="2 Column Grid + Left Sidebar">2 Col. Grid + Left Sidebar</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-2columns-rightsidebar.html" title="2 Column Grid + Right Sidebar">2 Col. Grid + Right Sidebar</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-2columns-bothsidebars.html" title="2 Column Grid + Both Sidebars">2 Col. Grid + Both Sidebars</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-3columns.html" title="3 Column Grid">3 Column Grid</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-3columns-leftsidebar.html" title="3 Column Grid + Left Sidebar">3 Col. Grid + Left Sidebar</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-3columns-rightsidebar.html" title="3 Column Grid + Right Sidebar">3 Col. Grid + Right Sidebar</a></li>
          <li><a href="portfolio-layouts/portfolio-overview-3columns-bothsidebars.html" title="3 Column Grid + Both Sidebars">3 Col. Grid + Both Sidebars</a></li>
          <li class="last-child"><a href="portfolio-layouts/portfolio-overview-4columns.html" title="4 Column Grid">4 Column Grid</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#" title="Gallery Layouts">Gallery Layouts</a>
        <ul>
          <li><a href="gallery-layouts/gallery-full-width-content.html" title="Full Width Gallery">Full Width Gallery</a></li>
          <li><a href="gallery-layouts/gallery-2columns.html" title="2 Column Grid">2 Column Grid</a></li>
          <li><a href="gallery-layouts/gallery-2columns-leftsidebar.html" title="2 Column Grid + Left Sidebar">2 Col. Grid + Left Sidebar</a></li>
          <li><a href="gallery-layouts/gallery-2columns-rightsidebar.html" title="2 Column Grid + Right Sidebar">2 Col. Grid + Right Sidebar</a></li>
          <li><a href="gallery-layouts/gallery-2columns-bothsidebars.html" title="2 Column Grid + Both Sidebars">2 Col. Grid + Both Sidebars</a></li>
          <li><a href="gallery-layouts/gallery-3columns.html" title="3 Column Grid">3 Column Grid</a></li>
          <li><a href="gallery-layouts/gallery-3columns-leftsidebar.html" title="3 Column Grid + Left Sidebar">3 Col. Grid + Left Sidebar</a></li>
          <li><a href="gallery-layouts/gallery-3columns-rightsidebar.html" title="3 Column Grid + Right Sidebar">3 Col. Grid + Right Sidebar</a></li>
          <li><a href="gallery-layouts/gallery-3columns-bothsidebars.html" title="3 Column Grid + Both Sidebars">3 Col. Grid + Both Sidebars</a></li>
          <li><a href="gallery-layouts/gallery-4columns.html" title="4 Column Grid">4 Column Grid</a></li>
          <li class="last-child"><a href="gallery-layouts/gallery-5columns.html" title="5 Column Grid">5 Column Grid</a></li>
        </ul>
      </li>
      <li><a href="#" title="Link Text">Link Text</a></li>
      <li class="last-child"><a href="#" title="A Very Long Link Text">A Very Long Link Text</a></li>
	  -->
    </ul>
  </nav>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container">
	<center>
	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- banner ad header -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-7867777590859919"
		 data-ad-slot="9375440180"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</center>