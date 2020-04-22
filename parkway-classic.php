<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Parkway Classic Automated Emails</title>
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
  Parkway Classic Automated Emails
</h3>

 <div class="skills-container">
              <h5>Content</h5>
              <h5>Strategy</h5>
              <h5>Copywriting</h5>
              <h5>Coding</h5>
            </div>

<h2 class="project-one-liner">
  Targeted messages to attract participants and guide them through a race experience.
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
      Email
      </h5>
    </div>

  </div>

  <div class="specs-bottom-row">

    <div class="project-tools">
      <h4 class="project-specs-category">
      Tools
      </h4>
      <h5 class="project-specs-detail">
      HTML/CSS
      </h5>
      <h5 class="project-specs-detail">
      Silverpop
      </h5>
    </div>

    <div class="project-partner">
      <h4 class="project-specs-category">
      Partner
      </h4>
      <h5 class="project-specs-detail">
      Whereoware
      </h5>
      <h5 class="project-specs-detail">
      Orangehat
      </h5>
    </div>

  </div>

</div>

</section>

<!-- project description -->

<section class="project-description">

<div class="project-description-container">

  <div class="project-img-container">
    <img src="./media/parkwayclassic1.jpg" class="project-description-img">
  </div>
  <div class="project-description-text">

  <p>The Parkway Classic is a signature event for Pacers Running which attracts thousands of participants. The course takes runners along the George Washington Parkway where they are treated to views of the Potomac River until they ultimately finish along the iconic streets of Alexandria. </p>

  <p>Pacers Running wanted to improve upon the experience of runners by offering personalized communications from sign-up to race completion.</p>

  
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
      <img src="./media/parkwayemails1.png">
    </div>

    <label for="i3" class="pre"></label>
    <label for="i2" class="nxt"></label>


  </div>

  <div class="slide_img" id="two">

  <div class="slide_img_container">
    <img src="./media/parkwayemails2.png">
  </div>
    <label for="i1" class="pre"></label>
    <label for="i3" class="nxt"></label>

  </div>

  <div class="slide_img" id="three">
  <div class="slide_img_container">
    <img src="./media/parkwayemails3.png">
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

    <p>I created an automated email marketing program featuring a funnel of promotional messages aimed at initiating registration for the event, a series of informational emails delivered after sign-up offering important guidance leading to race day, and a congratulatory message upon completing the race including the finish time, links to personal photos, and early-bird offers to register again for the following year.</p>

    <p>This series of communication-- totaling over 20 emails accommodating different responses across all stages of the funnel-- improved upon previous strategies to make it more customized and targeted. Before, to promote the event, the company’s entire email list would be blasted indiscriminately. Because of this, even if you had already signed up for the event you would continue to receive messages urging you to register. The new automated program would segment those who had already signed up and progress them through the campaign to ensure they received only relevant messages going forward. </p>

    <p>Adding informational messages leading up to the event afforded the opportunity to provide value in the way of training tips as well as chances to promote sales of shoes, clothing, and other gear. Pacers Running could be seen as a helpful guide on the training journey.   Finally, closing the loop with a congratulatory message served as a personalized touchpoint during a “feel good moment.” Pacers Running was positioned as a partner jointly celebrating the success of its race participants. </p>
  
  </div>

  <div class="project-img-container-stacked">
  <div class="project-img-container">

    <img src="./media/parkwayclassic2.jpg" class="project-description-img">

  </div> 

  <div class="project-img-container">

    <img src="./media/parkwayclassic3.jpg" class="project-description-img">

  </div>
  </div>


</div>




</section>

 <?php include('footer.php'); ?>

    <script src="script.js"></script>
  </body>
</html>