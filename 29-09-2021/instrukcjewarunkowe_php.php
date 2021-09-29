<?php
include_once "instrukcjewarunkowe_html.html";
/*tu jest pierwiastek
    if(!empty($_POST['liczba'])&&$_POST['liczba']>0){
        $liczb=$_POST['liczba'];
    echo sqrt($liczb);
    }
    else 
    echo "blad";
// a tutaj nie
include_once "instrukcjewarunkowe2_html.html";
    if(!empty($_POST['liczba1'])&&!empty($_POST['liczba2'])){
    $a=$_POST['liczba1'];
    $b=$_POST['liczba2'];

    if($a>$b){
        echo "liczba ".$a." jest wieksza";

    } 
    elseif($a==$b){
        echo "liczba ".$a." jest rowna ".$b;

    }
    else echo "liczba ".$b." jest wieksza";
    
*/
    // tutaj to jakis switch
    include_once "instrukcjewarunkowe3_html.html";
    if(!empty($_POST['liczba3']))
    {
        $p=$_POST['liczba3'];
        if($p>0&&$p<7){
            switch($p){
                case 1:
                    echo "Brak promocji do następnej klasy";
                    break;
                case 6:
                    echo "Promocja z oceną celującą";
                    break;
                    default:
                    echo "Promocja do nastepnej klasy";
                    break;
            }

        }
        else 
        echo "no chyba nie";
    }

?>