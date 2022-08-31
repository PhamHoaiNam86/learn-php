<?php
function show_data($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
show_data($_GET);
$q = $_GET['q'];
echo $q;
?>