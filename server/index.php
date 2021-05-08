<?php
require __DIR__ . '/vendor/autoload.php';

// Translate to morse:
$ip=$_SERVER['REMOTE_ADDR'];
$text = new Morse\Text();
$morse = $text->toMorse($ip);

echo $morse . "\n"; // ... --- ...
?>