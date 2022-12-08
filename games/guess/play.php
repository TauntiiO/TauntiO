<?php
    $folder='sounds/';

    $list = opendir($folder);
  
    $tabSounds = array();
    
    while ($file = readdir($list)) 
    {
    (strpos($file, ".mp3"))? array_push($tabSounds,$file) : '' ;
    }
    closedir($list);
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>TauntiO</title>
</head>
<body class="riftoBG">
  <header class="centre">
    <button class="button" onclick="window.location.href = '../mainGamesMenu.html';"><span>GAMES</span></button>
  </header>
  <main class="centre">
    <button class="button" id="start" onclick="startGame();"><span>START</span></button>
    <button class="button" id="next" style="visibility:hidden ;" onclick="newVoiceline();"><span>NEXT</span></button>
    <input type="text" id="try" name="try" autocomplete="off" required minlength="1" maxlength="20" size="0.25%" spellcheck="false">
    <button class="button" id="submit" onclick="verify();"><span>SUBMIT</span></button>
    <p id="pAnswer">Submit your guess</p>
    <p>Score : <p id="pScore">0</p></p>
  </main>
  <footer class="centre">
        <a href="https://www.instagram.com/brr.titouan">Insta</a> 
        <a href="https://twitter.com/TauntiO">Twitter</a>
        <a href="https://github.com/TauntiiO">GitHub</a>
    </footer>
</body>
</html>

<script type="text/javascript">var tabSounds = <?php echo json_encode($tabSounds);?>;</script>
<script type="text/javascript">var folder = "<?php echo $folder; ?>";</script>
<script type="text/javascript" src="scripts.js"></script>
