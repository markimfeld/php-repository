<?php

require_once '../vendor/autoload.php';


$thumb = new PHPThumb\GD('mifoto.png');
$thumb->resize(100, 100);
$thumb->show();
$thumb->save('mifotomod.png');