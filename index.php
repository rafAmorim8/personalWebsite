<?php
  $message = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rafael Amorim</title>
  <link rel="stylesheet" href="./src/styles/all.css" type="text/css">
  <link rel="stylesheet" href="./src/styles/main.css" type="text/css">
</head>

<body id="home">
  <header class="header">
    <div class="overlay">
      <nav id="navbar">
        <div class="wrapper">
          <a href="/" class="logo">RA</a>
          <input class="menu-btn" type="checkbox" name="menu-btn" id="menu-btn">
          <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
          </label>
          <ul class="menu" id="menu">
            <li><a href="#home" onclick="uncheck()">Home</a></li>
            <li><a href="#about" onclick="uncheck()">About</a></li>
            <li><a href="#portfolio" onclick="uncheck()">Portfolio</a></li>
            <li><a href="#contact" onclick="uncheck()">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div class="header-info wrapper">
        <p class="head-hello">Hello, my name is</p>
        <p class="head-name">Rafael Amorim</p>
        <p class="head-description">
          I am a Computer Science student that wants to become a software
          developer.
        </p>
        <button class="btn"><a href="#portfolio">See my Work</a>

        </button>
      </div>

    </div>
  </header>
  <!--END OF HEADER-->
  <div class="main">
    <section id="about">
      <div class="wrapper">
        <div class="about-info">
          <h2 class="page-title">About Me</h2>
          <p>
            Hi! I am Rafael, a computer science student that lives in Vancouver, who loves developing things.<br /><br>
            During my 1.5 years as a CS student at <a class="animated-link" href="http://www.langara.ca">Langara
              College</a> I have developed
            some websites and web apps to apply the concepts
            I've learnt in class.<br /><br>
            I am currently looking for a co-op position to gain more practical experience by building well developed
            apps
            while working with experienced developers. <br><br>
            Below are some of the technologies I have worked with:
          </p>
          <ul class="technologies">
            <li>JavaScript</li>
            <li>HTML &amp CSS</li>
            <li>React</li>
            <li>Node.js</li>
            <li>TypeScript</li>
            <li>Git</li>
            <li>PHP</li>
            <li>MongoDB</li>
            <li>MySQL</li>
            <li>Java (begginer)</li>
          </ul>
          <div class="about-btns">
            <button class="btn-resume"><a href="/resume.pdf" target="_blank"
                rel="noopener noreferrer">Resume</a></button>
          </div>

        </div>
        <div class="about-picture">
          <div class="picture-area">
            <img src="./src/img/about-picture.jpg" alt="Rafael's picture">
          </div>
        </div>
      </div>

    </section>
    <section class="portfolio" id="portfolio">
      <div class="wrapper">
        <h1 class="page-title">Portfolio</h1>
        <div class="portfolio-cards">
          <div class="portfolio-item">
            <div class="image">
              <img src="./src/img/codePartner.JPG" alt="CodePartner website snapshot">
            </div>
            <div class="item-info">
              <h3>CodePartner</h3>
              <p>A website to find other developers to work on projects or study together. It is built with html, css,
                php, a SQL database and gets data from the gitHub api.
              </p>
              <div class="portfolio-icons">
                <a href="https://github.com/rafAmorim8/CodePartner"><i class="fab fa-github"></i></a>
                <a href="https://raffcode.com/projects/codePartner/index.php"><i
                    class="fas fa-external-link-square-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="./src/img/travel_agency_website.JPG" alt="Travel agency website snapshot">
            </div>
            <div class="item-info">
              <h3>Travel Agency Website</h3>
              <p>Website designed and developed using html, css and bootstrap for the introduction to Web Development
                course.
              </p>
              <div class="portfolio-icons">
                <a href="https://github.com/rafAmorim8/travelAgencyWebsite"><i class="fab fa-github"></i></a>
                <a href="https://codepen.io/RafAmorim/full/xvXaYV"><i class="fas fa-external-link-square-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="./src/img/survival_game_picture.JPG" alt="Travel agency website snapshot">
            </div>
            <div class="item-info">
              <h3>Javascript Game</h3>
              <p> Survivor game built using javascript as a project for the Introduction to Web Programming course.
              </p>
              <div class="portfolio-icons">
                <a href="https://github.com/rafAmorim8/survivalGame"><i class="fab fa-github"></i></a>
                <a href="https://codepen.io/RafAmorim/full/QeqVZo"><i class="fas fa-external-link-square-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="./src/img/web_app.JPG" alt="Travel agency website snapshot">
            </div>
            <div class="item-info">
              <h3>Selling Web App</h3>
              <p>Web app built with ReactJS, NodeJS and a MongoDB database for the Full Stack Web Development course.
              </p>
              <div class="portfolio-icons">
                <a href="https://github.com/rafAmorim8/ramorim-cpsc2350"><i class="fab fa-github"></i></a>
                <a href="https://ramorim-cpsc2350-production.herokuapp.com/"><i
                    class="fas fa-external-link-square-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="wrapper">
        <h2 class="page-title">Contact Me</h2>
        <p>I am currently looking for co-op opportunities. However, feel free to <a class="animated-link"
            href="mailto:raff.code@gmail.com">email</a> me for any kind
          of project or even just to say hi.<br><br>If you prefer simply fill out the form bellow:</p>
        <form id="email-form" method="post">
          <span id="alert"></span>
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
          </p>
          <p>
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
          </p>
          <p>
            <label class="label-message">Message</label>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Type your message"></textarea>
          </p>
          <button id="btn-send" class="btn-send" type="submit" name="sendMail">Send</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="overlay">
        <div class="footer-icons">
          <a href="https://github.com/rafAmorim8"><i class="fab fa-github"></i></a>
          <a href="https://codepen.io/RafAmorim"><i class="fab fa-codepen"></i></a>
          <a href="mailto:raff.code@gmail.com"><i class="fas fa-at"></i></a>
        </div>
        <p><a href="https://github.com/rafAmorim8/personalWebsite">Designed and developed by Rafael Amorim.</a></p>
      </div>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./src/js/script.js" type="text/javascript"></script>
  <script>
    $(document).ready(function () {
      let form = $("#email-form");
      form.submit(function (e) {
        e.preventDefault();

        $.ajax({
          type: "POST",
          url: "./email.php",
          data: $(this).serialize(),
          success: function (data) {
            let alert = $("#alert");
            alert.remove();
            form.prepend(data);
          }
        });
      });
    });
  </script>
</body>

</html>