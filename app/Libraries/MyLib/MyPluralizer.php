<?php


namespace App\Libraries\MyLib;


use Illuminate\Support\Pluralizer;
use LanguageDetection\Language;

class MyPluralizer extends Pluralizer
{

    public static function plural($value, $count = 2)
    {

        $dl = new Language(['fa', 'ar', 'en']);
        $result = $dl->detect($value);
        $max_key = '';
        $max_value = 0;
        foreach ($result as $k => $v) {
            if ($v > $max_value) {
                $max_value = $v;
                $max_key = $k;
            }
        }

        if ($count == 2 && $max_key == 'fa') {
            return $value . ' ها';
        } else {
            return parent::plural($value, $count);
        }
    }

}