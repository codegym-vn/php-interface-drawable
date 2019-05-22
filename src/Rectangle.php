<?php


class Rectangle implements Drawable
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function draw()
    {
        for ($i = 0; $i < $this->height; $i++) {
            for ($j = 0; $j < $this->width; $j++) {
                print_r("*");
            }
            print_r("</br>");
        }
    }
}