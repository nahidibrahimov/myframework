<?php

namespace app\core;

class Request
{

    public function getPath()
    {

        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $questionMarkPos = strpos($path, '?');

        if ($questionMarkPos === false)
            return $path;

        return substr($path, 0, $questionMarkPos);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}