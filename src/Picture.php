<?php


class Picture
{
    private $elements = [];
    public $MAX_COUNT = 100;
    private $count = 0;

    public function add($element)
    {
        if ($this->count < $this->MAX_COUNT) {
            $this->elements[$this->count] = $element;
            $this->count++;
        }
    }

    public function show()
    {
        for ($i = 0; $i < $this->count; $i++) {
            $this->elements[$i]->draw();
            print_r("");
        }
    }

}