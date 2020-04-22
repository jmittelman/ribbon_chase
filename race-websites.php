<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Redesign of Race Websites</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="work.css" type="text/css" />
    <link rel="stylesheet" href="project.css" type="text/css" />
    
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
  </head>
  <body>
<?php include('header.php'); ?>

<!-- project intro -->

<section class="project-header">

<div class="back-button">
  <a href="./work.php" id="work-button" class="button2">Back</a>
</div>

<h3 class="project-title">
  Redesign of Race Websites
</h3>

 <div class="skills-container">
              <h5>Content</h5>
              <h5>Strategy</h5>
              <h5>Copywriting</h5>
              <h5>UX/UI</h5>
              <h5>Wireframing</h5>
              <h5>Data Structure</h5>
            </div>

<h2 class="project-one-liner">
  Web pages to share how races are fun, celebrate your success, and offer a best ever experience. 
</h2>

<div class="project-specs">

  <div class="specs-top-row">

    <div class="project-client">
      <h4 class="project-specs-category">
      Client
      </h4>
      <h5 class="project-specs-detail">
      Pacers Running
      </h5>
    </div>

    <div class="project-collateral">
      <h4 class="project-specs-category">
      Collateral
      </h4>
      <h5 class="project-specs-detail">
      Website
      </h5>
    </div>

  </div>

  <div class="specs-bottom-row">

    <div class="project-tools">
      <h4 class="project-specs-category">
      Tools
      </h4>
      <h5 class="project-specs-detail">
      Wordpress
      </h5>

    </div>

    <div class="project-partner">
      <h4 class="project-specs-category">
      Partner
      </h4>
      <h5 class="project-specs-detail">
      Orangehat
      </h5>
      <h5 class="project-specs-detail">
      Co+Lab
      </h5>
    </div>

  </div>

</div>

</section>

<!-- project description -->

<section class="project-description">

<div class="project-description-container">

  <div class="project-img-container">
    <img src="./media/raceforeveryone.JPG" class="project-description-img">
  </div>
  <div class="project-description-text">

  <p>Pacers Running hosted many popular races however the way in which they promoted each event was scattered and inconsistent. Their existing race web pages were all laid out differently, difficult to navigate, and were mostly geared towards sharing details on how to participate while lacking persuasive copy and content to inspire registration.</p>

  <p>The company wanted to improve the experience of researching their events while making it more desirable to register. To meet this goal, I set about overhauling the race web pages to make a consistent presentation, index all the vital information, and inject visual and written appeal.</p>

  
  </div>


</div>




</section>




<!-- slider -->

<div class="slider-container">

  <input type="radio" name="images" id="i1" checked>
  <input type="radio" name="images" id="i2">
  <input type="radio" name="images" id="i3">

  <div class="slide_img" id="one">
    
    <div class="slide_img_container">
      <img src="./media/clarendonday.png">
    </div>

    <label for="i3" class="pre"></label>
    <label for="i2" class="nxt"></label>


  </div>

  <div class="slide_img" id="two">

  <div class="slide_img_container">
    <img src="./media/clarendonday2.png">
  </div>
    <label for="i1" class="pre"></label>
    <label for="i3" class="nxt"></label>

  </div>

  <div class="slide_img" id="three">
  <div class="slide_img_container">
    <img src="./media/racetouchpoints.png">
  </div>
    <label for="i2" class="pre"></label>
    <label for="i1" class="nxt"></label>

  </div>

  <div class="dot-nav">

    <label class="dots" id="dot1" for="i1"></label>
    <label class="dots" id="dot2" for="i2"></label>
    <label class="dots" id="dot3" for="i3"></label>

  </div>



</div>



<!-- project description -->

<section class="project-description" id="proj-description-two">

<div class="project-description-container" >

  <div class="project-description-text">

    <p>This required auditing all existing web pages, organizing all race details, and thinking about the business goals and user needs and how those could be met with a focused and effective information hierarchy. From there I created wireframes and implemented a Wordpress “race” post type driven by custom data fields and tailor-made content modules. Ultimately, I curated all content to be included and wrote copy to tell the unique story of each race.</p>

    <p>Above all, it was imperative to communicate why runners should choose to participate in Pacers Running events. I distilled that message to three main reasons—Pacers Running events are fun, they are all about celebrating the participant, and they enable you to have a best ever race experience. </p>

    <p>I created a main race pages site and a schedule page that listed the full range of races. Then, each race was afforded its own mini site with a consistent organization and navigation including pages for registration and race details, information on the race course, race packets, event day info, post event info, faq’s, and a special update log with real-time notices for announcements and event news. </p>

    <p>Response to the new websites yielded increased race participation and the unique value proposition of Pacers Running’s events was more effectively communicated which promised more sustainable participation levels going forward. </p>

  </div>

  <div class="project-img-container-stacked">
  <div class="project-img-container">

    <img src="./media/raceschedule.JPG" class="project-description-img">

  </div> 

  <div class="project-img-container">

    <img src="./media/RaceOverview.png" class="project-description-img">

  </div>
  </div>


</div>




</section>

 <?php include('footer.php'); ?>

    <script src="script.js"></script>
  </body>
</html>