<?php
    $folder='sounds/';

    $list = opendir($folder);
  
    $tabfile = array();
    
    while ($fichier = readdir($list)) 
    {
    ($fichier != "." && $fichier != ".." && $fichier != ".htaccess")? $tabfile[] = $fichier : '' ;
    }
    closedir($list);
?>

<script type="text/javascript">var folder = "<?= $folder ?>";</script>
<script type="text/javascript">var tabsounds = <?PHP echo json_encode($tabfile)?>;</script>
<script type="text/javascript" src="scripts.js"></script>

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


