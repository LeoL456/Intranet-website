<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!-- 
        Steve
        Script d'envoi de données
        © Léo LESIMPLE 
        Version 1.3
     -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/newcss.css">
</head>

<body style="margin-top:2rem;">
    <?php
    $date = date('d-m-y-h-i-s-ms');
    $date2 = date('d-m-y');
    $file_name = 'forms-result' . '.json';
    $inputtext = $_POST['ARnumber'];
    $vendeurnom = $_POST['vendeur'];
    $to = 'karine.lesimple@cuisinella78-orgeval.com';
    $subject = $vendeurnom . ' a fait une demande de SAV';
    $message = $vendeurnom . ' vient d\'envoyer une nouvelle demande de SAV via le formuaire <br> Lien direct vers le tableau : <a href="https://onyos.fr/dashboard/index.php">ici</a>.';

    $test = 'leolesimple@icloud.com';
    $johancoudert = ' johan.coudert@cuisinella78-orgeval.com';
    $audreytichit = 'audrey.tichit@cuisinella78-orgeval.com';
    $khaoulahammami = 'khaoula.hammami@cuisinella78-orgeval.com';
    $regisretif = 'regis.retif@cuisinella78-orgeval.com';
    $johansaci = 'johan.sacilotto@cuisinella78-orgeval.com';
    $kaled = 'kaled.salhi@cuisinella78-orgeval.com';
    $tom = 'tom.coudert@cuisinella78-orgeval.com';
    $dinis = 'dinis.ferreira@cuisinella78-orgeval.com';

    $subjectretour = "Votre demande de SAV à bien été prise en compte !";
    $messageretour = "Nous avons bien pris en compte votre demande concernant M./Mme ". $_POST['customer'] .", Steve va se charger d'envoyer votre demande à bon port ! <br> Bonne journée !";


    $str = file_get_contents('./forms-result.json');
    $arr = json_decode($str, true);
    $arrne['vendeur'] = $_POST['vendeur'];
    $arrne['Nom'] = $_POST['poseurs'];
    $arrne['Duree'] = $_POST['duree'];
    $arrne['Poseurs'] = $_POST['nbposeurs'];
    $arrne['poseursdemande'] = $_POST['poseursdemande'];
    $arrne['customer'] = $_POST['customer'];
    $arrne['ARnumber'] = $_POST['ARnumber'];
    $arrne['comments'] = $_POST['comments'];
    $arrne['date'] = $date;
    $arrne['date2'] = $date2;
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers = "From : noreply@onyos.fr" . "\n";
    $headers .= 'Content-type: text/html [RFC2854]; charset=utf-8' . "\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'Reply-To: ' . $expediteur . "\n"; // Mail de reponse
    mail($to, $subject, $message, $headers);
    array_push($arr['employees'], $arrne);
    $str = json_encode($arr);

    if (json_decode($str) != null) {
        $file = fopen('./forms-result.json', 'w');
        fwrite($file, $str);
        fclose($file);
        echo "
<div class=\"success-forms\">
<h1>🛫 Pfiou !</h1>
<p>
    Votre demande à été prise en charge. <br>
    Je me charge d’envoyer ceci à son destinataire au plus vite ! <br>
    Steve 😊
</p>
</div>
";
    } else {
        echo "<div class=\"error-forms\">
<h1>😬 Oups...</h1>
<p>
    Votre demande n’a pas abouti ! <br>
    Un souci dans l’envoi des données a fait que votre demande a été rejetée. <br>
    Veuillez réessayer !  <br>
    Steve 😊
</p>
</div>";
    }
    if ($_POST['vendeur'] = "Johan Coudert") {
        mail($johancoudert, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Audrey Tichit") {
        mail($audreytichit, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Khaoula Hammami") {
        mail($khaoulahammami, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Régis Rétif") {
        mail($regisretif, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Kaled Salhi") {
        mail($kaled, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Tom Coudert") {
        mail($tom, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Dinis Ferreira") {
        mail($dinis, $subjectretour, $messageretour, $headers);
    }
    if ($_POST['vendeur'] = "Johan Sacilotto") {
        mail($johansaci, $subjectretour, $messageretour, $headers);
    }
    ?>
</body>

</html>