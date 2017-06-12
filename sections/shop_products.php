<?php
$xml='<?xml version="1.0" encoding="ISO-8859-1"?>
<catalogue>


<stuff> 
<autogrammkarten barcode="123456">
<image>img/shop/autogrammkarten.jpg</image>
<name>Autogrammkarten</name>
<price>2,59</price>
</autogrammkarten>
</stuff>

<stuff> 
<sticker barcode="123456">
<image>img/shop/sticker.jpg</image>
<name>Sticker</name>
<price>3,80</price>
</sticker>


</stuff>
</catalogue>';


$xml=simplexml_load_string($xml);
foreach($xml as $section=>$items) {
    $store[$section][]=$items;
}
?>