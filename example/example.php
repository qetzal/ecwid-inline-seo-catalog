<?php
include "../ecwid_catalog/ecwid_catalog.php"; 
$params['store_id'] = 1003; //replace it with your actual store ID
$params['ecwid_show_seo_catalog'] = true;
$params['ecwid_seo_for_yandex'] = true;
echo show_ecwid($params);
?>