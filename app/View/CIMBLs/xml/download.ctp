<?php
$xml = Xml::fromArray(array(
    'CIMBL' => $cimbl
));
echo $xml->asXML();