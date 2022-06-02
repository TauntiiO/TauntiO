<?php
    $dossier='sounds/';

    $list = opendir($dossier);
  
    $tabfile = array();
    
    while ($fichier = readdir($list)) 
    {
    ($fichier != "." && $fichier != ".." && $fichier != ".htaccess")? $tabfile[] = $fichier : '' ;
    }
    closedir($list);
  
  //mélange du tableau
    shuffle($tabfile);
  
  // premier élément du tableau
  $premier = array_shift($tabfile);
  $voiceline = $dossier.$premier;
?>

<script>
  var dossier = '<?PHP echo $dossier?>';
  var tabfile = <?PHP echo json_encode($tabfile); ?>;


  function newVoiceline() {
    var premier = tabfile.shift();
    var voiceline = dossier + '/' + premier;
    var audio = new Audio(voiceline); 
    audio.play(); 
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
    <button class="button" onclick="newVoiceline()"><span>Change</span></button>
  </main>
  <footer class="centre">
        <a href="https://www.instagram.com/brr.titouan">Insta</a>
        <a href="https://twitter.com/TauntiO">Twitter</a>
        <a href="https://github.com/TauntiiO">GitHub</a>
    </footer>
</body>
</html>