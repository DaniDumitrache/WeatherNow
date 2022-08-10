<?php
class Controller
{
    public function __construct()
    {
        global $data;
        $ip = $_SERVER['REMOTE_ADDR'];

        $json = file_get_contents('http://api.weatherstack.com/current?access_key=ebf5a7c27dd3ad394390aa7e34ede9f1&query=' . $ip);

        $data = json_decode($json, true);
    }
}
?>