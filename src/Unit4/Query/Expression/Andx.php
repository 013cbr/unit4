<?php

namespace Unit4\Query\Expression;

class Andx extends Composite
{
    /**
     * @var string
     */
    protected $separator = ' and ';

    /**
     * @var array
     */
    protected $allowedClasses = array(
        Comparison::class,
        Func::class,
        Orx::class,
        self::class,
    );

    /**
     * @return array
     */
    public function getParts()
    {
        return $this->parts;
    }
}