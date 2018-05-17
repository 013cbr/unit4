<?php

namespace Unit4\Query\Expression;

class Literal extends Base
{
    /**
     * @var string
     */
    protected $preSeparator  = '';

    /**
     * @var string
     */
    protected $postSeparator = '';

    /**
     * @return array
     */
    public function getParts()
    {
        return $this->parts;
    }
}