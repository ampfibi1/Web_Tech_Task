<?php

$folder = "Photos/";

$files = scandir($folder);

foreach($files as $file)
{
    // skip . and ..
    if($file != "." && $file != "..")
    {
        echo "<img src='".$folder.$file."' >";
    }
}

?>