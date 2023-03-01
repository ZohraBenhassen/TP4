<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mails=array("php5@free.com","jean@yahoo.fr","machine@wanadoo.fr","webmaster@wanadoo.fr","paul@gmail.fr","macafi@yahoo.fr");
    for($i=0;$i<count($mail);i++)
    {
        echo'<p>' $mails[$i] '</p>';

    }
    for($i=0;$i<count($mail);i++)
    {
        $tab[$i]=explode("@",$mail[$i]);
        $ch=$tab[$i][1];
        $ch2[$i]=explode(".",$ch);
        $hebergeur[$i]=$ch2[$i][0];
        echo $hebergeur[$i].'<br>';
    }
</body>
</html>