<?php
$data = array('Batch','top',"harsiddhi");

$data_array = serialize($data);

//print_r($data_array);

$data = unserialize($data_array);
print_r($data);






?>