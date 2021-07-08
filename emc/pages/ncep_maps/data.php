
<?php
header('Content-Type: application/json');

$directory = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('./images/P6'));
$files = array(); 

foreach ($directory as $file) {
    if ($file->isDir()){ 
        continue;
    }
    $files[] = $file->getPathname(); 
}

echo json_encode($files);