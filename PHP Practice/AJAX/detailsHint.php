<?php
$details = array(
    'cd' => "2cd,1tb",
    'laptop' => 'intel core i5'
);

echo json_encode($details[$_GET['q']]);
?>