<?php

$targetFolder ='/storage/app';
$linkFolder ='/public/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';

?>