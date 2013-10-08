<?php

$likes = 0;
$jsonurl ="https://graph.facebook.com/LilWayne";
$json = file_get_contents($jsonurl);
$json_output = json_decode($json);
if($json_output->likes){ $likes = $json_output->likes; }

// Return Like count
echo '?='.$likes;