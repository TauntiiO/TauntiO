<?php
    $dossier='../sounds';

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
  $voiceline = $dossier.'/'.$premier;
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>TauntiO</title>
</head>
<body>
    <button class="button" onclick="window.location.href = '../index.html';"><span>Accueil</span></button>
    <audio controls src="<?php echo($voiceline); ?>">Audio aléatoire</audio>
</body>
</body>
</html>