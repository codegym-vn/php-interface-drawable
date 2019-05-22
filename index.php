<?php

require "src/Drawable.php";
require "src/House.php";
require "src/Rectangle.php";
require "src/Picture.php";

$house = new House();
$rectangle = new Rectangle(10,5);

$picture = new Picture();
$picture->add($house);
$picture->add($rectangle);

$picture->show();
