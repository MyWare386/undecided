<?php

session_start();

if(isset($_SESSION['choice1']) and isset($_SESSION['choice2'])){

  $choice1 = $_SESSION['choice1'];

  $choice2 = $_SESSION['choice2'];

  $resultchoice1 = $_SESSION['points1b1'] + $_SESSION['points1b2'] + $_SESSION['points1b3'] - $_SESSION['points1d1'] - $_SESSION['points1d2'] - $_SESSION['points1d3'];

  $resultchoice2 = $_SESSION['points2b1'] + $_SESSION['points2b2'] + $_SESSION['points2b3'] - $_SESSION['points2d1'] - $_SESSION['points2d2'] - $_SESSION['points2d3'];

  ?>

  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Undecided ?</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/result.css" />
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

          <i><p style="font-size:20px;color:#67004D" class="animate__animated animate__heartBeat animate__repeat-3">You must choose...</p></i>

          <br />
          <br />
          <br />

          <svg xmlns="http://www.w3.org/2000/svg" id="result_icon2" width="56" height="56" fill="currentColor" class="bi bi-stars animate__animated animate__tada animate__slow" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
          </svg>

          <h1 style="font-size:75px;" class="animate__animated animate__tada animate__slow" id="result"><?php

          if($resultchoice1 > $resultchoice2){
            echo $choice1;
          }elseif ($resultchoice2 > $resultchoice1){
            echo $choice2;
          }elseif ($resultchoice1 == $resultchoice2) {
            echo 'The two options are great';
          }

          ?></h1>

          <svg xmlns="http://www.w3.org/2000/svg" id="result_icon" width="56" height="56" fill="currentColor" class="bi bi-stars animate__animated animate__tada animate__slow" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
          </svg>

        </center>

      </section>

    </section>

    <section id="summary">

      <center>

        <h1 style="font-size:40px;">Summary :</h1>

        <h2>Your first option was : <?php echo $choice1; ?></h2>

        <h3 style="color:green">The benefits of your first option were :</h3>

        <p><?php

        echo $_SESSION['text1b1'].' (value : '.$_SESSION['points1b1'].')';?><br /><?php
        echo $_SESSION['text1b2'].' (value : '.$_SESSION['points1b2'].')';?><br /><?php
        echo $_SESSION['text1b3'].' (value : '.$_SESSION['points1b3'].')';?><br /><?php

        ?></p>

        <h3 style="color:red">The disadvantages of your first option were :</h3>

        <p><?php

        echo $_SESSION['text1d1'].' (value : '.$_SESSION['points1d1'].')';?><br /><?php
        echo $_SESSION['text1d2'].' (value : '.$_SESSION['points1d2'].')';?><br /><?php
        echo $_SESSION['text1d3'].' (value : '.$_SESSION['points1d3'].')';?><br /><?php

        ?></p>

        <br />

        <h2>Your second option was : <?php echo $choice2; ?></h2>

        <h3 style="color:green">The benefits of your second option were :</h3>

        <p><?php

        echo $_SESSION['text2b1'].' (value : '.$_SESSION['points2b1'].')';?><br /><?php
        echo $_SESSION['text2b2'].' (value : '.$_SESSION['points2b2'].')';?><br /><?php
        echo $_SESSION['text2b3'].' (value : '.$_SESSION['points2b3'].')';?><br /><?php

        ?></p>

        <h3 style="color:red">The disadvantages of your second option were :</h3>

        <p><?php

        echo $_SESSION['text2d1'].' (value : '.$_SESSION['points2d1'].')';?><br /><?php
        echo $_SESSION['text2d2'].' (value : '.$_SESSION['points2d2'].')';?><br /><?php
        echo $_SESSION['text2d3'].' (value : '.$_SESSION['points2d3'].')';?><br /><?php

        ?></p>

        <br />
        <br />

        <h1>So the result is : </h1><p style="font-size:30px"><?php

        if($resultchoice1 > $resultchoice2){
          echo $choice1.' (value : '.$resultchoice1.')';
        }elseif ($resultchoice2 > $resultchoice1){
          echo $choice2.' (value : '.$resultchoice2.')';
        }elseif ($resultchoice1 == $resultchoice2) {
          echo 'The two options are great (your first option is equal to your second option)';
        }

        ?></p>

        <br />
        <br />
        <br />

      </center>

    </section>

    <center>

      <div class="separation"></div>

      <br />

      <footer>
        <a href="http://localhost/site_choix/results.php"><img src="images/favicon.png" width="5%"/></a>
        <br />
        <br />
        <a href="http://localhost/site_choix/index.php">Go back to the homepage</a>
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
    <script src="js/result.js"></script>

  </body>
  </html>

  <?php

}else{
  header("Location: http://localhost/site_choix/index.php");
}

?>
