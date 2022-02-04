<?php 

$cars = [

    [
        "id" => "1",
        "cilindrata" => "3.902 cm³",
        "potenza" => "670 CV",
        "casaAutomobilistica" => "Ferrari",
        "modello" => "488 GTB",
        "prezzo" => "€140.000,00",
        "chilometraggio" => "120.000Km",
        "anno" => "2015",
        "consumoMedio" => "10Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "2",
        "cilindrata" => "6.498 cm³",
        "potenza" => "700 CV",
        "casaAutomobilistica" => "Lamborghini",
        "modello" => "Aventador",
        "prezzo" => "€310.000,00",
        "chilometraggio" => "40.000Km",
        "anno" => "2011",
        "consumoMedio" => "6Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "3",
        "cilindrata" => "875 cm³",
        "potenza" => "70 CV",
        "casaAutomobilistica" => "Fiat",
        "modello" => "Panda",
        "prezzo" => "€18.450,00",
        "chilometraggio" => "220.000",
        "anno" => "2002",
        "consumoMedio" => "40Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "4",
        "cilindrata" => "1598 cm³",
        "potenza" => "120 CV",
        "casaAutomobilistica" => "Lancia",
        "modello" => "Delta",
        "prezzo" => "€25.110,00",
        "chilometraggio" => "100.000",
        "anno" => "2002",
        "consumoMedio" => "16Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "5",
        "cilindrata" => "2849 cm³",
        "potenza" => "132 CV",
        "casaAutomobilistica" => "Delorean",
        "modello" => "DMC 12",
        "prezzo" => "€60.000,00",
        "chilometraggio" => "100.000.000.000",
        "anno" => "1970",
        "consumoMedio" => "9Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "6",
        "cilindrata" => "6.498 cm³",
        "potenza" => "700 CV",
        "casaAutomobilistica" => "Lamborghini",
        "modello" => "Gallardo",
        "prezzo" => "€310.000,00",
        "chilometraggio" => "40.000Km",
        "anno" => "2011",
        "consumoMedio" => "6Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "7",
        "cilindrata" => "1598 cm³",
        "potenza" => "120 CV",
        "casaAutomobilistica" => "Lancia",
        "modello" => "Musa",
        "prezzo" => "€25.110,00",
        "chilometraggio" => "100.000",
        "anno" => "2002",
        "consumoMedio" => "16Km/L",
        "img" => "https://picsum.photos/200/300",
    ],

    [
        "id" => "1",
        "cilindrata" => "3.902 cm³",
        "potenza" => "670 CV",
        "casaAutomobilistica" => "Ferrari",
        "modello" => "California",
        "prezzo" => "€140.000,00",
        "chilometraggio" => "120.000Km",
        "anno" => "2015",
        "consumoMedio" => "10Km/L",
        "img" => "https://picsum.photos/200/300",
    ],
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach ($cars as $car) { ?>
            <div class="contained">
                <ul>
                    <li><h2> <?php echo ($car["modello"]) ?> </h2></li>
                    <li><h3> <?php echo ($car["casaAutomobilistica"]) ?> </h3></li>
                    <li><div class="img-container">
                        <img src="<?php echo ($car["img"]) ?>" alt="">
                    </div></li>
                    <li><h3>SCHEDA TECNICA</h3></li>
                    <li><h5> Cilindrata:<?php echo ($car["cilindrata"]) ?> </h5></li>
                    <li><h5> Cavalli:<?php echo ($car["potenza"]) ?> </h5></li>
                    <li><h5> Prezzo: <?php echo ($car["prezzo"]) ?> </h5></li>
                    <li><h5> Anno di immatricolazione: <?php echo ($car["anno"]) ?> </h5></li>
                    <li><h5> Consumo medio:<?php echo ($car["consumoMedio"]) ?> </h5></li>
                    <li><h5> Chilometri percorsi: <?php echo ($car["chilometraggio"]) ?> </h5></li>
                </ul>
                <hr>
            </div>
        <?php } ?>
    </div>
</body>
</html>