<?php 

$title = "Gary Mazzeo Portfolio | Family Calendar";
include($_SERVER['DOCUMENT_ROOT']."/header.php"); 

?>

<body class="single">
  <nav>
    <a href="/" class="home">Gary Mazzeo</a>
    <div class="links">
      <a href="https://www.linkedin.com/in/gary-mazzeo/">LinkedIn</a>
      <a href="https://github.com/garymazzeo">GitHub</a>
    </div>
  </nav>

  <header>
    <h1>Family Calendar</h1>
  </header>

    <main>
    <figure class="main-image">
      <video controls width="766">
          <source src="../img/calendar-demo.mp4" type="video/mp4">
          Sorry, your browser doesn't support embedded videos.
        </video>
    </figure>
    <div class="info">
      <div class="tags">
        <span class="tag tag--coding">coding</span>
        <span class="tag tag--design">design</span>
      </div>
      <div class="description">
        <p>A personal project I created for my family. Every year, we make a calendar where each family member gets a month. We needed a way to get the photos to a single place easily, and the options available at the time were not as easy for some family members to use. My goal was to build a website with a simple “upload” button where the person didn’t need to figure out exactly which folder to put it into&mdash;it automatically went there based on their login. Using PHP, MySQL, Bootstrap, and jQuery, I created the space I hadn’t found online anywhere else.</p>
      </div>
    </div>
  </main>
</body>
