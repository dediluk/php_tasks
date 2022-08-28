<?php

namespace src;

class Task8
{
    public static function create_output(array $arr): string
    {
        $result = '';
        foreach ($arr as $key => $value) {
            if (gettype($value) == 'array') {
                $result = $result . Task8::create_output($value);
            } else {
                $result = $result . ($key . ': ' . $value) . "\n";
            }
        }
        return $result;
    }

    public static function main(string $json): string
    {
        $arr_json = json_decode($json, true);
        Task8::create_output($arr_json);
        return Task8::create_output($arr_json);
    }
}

$json = readline('Input json: ');
Task8::main($json);
