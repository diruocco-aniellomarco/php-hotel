<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
                <h1>Hotels</h1>
            <table class="table">
        <thead>
            <tr>
            <th class="text-danger" scope="col">Nome </th>
            <th class="text-danger" scope="col">Parcheggio</th>
            <th class="text-danger" scope="col">Voto</th>
            <th class="text-danger" scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($hotels as $hotel) {
             ?>
            <tr>
            <th scope="row"><?= $hotel['name'] ?></th>
            <td>
                <?php if ($hotel['parking']) {
                echo 'Sì';
            } else {echo 'No';}?>
            </td>
            <td><?= $hotel['vote'] ?></td>
            <td><?= $hotel['distance_to_center'] ?></td>
            </tr>
        <?php } ?>
    
    
    </div>
</body>
</html>