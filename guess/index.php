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

  function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}

  function newVoiceline() {
    premier = tabsounds.shift();
    voiceline = dossier + premier;
    audio = new Audio(voiceline); 
    audio.volume=0.3;
    audio.play();
  }

  function startGame() {
    dossier = '<?PHP echo $dossier?>';
    tabsounds = <?PHP echo json_encode($tabfile); ?>;
    shuffle(tabsounds);
    
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
    <button class="button" onclick="window.location.href = '../index.html';"><span>HOME</span></button>
  </header>
  <main>
    <button class="button" id="start" onclick="startGame()"><span>START</span></button>
    <h1 class="centre"> - </h1>
    <button class="button" onclick="newVoiceline()"><span>NEXT</span></button>
  </main>
  <footer class="centre">
        <a href="https://www.instagram.com/brr.titouan">Insta</a>
        <a href="https://twitter.com/TauntiO">Twitter</a>
        <a href="https://github.com/TauntiiO">GitHub</a>
    </footer>
</body>
</html>


