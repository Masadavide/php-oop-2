<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    require_once __DIR__.'/classes/Film.php';
    require_once __DIR__.'/classes/SalaNormale.php';
    require_once __DIR__.'/classes/SalaImmersiva.php';
    require_once __DIR__.'/classes/Programmazione.php';

    $filmArray = [
        new Movie("Big fish", "2003", "Tim Burton", "125", "Fantay"),
        new Movie("Old boy", "2003", "Park Chan-wook", "116", "Thriller"),
        new Movie("Joker", "2019", "Todd Phillips", "122", "Thriller"),
    ];

    $salaArray = [
        new NormalRoom("sala 1", "100"),
        new NormalRoom("sala 2", "100"),
        new ImmersiveRoom("sala 3", "150", ["vibrazioni", "fumo", "oscillazione"]),
    ];

    $programmazioneArray = [
        new Schedule($filmArray[0], "28/02/2022", ["14.00", "16:00","21:00"], $salaArray[0]),
        new Schedule($filmArray[1], "28/02/2022", ["10.00", "16.00", "21.00"], $salaArray[1]),
        new Schedule($filmArray[2], "28/02/2022", ["18.00", "22.00"], $salaArray[2]),
    ];


    //push degli attori nei vari film
    array_push($filmArray[0]->actor, $actorArray);
    array_push($filmArray[1]->actor, $actorArray1);
    array_push($filmArray[2]->actor, $actorArray2);



    var_dump($filmArray);
    var_dump($filmArray[0]->actor);
    var_dump($filmArray[1]->actor);
    var_dump($filmArray[2]->actor);

    //1) Recupera l’elenco delle sale con relative informazioni,
    //facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
    foreach ($salaArray as $element) {
        var_dump($element);
        echo "{$element->getInfo()}";
    }


    //2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
    $sum = 0;
    foreach ($salaArray as $element) {
        $sum += $element->getCapacity();
    }
    var_dump("somma:$sum");


    //3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
    
    for($i=0; $i<count($programmazioneArray[0]->getHour()); $i++){
        $projections = $i++;
    }
    echo "Proiezioni del film:"." ".$filmArray[0]->getTitle()." "."nel giorno:"." ".$programmazioneArray[0]->getDate()." "."sono:"." ".$projections;
    
    //4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.

    