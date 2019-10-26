<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ribbon Chase</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Anton&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <div class="hamburger">
        <div id="menu-bar">
          <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
          </div>
          <ul class="nav" id="nav">
            <li class="nav-links">
              <a href="https://www.thesaurus.com">About</a>
            </li>
            <li class="nav-links"><a href="#">Projects</a></li>
            <a
              class="resume-link"
              href="./media/JordanMittelman_Resume.pdf"
              target="_blank"
              ><img
                class="headshot"
                src="./media/JMportrait2.png"
                alt="headshot"/>
              <img class="resume" src="./media/resumeclip.png" alt="resume"
            /></a>
            <ul class="socials">
              <li>
                <a
                  href="https://www.linkedin.com/in/jordan-m/"
                  class="fa"
                  target="_blank"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://github.com/jmittelman"
                  class="fa"
                  target="_blank"
                  ><i class="fab fa-github"></i
                ></a>
              </li>
              <li>
                <a href="mailto:jordanmittelman@gmail.com" class="fa mail"
                  ><i class="fas fa-envelope"></i
                ></a>
              </li>
            </ul>
          </ul>
        </div>
        <div class="menu-bg" id="menu-bg"></div>
      </div>

      <div class="logo">
        <img class="logo-img" src="./media/ribbonlogo.png" alt="logo" />
        <h3>Ribbon Chase</h3>
      </div>
    </header>