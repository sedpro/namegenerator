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

    /** @var array  */
    private $allowedColumns = [
        'email',
        'birthday',
        'phone',
    ];

    public function __construct()
    {
        $this->lastNames = new File('last.txt');
        $this->maleNames = new File('male.txt');
        $this->femaleNames = new File('female.txt');
        $this->email = new Email();
    }

    /**
     * Get $num names
     * @param $num
     * @param $additionalColumns
     * @return array
     * @throws \Exception
     */
    public function get($num, $additionalColumns = [])
    {
        $out = [];

        // check that all columns are allowed
        foreach ($additionalColumns as $column) {
            if (!in_array($column, $this->allowedColumns)) {
                throw new \Exception('column ' . $column . ' not allowed');
            }
        }

        for($i=0; $i<$num; $i++)
        {
            $item = [];

            $item['gender'] = Gender::getRandom();

            $item['first'] = $item['gender']==Gender::GENDER_MALE
                ? $this->maleNames->getRandom()
                : $this->femaleNames->getRandom();

            $item['last']  = $this->lastNames->getRandom();

            foreach ($additionalColumns as $column) {
                $item[$column] = $this->$column();
            }

            $out[] = $item;
        }
        
        return $out;
    }

    private function email()
    {
        return $this->email->getRandom();
    }

    private function birthday()
    {
        $min = strtotime('1930-01-01');
        $max = strtotime('2000-01-01');

        $val = rand($min, $max);

        return date('Y-m-d', $val);
    }

    private function phone()
    {
        return rand(1, 9) . '-' . rand(100, 999) . '-'  . rand(100, 999) . '-' . rand(1000, 9999);
    }
}