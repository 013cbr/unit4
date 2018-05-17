<?php

namespace Unit4\Query\Expression;

class Comparison
{
    const EQ  = 'eq';
//    const NEQ = '<>';
//    const LT  = '<';
//    const LTE = '<=';
//    const GT  = '>';
//    const GTE = '>=';

    /**
     * @var mixed
     */
    protected $leftExpr;

    /**
     * @var string
     */
    protected $operator;

    /**
     * @var mixed
     */
    protected $rightExpr;

    /**
     * Creates a comparison expression with the given arguments.
     *
     * @param mixed  $leftExpr
     * @param string $operator
     * @param mixed  $rightExpr
     */
    public function __construct($leftExpr, $operator, $rightExpr)
    {
        $this->leftExpr  = $leftExpr;
        $this->operator  = $operator;
        $this->rightExpr = $rightExpr;
    }

    /**
     * @return mixed
     */
    public function getLeftExpr()
    {
        return $this->leftExpr;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @return mixed
     */
    public function getRightExpr()
    {
        return $this->rightExpr;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->leftExpr . ' ' . $this->operator . ' ' . $this->rightExpr;
    }
}