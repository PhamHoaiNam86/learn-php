<?php
$user = array(
    'id' => 1,
    'fullname' => 'Phạm Hoài Năm',
    'email' => 'phamhoainambt86@gmail.com'
);
echo "<pre>";
print_r($user);
echo "</pre>";

$user['fullname'] = 'Phạm Hoài Nam';
echo "<pre>";
print_r($user);
echo "</pre>";
?>