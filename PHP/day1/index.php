<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<?php 

setlocale(LC_TIME, 'it_IT');
       
echo '<div class="text-center mt-5"> Oggi è: ' .  date('l jS F Y ') . '</div>';

       


$squadre['Lecce'] = ['FALCONE', 'GENDREY', 'PONGRACIC', 'BASCHIROTTO', 'GALLO', 'KABA', 'RAFIA', 'GONZALEZ', 'ALMQVIST', 'KRSTOVIC', 'OUDIN'];
$squadre['Fiorentina'] = ["TERRACCIANO", "KAYODE", "MILENKOVIC", "QUARTA", "BIRAGHI", "ARTHUR", "DUNCAN", "GONZALEZ", "BONAVENTURA", "SOTTIL", "BELTRAN"];
$squadre['Frosinone'] = ["TURATI", "MONTERISI", "OKOLI", "ROMAGNOLI", "BRESCIANINI", "MAZZITELLI", "BARRENECHEA", "GELLI", "SOULÉ", "KAIO JORGE", "HARROUI"];
$squadre['Milan'] = ["MAIGNAN", "CALABRIA", "KJAER", "GABBIA", "HERNANDEZ", "ADLI", "REIJNDERS", "PULISIC", "LOFTUS-CHEEK", "LEAO", "GIROUD"];
$squadre['Bologna'] = ["SKORUPSKI", "POSCH", "BEUKEMA", "CALAFIORI", "KRISTIANSEN", "FREULER", "AEBISCHER", "ORSOLINI", "FERGUSON", "KARLSSON", "ZIRKZEE"];
$squadre['Sassuolo'] = ["CONSIGLI", "PEDERSEN", "FERRARI", "ERLIC", "DOIG", "BOLOCA", "BAJRAMI", "CASTILLEJO", "THORSTVEDT", "LAURIENTÉ", "PINAMONTI"];
$squadre['partite'] = ["ROMA-LAZIO", "INTER-JUVE"];

// Estrai le chiavi (nomi delle squadre) dall'array
$squadre_keys = array_keys($squadre);

// Ciclo per accoppiare due squadre alla volta
for ($i = 0; $i < count($squadre_keys); $i += 2) {
    $squadra1 = $squadre_keys[$i];
    $squadra2 = ($i + 1 < count($squadre_keys)) ? $squadre_keys[$i + 1] : null;

    // Stampa la partita
    $partita = isset($squadre['partite'][$i / 2]) ? $squadre['partite'][$i / 2] : "Partita non definita";
    echo "<p class='ms-3'>Partita: " . $partita . "</p>";

    // Assegna le formazioni alle squadre coinvolte nella partita
    $formazione_squadra1 = ($squadra1) ? $squadre[$squadra1] : [];
    $formazione_squadra2 = ($squadra2) ? $squadre[$squadra2] : [];

    // Stampa le formazioni delle squadre
    echo "<p class='ms-3'>Formazione per la squadra " . $squadra1 . "</p>";
    echo '<ul>';
    foreach ($formazione_squadra1 as $giocatore) {
        echo "<li>" . $giocatore . "</li>";
    }
    echo '</ul>';

    echo "<p class='ms-3'>Formazione per la squadra " . $squadra2 . "</p>";
    echo '<ul>';
    foreach ($formazione_squadra2 as $giocatore) {
        echo "<li>" . $giocatore . "</li>";
    }
    echo '</ul>';

    echo '<hr>';
}


    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

