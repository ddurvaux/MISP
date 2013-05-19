<?php
$xml = Xml::fromArray(array(
    'MISP' => $event
));
echo $xml->asXML();