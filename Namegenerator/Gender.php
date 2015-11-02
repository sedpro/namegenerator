<?php

namespace NameGenerator;

class Gender
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static $genders = [
        self::GENDER_MALE,
        self::GENDER_FEMALE,
    ];

    public static function getGenders()
    {
        return self::$genders;
    }

    public static function getRandom()
    {
        return self::$genders[rand(0,1)];
    }
}