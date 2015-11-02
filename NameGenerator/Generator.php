<?php

namespace NameGenerator;

class Generator
{
    /** @var File */
    private $lastNames;

    /** @var File */
    private $maleNames;

    /** @var  File */
    private $femaleNames;

    /** @var Email */
    private $email;

    public function __construct()
    {
        $this->lastNames = new File('data/last.txt');
        $this->maleNames = new File('data/male.txt');
        $this->femaleNames = new File('data/female.txt');

        $this->email = new Email();
    }

    public function get($num)
    {
        return $this->getNames($num);
    }

    private function getNames($num)
    {
        $out = [];

        for($i=0; $i<$num; $i++)
        {
            $gender = Gender::getRandom();

            $first = $gender==Gender::GENDER_MALE
                ? $this->maleNames->getRandom()
                : $this->femaleNames->getRandom();

            $last  = $this->lastNames->getRandom();

            $out[] = [
                "first" => ucfirst($first),
                "last" => ucfirst($last),
                "gender" => $gender,
                "email" => $this->email->getRandom(),
            ];
        }
        
        return $out;
    }
}