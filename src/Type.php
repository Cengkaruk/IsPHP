<?php

namespace League\IsPHP;

class Type extends IsPHP
{

    /**
     * Create a new IsPHP Instance
     */
    public function __construct()
    {
    }

    public function array(value)
    {
        return is_array(value);
    }
}
