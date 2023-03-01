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
    $mois=array(
        "janvier"=>31,
        "fevrier"=>28,
        "mars"=>31,
        "avril"=>30,
        "may"=>31,
        "juin"=>30,
        "juillet"=>31,
        "aout"=>30,
        "september"=>31,
        "november"=>30,
        "december"=>31,
    );
    echo'<tabel><tr><th>mois</th>
        <th>nomber de jour</th></tr>';
    foreach($mois as $cle=>$valeur)
    {
        echo'<tr><td>'.$cle.'</td>
            <td>'.$valeur.'<td></tr>';
    }
    echo'</table>';
    ?>
</body>
</html>