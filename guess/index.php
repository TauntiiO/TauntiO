<?php
    $dossier='sounds/';

    $list = opendir($dossier);
  
    $tabfile = array();
    
    while ($fichier = readdir($list)) 
    {
    ($fichier != "." && $fichier != ".." && $fichier != ".htaccess")? $tabfile[] = $fichier : '' ;
    }
    closedir($list);
?>

<script>

  let dossier;
  let tabsounds;
  let element;
  let premier;
  let voiceline;
  let audio;

  function randomArrayShuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
    return array;
  }

  function newVoiceline() {
    premier = tabsounds.shift();
    voiceline = dossier + premier;
    audio = new Audio(voiceline); 
    audio.play();
  }

  function startGame() {
    dossier = '<?PHP echo $dossier?>';
    tabsounds = <?PHP echo json_encode($tabfile); ?>;
    randomArrayShuffle(tabsounds);
    
    newVoiceline();
  }

</Script>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>TauntiO</title>
</head>
<body>
  <header>
    <button class="button" onclick="window.location.href = '../index.html';"><span>Home</span></button>
  </header>
  <main>
    <button class="button" id="start" onclick="startGame()"><span>Start</span></button>
    <h1 class="centre"> - </h1>
    <button class="button" onclick="newVoiceline()"><span>Change</span></button>
  </main>
  <footer class="centre">
        <a href="https://www.instagram.com/brr.titouan">Insta</a>
        <a href="https://twitter.com/TauntiO">Twitter</a>
        <a href="https://github.com/TauntiiO">GitHub</a>
    </footer>
</body>
</html>


