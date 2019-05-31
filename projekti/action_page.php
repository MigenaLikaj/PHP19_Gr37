<?php
/*$quiz = array(
"Cili eshte dokumenti i pare i gjuhes shqipe?" => array(
    '1' => "Fjalori i Arnold Van Harfit",
    '2' => "Formula e Pagezimit",
    '3' => "Meshari",
	
),

"Cili eshte libri i pare shqip?" => array(
    '1' => "Meshari - Gjon Buzuku",
    '2' => "Histori e Skenderbeut - Marin Barleti",
    '3' => "Formula e Pagezimit - Pal Engjelli",

),


"Si quhet autori i Abetares se pare ne gjuhen shqipe?  "=>array(
    '1'=> "Naim Frasheri",
    '2'=> "Fan Noli ",
    '3'=> "Naum Veqilharxhi",
),
);
$question;
$option; 
$answer;
$type=1;
echo "<form method='POST' onsubmit=' return blla()'";
foreach($quiz as $question => $answers) {
    echo $question."<br>";
    foreach($answers as $index => $answer) {
        echo "<input type='radio'  name='$type'>$answer<br/>";
		
    }
	$type=$type+1;
	echo "<br><br>";
}
echo "<button type='submit' value='submit'>Submit</button></form>";*/

$radio1 = $radio2 = "";
if(isset(["1"])){
	$radio1 = $_REQUEST['1'];
	}
if(isset(['2'])){
	$radio2 = $_REQUEST['2'];
	}
echo $radio1." ".$radio2 ;

?>
