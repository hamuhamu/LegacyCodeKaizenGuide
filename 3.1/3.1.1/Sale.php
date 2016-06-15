<?php

interface Display
{
    public function showLine($line);
}

class Sale
{
    /** Display */
    private $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    public function scan($barcode)
    {
        $line = 'barcode: ' . $barcode;
        $this->display->showLine($line);
    }
}

class ArtR56Display implements Display
{
    public function showLine($line)
    {
        echo $line;
    }
}
