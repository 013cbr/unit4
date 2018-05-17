<?php

namespace Unit4\Query\Expression;

class Orx extends Composite
{
    /**
     * @var string
     */
    protected $separator = ' or ';

    /**
     * @var array
     */
    protected $allowedClasses = array(
        Comparison::class,
        Func::class,
        Andx::class,
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