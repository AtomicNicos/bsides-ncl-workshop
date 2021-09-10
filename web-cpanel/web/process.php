<?php
if (\LIBXML_VERSION < 20900) {
     libxml_disable_entity_loader(true);
}
if (\PHP_VERSION_ID < 80000) {
    libxml_disable_entity_loader(true);
}
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
@$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$info = simplexml_import_dom($dom);
$name = $info->name;
$tel = $info->tel;
$email = $info->email;
$password = $info->password;

echo "Sorry, $email is already registered!";
?>
