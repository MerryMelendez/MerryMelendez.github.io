<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    //valida pregunta 1 1. ¿Lenguaje de programación que se utiliza para WEB?
    echo "<h3> ¿Cual de estos no fue una cortina de humo? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = La desaparicion de Paultte</h5>";
    if($pregunta1 == "La desaparicion de Paultte"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    if(strtoupper($pregunta2) == "Hoy fue un dia soleado"){
        $aciertos++;
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "El charro negro" || $pregunta3[$i] == "La planchada"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
        }
    }
    
    echo "<h3> Con que cancion relacionan al candidato Colosio </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = La culebra</h5>";
    if($pregunta4 == "La culebra"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    $p5_respuestas_correctas = 0;

    if(count($pregunta5) == 2){
        for($i=0; $i<count($pregunta5); $i++){
            if($pregunta5[$i] == "Fierros  de Colbato" || $pregunta5[$i] == "Leche Conasupo"){
                $p5_respuestas_correctas ++;
            }
        }
        if($p5_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    echo "<h3> ¿Cuantos estudiantes desaparicieron en el caso Ayotzinapa? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = 43</h5>";
    if($pregunta6 == "43"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    if(strtoupper($pregunta7) == "Selene Delgado"){
        $aciertos++;
    }

    if(count($pregunta8) == 2){
        for($i=0; $i<count($pregunta8); $i++){
            if($pregunta8[$i] == "El mounstro de Toluca" || $pregunta8[$i] == "El mounstro de Ecatepec"){
                $p8_respuestas_correctas ++;
            }
        }
        if($p8_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    echo "<h3> De  quien es la Estafa maestra </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = Enrique Peñanieto</h5>";
    if($pregunta9 == "Enrique Peñanieto"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    if(strtoupper($pregunta10) == "Balazos"){
        $aciertos++;
    }  

    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>