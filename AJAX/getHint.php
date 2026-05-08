<?php

$name = array('tamjid','tawhid','bayjid','hafsa','taslima','humayun');

$hint = "";

if(isset($_GET['q'])){

    $q = strtolower($_GET['q']);

    foreach($name as $n)
        //if(strpos(strtolower($n), $q) !== false){
        if(str_starts_with($n,$q)) $hint .= $n . "<br>";
    
}

echo json_encode($hint ?: "no-suggestion");

?>