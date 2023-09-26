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
    
    $parkingHotel = [];
    $has_request = !empty($_GET);
    if ($has_request) {
        $parking = $_GET['parking'];
        
        foreach ($hotels as $hotel) {
            
            if($hotel['parking'] == true) {
                array_push($parkingHotel, $hotel);
                
            }
        }
    }
    
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
<!-- <?php var_dump($parkingHotel);?> -->

    <div class="container">
            <h1>Hotels</h1>
            <h5 class="text-center">filtra per</h5>
            <form method="get" action="./">

                <div class="form-check form-check-reverse">
                    <input class="form-check-input " type="checkbox" value="true" id="parking" name="parking">
                    <label class="form-check-label" for="parking">
                        Parcheggio 
                    </label>
                </div>
                <!-- <div class="form-check form-check-reverse">
                    <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Voto 
                    </label>
                </div>
                 -->
                
                <button>FILTRA</button>
            </form>
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
        <?php if (!$has_request) { ?>    
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
        <?php } ?>      
        <?php if ($has_request) { ?>    
            <?php foreach ($parkingHotel as $parking) {
                ?>
                <tr>
                <th scope="row"><?= $parking['name'] ?></th>
                <td>
                    <?php if ($parking['parking']) {
                    echo 'Sì';
                } else {echo 'No';}?>
                </td>
                <td><?= $parking['vote'] ?></td>
                <td><?= $parking['distance_to_center'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>        
    </div>
</body>
</html>