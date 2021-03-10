<?php

$data = json_decode(file_get_contents('php://input'), true);
$lastname = isset($data['pageOneContents'][0]['declarant_family_name']) ? $data['pageOneContents'][0]['declarant_family_name'] : "";
$lastname = str_replace(" ","-",$lastname);
$firstname = isset($data['pageOneContents'][0]['declarant_first_name']) ? $data['pageOneContents'][0]['declarant_first_name'] : "";
$firstname = str_replace(" ","-",$firstname);
$mi = isset($data['pageOneContents'][0]['declarant_mi']) ? $data['pageOneContents'][0]['declarant_mi'] : "";
$mi = str_replace(" ","-",$mi);
// $lastname = urlencode($lastname);
// $firstname = urlencode($firstname);
// $mi = urlencode($mi);
$filename = "SALN-$lastname-$firstname-$mi-".date("m-d-y-h-i-s");
$fp = fopen('json/'.$filename.'.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
echo json_encode([
    'filename' => $filename,
]);
?>