<?php

namespace app\components;


class App
{
    public function init($config)
    {
        $db = new DB($config);
    }
}