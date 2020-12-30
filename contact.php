<?php include_once "php/sqlFunctions.php"; ?>
<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $userPhone = $_POST['phone'];
      $userComment = $_POST['comment'];
      $messageSubject = 'New Contact Portfolio';
    
    
      $to = 'korabduklini17@gmail.com';
      $body = "";
    
      $body .= "From: ". $userName. "\r\n";
      $body .= "Email: ". $userEmail. "\r\n";
      $body .= "Phone: ". $userPhone. "\r\n";
      $body .= "Comment: ". $userComment. "\r\n";
      //mail($to, $messageSubject, $body);

      $message_sent = true;
    }

  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Korab Duklini</title>
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <script src="https://kit.fontawesome.com/79cea89200.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav>
      <div class="container">
        <div class="logo">
          <img width="250px" src="img/logo.png" alt="" />
        </div>
        <ul>
          <li>
            <a href="index.html">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Home
            </a>
          </li>
          <li>
            <a href="assigments.html">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Assigments
            </a>
          </li>
          <li>
            <a href="contact.html">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Contact
            </a>
          </li>
          <li>
            <a href="about.html">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              About
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header-container">
      <div class="header-text">
        <h3>Korab Duklini</h3>
        <h1><span class="orange">Contact</span> Page</h1>
        <div class="btn_wrap">
          <span>Contact</span>
          <div class="icons">
            <a href="https://www.facebook.com/korab.duklini.167"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/korabduklini4/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/korab-duklini-b36b3318a/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="svg">
        <img width="250px" src="img/contact-page.svg" alt="" />
      </div>
    </div>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
  </header>
  
  <div class="information">
    <div class="information-container">
      <div>
        <img src="img/contact-phone.svg" alt="">
        <h1>Phone</h1>
        <p>+383 45 614 930</p>
      </div>
      <div>
        <img src="img/contact-email.svg" alt="">
        <h1>Email</h1>
        <p>info@korabduklini.com</p>
      </div>
      <div>
        <img src="img/contact-location.svg" alt="">
        <h1>Location</h1>
        <p>Kosovë, Vushtrri 42000</p>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style='top: 1rem;position: relative;z-index: 1;'>
      <path fill="#fff" fill-opacity="1"
        d="M0,32L48,42.7C96,53,192,75,288,101.3C384,128,480,160,576,144C672,128,768,64,864,80C960,96,1056,192,1152,224C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </div>

  <div class="contact">
    <div class="image">
      <img src="img/contact-me.svg" alt="" />
    </div>
    <div class="contact-me">
      <?php 
            if($message_sent):
          ?>

      <h3><span class="orange">Thanks</span>, we'll be in touch</h3>
      <?php

            else:
          ?>
      <h1>Get in <span class="orange">Touch</span></h1>
      <form method="POST">
        <input type="text" name="name" id="name" placeholder="Full Name" />
        <input type="email" name="email" id="email" placeholder="Email" />
        <input type="text" name="phone" id="phone" placeholder="Phone Number" />
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Message"></textarea>
        <button id="submit" name="submit">
          Send Email <i class="fas fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </div>
  <?php 
          endif;
      ?>

  <footer>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ff3300" fill-opacity="1" d="M0,160L26.7,181.3C53.3,203,107,245,160,229.3C213.3,213,267,139,320,133.3C373.3,128,427,192,480,218.7C533.3,245,587,235,640,213.3C693.3,192,747,160,800,176C853.3,192,907,256,960,250.7C1013.3,245,1067,171,1120,165.3C1173.3,160,1227,224,1280,218.7C1333.3,213,1387,139,1413,101.3L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
    </svg>
      <div class="footer-container">
        <div class="footer1">
          <img src="img/logo.png" alt="">
          <p>I'm Korab Duklini, Web Developer from Kosovo. I love coding and designing websites.. All I need is your trust!</p>
        </div>
        <div class="footer2">
          <h1>Pages</h1>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
        </div>
        <div class="footer3">
          <h1>Newsletter</h1>
          <p>Join to keep updated with newest discounts and other things</p>
          <div class="email">
            <input type="email" name="newsletter" id="newsletter" placeholder="your-email@email.com">
            <i class="far fa-envelope"></i>
          </div>
        </div>
      </div>
      <div class="pre-footer">
        <p>Developed and designed by Korab Duklini, Last updated at 17/12/2020</p>
      </div>
    </footer>
</body>

</html>