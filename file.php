<?php
    $dir = opendir ("./images/tovar/");
    echo "Files:<br>";
    while ($file = readdir ($dir)) {
        echo $file."<br><br>";
        $res = strpos($file, "a§13n12123jnmsndmadna");
    }
    echo $res."<br><br><br>";
    closedir ($dir);
//    $a = "abc";
//    $b = "b";
//    $r = strpos($a, $b);
//    echo $r;
?>