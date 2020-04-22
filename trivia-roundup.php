<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trivia Round-Up</title>
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
  Trivia Round-Up
</h3>

 <div class="skills-container">
              <h5>Coding</h5>
                <h5>UX/UI</h5>
                <h5>Wireframing</h5>


            </div>

<h2 class="project-one-liner">
  Rodeo themed trivia that will test your knowledge of bull riding and other events. Saddle up!

</h2>

<div class="project-specs">

  <div class="specs-top-row">

   <div class="project-collateral">
      <h4 class="project-specs-category">
      Collateral
      </h4>
    
      <h5 class="project-specs-detail">
      Web&nbsp;App
      </h5>
    <ul class="collateralLinks">
                <li><a href="https://jmittelman.github.io/Trivia-Round-Up/" target="_blank" class="fas fa-external-link-alt" id="collateralWebLink"></a></li>
                  <li><a
                href="https://github.com/jmittelman/Trivia-Round-Up"
                target="_blank"
                class="fab fa-github"
                id="collateralGithubLink"
              >
              
</a></li>
            </ul>

    </div>

    <div class="project-client">
      <h4 class="project-specs-category">
      
      </h4>
      <h5 class="project-specs-detail">
      
      </h5>
      
    </div>


   

  </div>

  <div class="specs-bottom-row">

    <div class="project-tools">
      <h4 class="project-specs-category">
      Tools
      </h4>
      <h5 class="project-specs-detail">
      React
      </h5>
      <h5 class="project-specs-detail">
      MongoDB
      </h5>
      <h5 class="project-specs-detail">
      Express
      </h5>
      <h5 class="project-specs-detail">
      Node
      </h5>
      <h5 class="project-specs-detail">
      HTML,&nbsp;CSS,&nbsp;JavaScript
      </h5>
    

    </div>

    <div class="project-partner">
      <h4 class="project-specs-category">
      
      </h4>
      <h5 class="project-specs-detail">
     
      </h5>
    
    </div>

  </div>

</div>

</section>

<!-- project description -->

<section class="project-description">

<div class="project-description-container">

  <div class="project-img-container">
    <img src="./media/trivia.png" class="project-description-img">
  </div>
  <div class="project-description-text">

  <p>I created a rodeo themed trivia game that will test your knowledge of bull riding and “rough stock” events including barrel racing, calf roping, steer wrestling, and bareback riding. </p>

  <p>Users are presented with a question and three possible answers. Correct answers will increment the score in the barrel positioned at the top of the screen as you progress through ten questions. At the end, you will see if you are a real bronc buster or not!
</p>


  
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
      <img src="./media/startmessage.png">
    </div>

    <label for="i3" class="pre"></label>
    <label for="i2" class="nxt"></label>


  </div>

  <div class="slide_img" id="two">

  <div class="slide_img_container">
    <img src="./media/scorecollage.png">
  </div>
    <label for="i1" class="pre"></label>
    <label for="i3" class="nxt"></label>

  </div>

  <div class="slide_img" id="three">
  <div class="slide_img_container">
    <img src="./media/endmessage.JPG">
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

 <p>Built with HTML, CSS, JavaScript and styled with Bootstrap, the game is a challenge to those unfamiliar with rodeo sports. But, it’s fun to take your best guess and try not to get bucked off. </p>



    

    

  </div>

  <div class="project-img-container-stacked">
  <div class="project-img-container">

    <img src="./media/rodeopic.png" class="project-description-img">

  </div> 

  </div>

  





</section>






</div>




 <?php include('footer.php'); ?>

    <script src="script.js"></script>
  </body>
</html>