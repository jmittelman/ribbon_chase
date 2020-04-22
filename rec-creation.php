<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rec|Creation App</title>
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
  Rec|Creation App
</h3>

 <div class="skills-container">
              <h5>Coding</h5>
                <h5>UX/UI</h5>
                <h5>Wireframing</h5>


            </div>

<h2 class="project-one-liner">
  Browse games to get ideas for hosting parties, play-dates, and get-togethers or find events to join.

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
                <li><a href="http://rec-creation.surge.sh/" target="_blank" class="fas fa-external-link-alt" id="collateralWebLink"></a></li>
                  <li><a
                href="https://github.com/ismailshak/rec-creation"
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
    <img src="./media/reccreationhero.JPG" class="project-description-img">
  </div>
  <div class="project-description-text">

  <p>Families sometimes may want to search for and discover fun games for parties, play-dates, and get-togethers that they can host. Or, sometimes, if there are particular games they would like to try out, they may be interested in seeking out events in which they’ll be able to participate in a specific game.  </p>

  <p>Working with a team of fellow students, I made an app so people can browse games and find and host events. This way they can get active, have fun, and even meet new people.
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
      <img src="./media/gameslist.png">
    </div>

    <label for="i3" class="pre"></label>
    <label for="i2" class="nxt"></label>


  </div>

  <div class="slide_img" id="two">

  <div class="slide_img_container">
    <img src="./media/eventslist.png">
  </div>
    <label for="i1" class="pre"></label>
    <label for="i3" class="nxt"></label>

  </div>

  <div class="slide_img" id="three">
  <div class="slide_img_container">
    <img src="./media/reccreation_forms.png">
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

  <p>My teammates and I built an API to interact with a list of games, events, and users and all of their properties. The API was created with Node.js, Express, MongoDB, and Mongoose. Postman was used for testing routes, locally, throughout development. And, ultimately the API was deployed via Heroku and the database was hosted on MongoDB Atlas.
</p>

    <p>The back-end was extended by a front-end, created using React and deployed and hosted on Surge.</p>

    <p>Important features of this project were user authentication and incorporating CRUD functionality implemented with RESTful routes.  </p>

    

    

  </div>

  <div class="project-img-container-stacked">
  <div class="project-img-container">

    <img src="./media/sack race.jpg" class="project-description-img">

  </div> 

  
  </div>

  





</section>






</div>




 <?php include('footer.php'); ?>

    <script src="script.js"></script>
  </body>
</html>