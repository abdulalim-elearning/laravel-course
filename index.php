<?php
// File Operations:
$file = fopen("example.txt", "r");
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);

?>