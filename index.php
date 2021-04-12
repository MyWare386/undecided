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
</head>

<body>

  <header>
    <div id="image_logo">
      <a href="index.php"><img src="images/banniere.png" style="width:50%"/></a>
      <br />
    </div>
  </header>

  <section id="info">

    <h1></h1>

    <p>

    </p>

  </section>

  <section id="choices">

    <center>

      <div class="choice" id="choice1">

        <h1>First choice</h1>

        <p class="benefits">Benefits</p>

        <form method="post">
          <textarea name="text" placeholder="">You </textarea><br />
          <input type="range" name="points" min="1" max="10"><br />
          <input type="submit" name="submit1benefits"/><br />
        </form>

        <br />

        <p class="disadvantages">Disadvantages</p>

        <form method="post">
          <textarea name="text" placeholder="">You </textarea><br />
          <input type="range" name="points" min="1" max="10"><br />
          <input type="submit" name="submit1disadvantages"/><br />
        </form>

        <!-- <?php

        if(isset($_POST['formsubmit'])){
        extract($_POST);

        echo $_POST['text'];
        echo $_POST['points'];
      };

      ?> -->

    </div>

    <br />
    <br />
    <br />

    <div class="choice" id="choice2">

      <h1>Second choice</h1>

      <p class="benefits">Benefits</p>

      <form method="post">
        <textarea name="text" placeholder="">You </textarea>
        <input type="range" name="points" min="1" max="10">
        <input type="submit" name="submit1benefits"/>
      </form>

      <p class="disadvantages">Disadvantages</p>

      <form method="post">
        <textarea name="text" placeholder="">You </textarea>
        <input type="range" name="points" min="1" max="10">
        <input type="submit" name="submit1disadvantages"/>
      </form>

    </div>

  </center>

</section>

</body>
</html>
