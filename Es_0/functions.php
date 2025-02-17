<?php
    include_once("config.php");

    function autoload ($classname) {
        global $subDir, $baseDir;
        foreach ($subDir as $dir) {
            $file = $baseDir."/$dir/$classname.php";
            if (file_exists($file)) {
                require_once $file;
                break;
            }
        }
    };
?>