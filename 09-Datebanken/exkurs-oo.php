<pre><?php
$zip = new ZipArchive();
// methoden in OOP sind functionen man nennent SIe aber methoden
$zip ->open(__DIR__.'/09-Datebanken/Archive.zip');
var_dump($zip);


// $fn= $zip->getNameIndex(0); //hollten den ersten datei namen aus der Datein. 
// var_dump($fn)

$contents= $zip-> getFromName('secret.txt');
var_dump($contents);

$zip2 = new ZipArchive2();
$zip2 -> open(__DIR__.'/09-Datebanken/Archive.zip');
var_dump($zip2->getNameIndex(0));

//$zip2 ->extractTo(__DIR__);// mit diesen Method können wieses Packet in unseren Ordnen entpacken also es entpackt zips z.b

?></pre>