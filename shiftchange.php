<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ShiftChange App</title>
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
  ShiftChange App
</h3>

 <div class="skills-container">
              <h5>Coding</h5>
                <h5>UX/UI</h5>
                <h5>Wireframing</h5>


            </div>

<h2 class="project-one-liner">
  Retailers can get the most out of their staff and every shift with shared training lessons.

</h2>

<div class="project-specs">

  <div class="specs-top-row">



    <div class="project-collateral">
      <h4 class="project-specs-category">
      Collateral
      </h4>
                
                <h5 class="project-specs-detail">Web&nbsp;App&nbsp;</h5>
                <ul class="collateralLinks">
                <li><a href="http://shift-change.surge.sh/" target="_blank" class="fas fa-external-link-alt" id="collateralWebLink"></a></li>
                  <li><a
                href="https://github.com/jmittelman/shift-change"
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
    <img src="./media/shiftchangehero.png" class="project-description-img">
  </div>
  <div class="project-description-text">

  <p>Meetings prior to the start of a work shift are an opportunity for retail store managers to share announcements, reminders, and, especially, prepared training lessons to ensure continued development of their coworkers. But, many managers do not have much time to regularly come up with instructive discussion topics focused on sales techniques, customer service, and more. </p>

  <p>For this reason, I made an app with a collection of training lessons managers can select from as they customize an agenda form. Referencing this resource, they can maximize their morning meetings and be sure to get the most out of their retail staff and every work shift.
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
      <img src="./media/shiftchangeagenda.png">
    </div>

    <label for="i3" class="pre"></label>
    <label for="i2" class="nxt"></label>


  </div>

  <div class="slide_img" id="two">

  <div class="slide_img_container">
    <img src="./media/shiftchangelessons.jpg">
  </div>
    <label for="i1" class="pre"></label>
    <label for="i3" class="nxt"></label>

  </div>

  <div class="slide_img" id="three">
  <div class="slide_img_container">
    <img src="./media/shiftchangelessonslist.png">
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

  <p>I built an API to interact with a list of training lessons by category, agendas that include announcements, tasks, shout-outs, and lessons, as well as users and all of their properties. 
The API was created with Node.js, Express, MongoDB, and Mongoose. Postman was used for testing routes, locally, throughout development. And, ultimately the API was deployed via Heroku and the database was hosted on MongoDB Atlas.
All training lessons used to seed the database were written by me, but the app will allow users to add their own lessons and eventually develop a larger library.
</p>

    <p>The back-end was extended by a front-end, created using React and deployed and hosted on Surge.</p>

    <p>This project was created to prototype an initial feature of an expanded productivity app that would help a store manager optimize his or her effectiveness, for which I could build out additional planned tools in the future.  </p>

    

    

  </div>

  <div class="project-img-container-stacked">
  <div class="project-img-container">

    <img src="./media/shiftchangeinset.png" class="project-description-img">

  </div> 

  
  </div>

  





</section>






</div>




 <?php include('footer.php'); ?>

    <script src="script.js"></script>
  </body>
</html>