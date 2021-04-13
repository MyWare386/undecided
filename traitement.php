<?php

session_start();

if(isset($_POST['submit'])){
  extract($_POST);

  if(!empty($_POST['choice1']) and !empty($_POST['choice2'])){

    if(!empty($_POST['text1b1']) or !empty($_POST['text1b2']) or !empty($_POST['text1b3'])){

      if(!empty($_POST['text1d1']) or !empty($_POST['text1d2']) or !empty($_POST['text1d3'])){

        if(!empty($_POST['text2b1']) or !empty($_POST['text2b2']) or !empty($_POST['text2b3'])){

          if(!empty($_POST['text2d1']) or !empty($_POST['text2d2']) or !empty($_POST['text2d3'])){

            // echo $_POST['choice1'];
            //
            //
            // echo $_POST['text1b1'];
            // echo $_POST['points1b1'];
            // echo $_POST['text1b2'];
            // echo $_POST['points1b2'];
            // echo $_POST['text1b3'];
            // echo $_POST['points1b3'];
            //
            // echo $_POST['text1d1'];
            // echo $_POST['points1d1'];
            // echo $_POST['text1d2'];
            // echo $_POST['points1d2'];
            // echo $_POST['text1d3'];
            // echo $_POST['points1d3'];
            //
            //
            // echo $_POST['choice2'];
            //
            //
            // echo $_POST['text2b1'];
            // echo $_POST['points2b1'];
            // echo $_POST['text2b2'];
            // echo $_POST['points2b2'];
            // echo $_POST['text2b3'];
            // echo $_POST['points2b3'];
            //
            // echo $_POST['text2d1'];
            // echo $_POST['points2d1'];
            // echo $_POST['text2d2'];
            // echo $_POST['points2d2'];
            // echo $_POST['text2d3'];
            // echo $_POST['points2d3'];

            // SESSION Option 1 ------------------------------------------------------------

            $_SESSION['choice1'] = $_POST['choice1'];

            //Benefits :

            $_SESSION['text1b1'] = $_POST['text1b1'];
            $_SESSION['points1b1'] = $_POST['points1b1'];
            $_SESSION['text1b2'] = $_POST['text1b2'];
            $_SESSION['points1b2'] = $_POST['points1b2'];
            $_SESSION['text1b3'] = $_POST['text1b3'];
            $_SESSION['points1b3'] = $_POST['points1b3'];

            //Disadvantages :

            $_SESSION['text1d1'] = $_POST['text1d1'];
            $_SESSION['points1d1'] = $_POST['points1d1'];
            $_SESSION['text1d2'] = $_POST['text1d2'];
            $_SESSION['points1d2'] = $_POST['points1d2'];
            $_SESSION['text1d3'] = $_POST['text1d3'];
            $_SESSION['points1d3'] = $_POST['points1d3'];

            // SESSION Option 2 ------------------------------------------------------------

            $_SESSION['choice2'] = $_POST['choice2'];

            //Benefits :

            $_SESSION['text2b1'] = $_POST['text2b1'];
            $_SESSION['points2b1'] = $_POST['points2b1'];
            $_SESSION['text2b2'] = $_POST['text2b2'];
            $_SESSION['points2b2'] = $_POST['points2b2'];
            $_SESSION['text2b3'] = $_POST['text2b3'];
            $_SESSION['points2b3'] = $_POST['points2b3'];

            //Disadvantages :

            $_SESSION['text2d1'] = $_POST['text2d1'];
            $_SESSION['points2d1'] = $_POST['points2d1'];
            $_SESSION['text2d2'] = $_POST['text2d2'];
            $_SESSION['points2d2'] = $_POST['points2d2'];
            $_SESSION['text2d3'] = $_POST['text2d3'];
            $_SESSION['points2d3'] = $_POST['points2d3'];

            header("Location: http://localhost/site_choix/results.php");

          }else{
            $erreur = '<i><p style="font-size:15px;color:red">You must fill at least 1 benefit and <br />1 disadvantage for each option.</p></i>';
          };

        }else{
          $erreur = '<i><p style="font-size:15px;color:red">You must fill at least 1 benefit and <br />1 disadvantage for each option.</p></i>';
        };

      }else{
        $erreur = '<i><p style="font-size:15px;color:red">You must fill at least 1 benefit and <br />1 disadvantage for each option.</p></i>';
      };

    }else{
      $erreur = '<i><p style="font-size:15px;color:red">You must fill at least 1 benefit and <br />1 disadvantage for each option.</p></i>';
    };

  }else{
    $erreur = '<i><p style="font-size:15px;color:red">You must fill at least 1 benefit and <br />1 disadvantage for each option.</p></i>';
  };

};

?>
