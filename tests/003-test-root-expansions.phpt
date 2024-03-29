--TEST--
Check expand
--SKIPIF--
<?php if (!extension_loaded("postal")) print "skip"; ?>
--FILE--
<?php
$expansions = Postal\Expand::expand_address_root("Quatre vingt douze Ave des Champs-Élysées");
foreach ($expansions as $expansion) {
    echo "$expansion\n";
}
$options = array("languages" => array("fr"), "address_components" => ADDRESS_ANY | ADDRESS_NAME | ADDRESS_STREET);
$expansions = Postal\Expand::expand_address_root("Quatre vingt douze Ave des Champs-Élysées", $options);
foreach ($expansions as $expansion) {
    echo "$expansion\n";
}
?>
--EXPECT--
92 champs-elysees
92 champs elysees
92 champselysees
92 champs-elysees
92 champs elysees
92 champselysees