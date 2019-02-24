<?php
$xml_strings = file_get_contents('https://medium.com/feed/hamph');
$xml = simplexml_load_string($xml_strings);
print_r($xml);
