<?php
//view db
function getadmindb($name){
  $answer = file_get_contents("db/admin/$name.txt");
  return $answer;
}
function getusersdb($id,$name){
  $answer = file_get_contents("db/users/$id/$name.txt");
  return $answer;
}


//add db
function saveadmindb($name,$i){
    file_put_contents("db/admin/$name.txt",$i);
}
function saveusersdb($id,$name,$i){
    file_put_contents("db/users/$id/$name.txt",$i);
}

//add num
function admdb($name,$i){
  $answer = file_get_contents("db/admin/$name.txt");
  
 $add = intval($answer)+intval($i);
 file_put_contents("db/admin/$name.txt",$add);
  
}
function usedb($id,$name,$i){
  $answer = file_get_contents("db/users/$id/$name.txt");
  
 $add = intval($answer)+intval($i);
 file_put_contents("db/users/$id/$name.txt",$add);
  
}
?>