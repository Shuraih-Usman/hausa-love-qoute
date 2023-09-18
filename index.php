<?php

$set = false;
   if($_SERVER['REQUEST_METHOD'] === 'POST') {

      $set = true;
      $error = array();
      if(empty($_POST['jinsi'])) {
        array_push($error, 'Dole sai kun sabi wanda zaku tura mai mace ko namiji');
      } 
      
      if(empty($_POST['yanayi'])) {
            array_push($error,'Dole sai kun zabi yanayin da zaku tura, safiya, rana ko dare');
        } 
        
        if (count($error) < 1) {
    if ($_POST['jinsi'] == 'namiji') {

        if($_POST['yanayi'] == 'safe') {
            $qoute = file('files/male1.txt');
            $rand = rand(0, count($qoute) -1);
        }  else if($_POST['yanayi'] == 'rana') {
            $qoute = file('files/male2.txt');
            $rand = rand(0, count($qoute) -1);
        }  else if($_POST['yanayi'] == 'dare') {
            $qoute = file('files/male3.txt');
            $rand = rand(0, count($qoute) -1);
        }
    } else if ($_POST['jinsi'] == 'mace') {
        if($_POST['yanayi'] == 'safe') {
            $qoute = file('files/female1.txt');
            $rand = rand(0, count($qoute) -1);
        } else if($_POST['yanayi'] == 'rana') {
            $qoute = file('files/female2.txt');
            $rand = rand(0, count($qoute) -1);
        } else if($_POST['yanayi'] == 'dare') {
            $qoute = file('files/female3.txt');
            $rand = rand(0, count($qoute) -1);
        }
    }
   }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Hausa Love Quote Generator</title>
</head>
<body>

<header>
        <h1> Hausa Love Quote Generator</h1>
    </header>
    
    <div class="container">
<div class="wrapper">
    
  <div class="left-column" style="background-color:#aaa;">
    
    <form class="" method="post">
    <h3>Wa zaka / ki rubutawa</h3>
  <div class="wrapper1">
    <input class="state" type="radio" name="jinsi" id="a" value="namiji">
    <label class="label" for="a">
      <div class="indicator"></div>
      <span class="text">Namiji</span>
    </label>
  </div>
  <div class="wrapper1">
    <input class="state" type="radio" name="jinsi" id="b" value="mace">
    <label class="label" for="b">
      <div class="indicator"></div>
      <span class="text">Ta Mace</span>
    </label>
  </div>

  <h3>Zabi yanayi</h3>
  <div class="wrapper1">
    <input class="state" type="radio" name="yanayi" id="c" value="safe">
    <label class="label" for="c">
      <div class="indicator"></div>
      <span class="text">Safe</span>
    </label>
  </div>
  <div class="wrapper1">
    <input class="state" type="radio" name="yanayi" id="d" value="rana">
    <label class="label" for="d">
      <div class="indicator"></div>
      <span class="text">Rana</span>
    </label>
  </div>
  <div class="wrapper1">
    <input class="state" type="radio" name="yanayi" id="e" value="dare">
    <label class="label" for="e">
      <div class="indicator"></div>
      <span class="text">Dare</span>
    </label>
  </div>  
  <br><button type="submit" id="generate-btn">Generate Quote</button>
  


    </form>


  </div>
  <div class="right-column" style="background-color:#bbb;">
  <?php
      if($set === false) {
echo "<p>Web Application na kalaman soyayya ga maza / samari da yan mata, 
akwai kalaman soyayya na barka da safiya, barka da rana da na barka da dare duka
mabanbanta ga na yan mata da na samari.
</p>";
      } else if(count($error) > 0) {
        echo '<p>';
        foreach($error as $err) {
            echo "<li> $err </li> <br>";
        }
        echo '</p>';
      } else {
        echo '<p id="copyText">'.$qoute[$rand].'</p> 
        <button onclick="copyToClipboard()" style="margin-left:30px;">Copy Text</button>
        ';
      }
  ?>
    
  </div>
  <div class="clear"></div>
  </div></div>


       

  
    <footer>
        <p>&copy; 2023 Shuraih99.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
