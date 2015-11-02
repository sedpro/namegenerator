<?php

namespace NameGenerator;

class File
{
    /** @var array  */
    private $file;

    /** @var int Count of lines in file */
    private $count;

    public function __construct($file)
    {
        $dir = __DIR__ . '/../data/';

        $this->file = file($dir . $file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $this->count = count($this->file) - 1;
    }

    public function get($line)
    {
        return ucfirst($this->file[$line]);
    }

    public function getRandom()
    {
        return $this->get(rand(0, $this->count));
    }
}