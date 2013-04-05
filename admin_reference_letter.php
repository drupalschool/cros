asdfsdf
<?php

function get_reference_letter_score($ReferenceLetter_id){

if(!$ReferenceLetter_id){
return;
}

$question_total = 14 ;
$score = array();
$dontknow = 0;
$total_score = 0;
$sql = "select * from ReferenceLetter where ReferenceLetter_id = '$ReferenceLetter_id' ";

$result = mysql_query($sql) or die();

$obj = mysql_fetch_object($result);

if($obj->IntellectualAbility==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->IntellectualAbility ; 

}

if($obj->CriticalThinking==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->CriticalThinking ; 

}

if($obj->EthicalIntegrity==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->EthicalIntegrity ; 

}

if($obj->SelfMotivation==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->SelfMotivation ; 

}


if($obj->Maturity==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->Maturity ; 

}

if($obj->WorkIndependent==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->WorkIndependent ; 

}
if($obj->Perseverance==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->Perseverance ; 

}
if($obj->OralCommunicaton==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->OralCommunication ; 

}
if($obj->WrittenCommunication==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->WrittenCommunication ; 

}
if($obj->AcademicAbility==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->AcademicAbility ; 

}
if($obj->Professional==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->Professional ; 

}
if($obj->Research==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->Research ; 

}


if($obj->AttitudeSuitability==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->AttitudeSuitability ; 

}
if($obj->EnglishProficiency==0){

    $dontknow++;

} else {

    $total_score = $total_score + $obj->EnglishProficiency ; 

}

$score['dontknow'] = $donknow;

if($dontknow != $question_total){
    $total_core = $total_score*100/($question_total - $dontknow);
}

// if all questions are dont know or refeere does not recommend
if(($dontknow == $question_total) || $obj->recommendation == 'no'){

    $total_core = 0 ;    

} 

$core['total_score'] = $total_score;

return $score ;

}// function 

?>
