<?php
if(!function_exists('hash_string'))
{
    function hash_string($string)
    {
        $hashed_string = password_hash($string, PASSWORD_BCRYPT, ['cost' => 9]);
        return $hashed_string;
    }
}

if(!function_exists('hash_verify'))
{
    function hash_verify($plain_text, $hashed_string)
    {
        $hashed_string = password_verify($plain_text, $hashed_string);
        return $hashed_string;
    }
}
