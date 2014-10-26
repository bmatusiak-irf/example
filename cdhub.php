<?php
if (isset($_GET['f']))
{
    $file = file_get_contents ("https://raw.githubusercontent.com/bmatusiak-irf/example/".$_GET['f']);
    if (!$file) {
        echo "Unable to open remote file.\n";
        exit;
    }
    /* Write the data here. */
    echo $file;

}
?>