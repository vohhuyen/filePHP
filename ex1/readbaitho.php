<?php
    $fp = fopen('baitho.txt', 'r') or die("Failed to create file");
    // $line = fread($fh, filesize("baitho.txt"));
    // echo $line;
    while(!feof($fp))
    { echo "<div style='background: green; width: 300px;'>";
        echo fgets($fp);
        echo "</br>";
      echo "</div>";
    }
    fclose($fp);
?>