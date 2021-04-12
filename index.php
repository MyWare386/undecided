<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Undecided ?</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="icon" href="images/favicon.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>

  <section id="home">

    <header>
      <div id="image_logo">
        <a href="index.php"><img src="images/banniere.png" style="width:50%"/></a>
        <br />
      </div>
    </header>

    <section id="info">

      <center>

        <h1 style="font-size:50px">The website for those who are undecided !</h1>

        <i><p style="font-size:30px;color:#67004D">Just put the benefits <br />and the disadvantages of your <br />different options <br />and you'll know <br />which choice to make.</p></i>

        <br />
        <br />
        <br />

        <a href="#choices">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-arrow-down-circle-fill animate__animated animate__bounce animate__slow animate__infinite" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
          </svg>
        </a>

      </center>

    </section>

    <br />
    <br />
    <br />
    <br />

    <center><div class="separation"></div></center>

  </section>

  <section id="choices">

    <center>

      <form method="post">

        <div class="choice" id="choice1">

          <br />

          <h1 style="font-size:40px">First option : <input type="text" name="choice1" placeholder="Your first option"/></h1>

          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
          </svg>

          <br />

          <p class="benefits">Benefits :</p>

          <textarea name="text1b1" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1b1" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text1b2" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1b2" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text1b3" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1b3" min="1" max="10"><br />

          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

          <p class="disadvantages">Disadvantages :</p>

          <textarea name="text1d1" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1d1" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text1d2" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1d2" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text1d3" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points1d3" min="1" max="10"><br />

        </div>

        <br />

        <div class="choice" id="choice2">

          <h1 style="font-size:40px">Second option : <input type="text" name="choice2" placeholder="Your second option"/></h1>

          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
          </svg>

          <br />

          <p class="benefits">Benefits :</p>

          <textarea name="text2b1" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2b1" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text2b2" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2b2" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text2b3" placeholder="a benefit" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2b3" min="1" max="10"><br />

          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

          <p class="disadvantages">Disadvantages :</p>

          <textarea name="text2d1" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2d1" min="1" max="10"><br />

          <br />
          <br />
          <br />


          <textarea name="text2d2" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2d2" min="1" max="10"><br />

          <br />
          <br />
          <br />

          <textarea name="text2d3" placeholder="a disadvantage" rows="3" cols="30"></textarea><br />
          <p style="color:white;opacity:50%;">Is it :</p>
          <p style="color:white;opacity:50%;">| weak (1) --- strong (10) |</p>
          <input type="range" name="points2d3" min="1" max="10"><br />

        </div>

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <input type="submit" name="submit" value="Ok !" style="font-family: 'Fascinate', fantasy;font-size:50px;"/><br />

      </form>

      <br />
      <br />
      <br />

      <?php

      if(isset($_POST['submit'])){
        extract($_POST);


        echo $_POST['choice1'];


        echo $_POST['text1b1'];
        echo $_POST['points1b1'];
        echo $_POST['text1b2'];
        echo $_POST['points1b2'];
        echo $_POST['text1b3'];
        echo $_POST['points1b3'];

        echo $_POST['text1d1'];
        echo $_POST['points1d1'];
        echo $_POST['text1d2'];
        echo $_POST['points1d2'];
        echo $_POST['text1d3'];
        echo $_POST['points1d3'];


        echo $_POST['choice2'];


        echo $_POST['text2b1'];
        echo $_POST['points2b1'];
        echo $_POST['text2b2'];
        echo $_POST['points2b2'];
        echo $_POST['text2b3'];
        echo $_POST['points2b3'];

        echo $_POST['text2d1'];
        echo $_POST['points2d1'];
        echo $_POST['text2d2'];
        echo $_POST['points2d2'];
        echo $_POST['text2d3'];
        echo $_POST['points2d3'];

        $_SESSION['test'] = $_POST['text1b1'];
      };

      ?>

      <br />
      <br />
      <br />

    </center>

  </section>

  <br />
  <br />
  <br />

  <center>

    <div class="separation"></div>

    <br />

    <footer>
      <a href="http://localhost/site_choix/index.php"><img src="images/favicon.png" width="5%"/></a>
      <br />
      <br />
      <a href="https://myware386.github.io/myware-website/" target="_blank"><i class="bi bi-globe footer" style="font-size: 30px;"></i></a> &nbsp;&nbsp; <a href="https://github.com/MyWare386" target="_blank"><i class="bi bi-github footer" style="font-size: 30px;"></i></a> &nbsp;&nbsp; <a href="https://www.reddit.com/user/MyWare" target="_blank"><i class="bi bi-cpu footer" style="font-size: 30px;"></i></a> &nbsp;&nbsp; <a href="https://twitter.com/droulez_martin" target="_blank"><i class="bi bi-twitter footer" style="font-size: 30px;"></i></a>
      <br />
      <br />
      <small><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">&copy; Martin Droulez 2021</a></small>
      <br />
      <br />
      <br />
    </footer>

  </center>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
