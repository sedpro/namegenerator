<?php

namespace NameGenerator;

class Email
{
    /** @var array possible top-level domains */
    private $domains = [
        "com",
        "net",
        "gov",
        "org",
        "edu",
        "biz",
        "info",
        // Country-code Top-Level Domains
        'ac',
        'ad',
        'ae',
        'af',
        'ag',
        'ai',
        'al',
        'am',
        'an',
        'ao',
        'aq',
        'ar',
        'as',
        'at',
        'au',
        'aw',
        'ax',
        'az',
        'ba',
        'bb',
        'bd',
        'be',
        'bf',
        'bg',
        'bh',
        'bi',
        'bj',
        'bm',
        'bn',
        'bo',
        'br',
        'bs',
        'bt',
        'bv',
        'bw',
        'by',
        'bz',
        'ca',
        'cc',
        'cd',
        'cf',
        'cg',
        'ch',
        'ci',
        'ck',
        'cl',
        'cm',
        'cn',
        'co',
        'cr',
        'cs',
        'cu',
        'cv',
        'cx',
        'cy',
        'cz',
        'de',
        'ee',
        'eu',
        'fm',
        'ge',
        'is',
        'kg',
        'kz',
        'lv',
        'lt',
        'md',
        'pw',
        'ru',
        'su',
        'tj',
        'tk',
        'tm',
        'tv',
        'ua',
        'uz',
        'ye',
    ];

    public function getRandom()
    {
        return $this->strRandom(3,15). '@' . $this->strRandom(3,15) . '.' . $this->domains[rand(0, count($this->domains) - 1)];
    }

    public function strRandom($min=3, $max=15)
    {
        $length = rand($min, $max);
        return substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyz', $length)), 0, $length);
    }
}