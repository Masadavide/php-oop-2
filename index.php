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

    //push degli attori nei vari film
    array_push($filmArray[0]->actor, $actorArray);
    array_push($filmArray[1]->actor, $actorArray1);
    array_push($filmArray[2]->actor, $actorArray2);

    //push della programmazione per i vari film
    //array_push($SalaNormale->schedule);


    var_dump($filmArray);
    var_dump($filmArray[0]->actor);
    var_dump($filmArray[1]->actor);
    var_dump($filmArray[2]->actor);