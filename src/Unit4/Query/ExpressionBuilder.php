<?php

namespace Unit4\Query;

use Unit4\Query\Expression\Andx;
use Unit4\Query\Expression\Comparison;
use Unit4\Query\Expression\Func;
use Unit4\Query\Expression\Orx;
use Unit4\Query\Expression\Literal;

class ExpressionBuilder
{
    public function andX($x = null)
    {
        return new Andx(func_get_args());
    }

    public function orX($x = null)
    {
        return new Orx(func_get_args());
    }

    public function eq($x, $y)
    {
        return new Comparison($x, Comparison::EQ, $y);
    }

    public function literal($literal)
    {
        return new Literal($this->quoteLiteral($literal));
    }

    public function lower($x)
    {
        return new Func('tolower', array($x));
    }

    /* not sure if this function exists, that's why it remains disabled for now
    public function upper($x)
    {
        return new Func('toupper', array($x));
    }
    // */

    private function quoteLiteral($literal)
    {
        if (is_numeric($literal) && !is_string($literal)) {
            return (string)$literal;
        } else {
            if (is_bool($literal)) {
                return $literal ? "true" : "false";
            } else {
                return "'" . str_replace("'", "''", $literal) . "'";
            }
        }
    }
}
