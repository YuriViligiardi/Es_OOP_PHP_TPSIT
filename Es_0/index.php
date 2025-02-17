<?php
    include("functions.php");
    header("Content-Type: application/json");

    // require_once 'Indirizzo.php';
    // require_once 'Voto.php';
    // require_once 'Alunno.php';

    spl_autoload_register("autoload");

    //Serializzazione json con gli oggetti dentro la index
    // $al1 = new Alunno("Yuri", "Viligiardi", 19);
    // $al2 = new Alunno("Giacomo", "Petrini", 19);
    // $al3 = new Alunno("Tommaso", "Pizzutilo", 18);
    // $al4 = new Alunno("Cosimo", "Ballerini", 18);

    // $arrayAlunni = array($al1, $al2, $al3, $al4); 

    //$json = json_encode($arrayAlunni);


    //Serializzazione json con gli oggetti dentro il file 'alunni.json'
    $json = file_get_contents("alunni.json");
    
    //Deserializzazione json
    $arrayAlunni2 = json_decode($json, true);
    $arrayAlunni = [];
    foreach ($arrayAlunni2 as $al) {
        $a = new Alunno($al['nome'], $al['cognome'], $al['eta']);
        $arrayAlunni [] = $a;
    }

    $v1 = new Voto("Storia", 7.5, "Buona interrogazione");
    $v2 = new Voto("Informatica", 5.5, "Puoi fare di piu'");
    $arrayAlunni[1] -> setVoto($v1);
    $arrayAlunni[1] -> setVoto($v2);

    $in1 = new Indirizzo("Via di Ugnano", 63, 50142, "Firenze");
    $in2 = new Indirizzo("Via del cimitero di Ugnano", 2, 50142, "Firenze");
    $arrayAlunni[0] -> setIndirizzo($in1);
    $arrayAlunni[1] -> setIndirizzo($in2);
    
    $arrayAlunni[2] -> setBocciato(true);

    //Riserializzazione json
    echo json_encode($arrayAlunni);
?>