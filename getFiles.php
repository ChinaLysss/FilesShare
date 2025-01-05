<?php
$dir = 'uploads/';
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}
$files = scandir($dir);
$validFiles = [];
foreach ($files as $file) {
    if ($file!= '.' && $file!= '..') {
        $validFiles[] = $file;
    }
}
echo json_encode($validFiles);
?>