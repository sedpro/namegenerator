<?php

namespace NameGenerator;

class File
{
    private $file;
    private $count;

    public function __construct($file)
    {
        $this->file = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $this->count = count($this->file) - 1;
    }

    public function get($line)
    {
        return $this->file[$line];
    }

    public function getRandom()
    {
        return $this->get(rand(0, $this->count));
    }
}