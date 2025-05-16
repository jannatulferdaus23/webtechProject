<?php
$fileName = 'myfile.txt';

try {
    $created = file_put_contents($fileName, '');

    if ($created === false) {
        throw new Exception();
    }

    echo "File '$fileName' created successfully.";
} catch (Exception $e) {
    echo "Failed to create file.";
}
?>