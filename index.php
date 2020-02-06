<?php 

const MIN_BOUND = 1;
const MAX_BOUND = 49;

function getLotteryDraw()
{
    $verif = 0 ;
    if (isset($_GET['nbValues']) && $_GET['nbValues'] != '')
        $numberValues = $_GET['nbValues'];
    else{
        $numberValues = 6;
        $verif = 1 ;
        }
    $draw = [];
    
    while( count($draw) < $numberValues){
        $randomNumber = rand(MIN_BOUND, MAX_BOUND);
        if(in_array($randomNumber, $draw) == false){
            $draw[] = $randomNumber;
        }
    }

    sort($draw);

    if( $verif == 1 )
    {
     $draw[count($draw)-1] = '6 par defaut';
    }
    else
    {
        $draw[count($draw)-1] = '';
    }
    return $draw;
}

$lotteryDraw = getLotteryDraw();
echo implode(', ', $lotteryDraw);
