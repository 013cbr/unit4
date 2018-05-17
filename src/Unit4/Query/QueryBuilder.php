<?php

namespace Unit4\Query;

use Unit4\Query\Expression\Andx;
use Unit4\Query\Expression\Orx;

/**
 * Class QueryBuilder
 *
 * This class mimics most of the doctrine behaviour
 *
 * @package Unit4\Query
 */
class QueryBuilder
{
    const CONDITION_OR  = 'or';
    const CONDITION_AND = 'and';

    /**
     * @var int Maximum number of results to retrieve
     */
    private $maxResults;

    /**
     * @var array Holds the query parts (expressions)
     */
    private $parts;

    /**
     * @var ExpressionBuilder
     */
    private $expressionBuilder;

    public function __construct()
    {
        $this->parts = [];
    }

    public function expr()
    {
        if ($this->expressionBuilder === null) {
            $this->expressionBuilder = new ExpressionBuilder();
        }

        return $this->expressionBuilder;
    }

    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    public function andWhere()
    {
        $args  = func_get_args();
        $where = $this->parts;

        if ($where instanceof Andx) {
            $where->addMultiple($args);
        } else {
            array_unshift($args, $where);
            $where = new Andx($args);
        }
        return $this->add($where);
    }

    public function orWhere()
    {
        $args  = func_get_args();
        $where = $this->parts;

        if ($where instanceof Orx) {
            $where->addMultiple($args);
        } else {
            array_unshift($args, $where);
            $where = new Orx($args);
        }
        return $this->add($where);
    }

    private function add($part, $append = false)
    {
        $isMultiple = is_array($this->parts);

        if (is_array($part)) {
            $part = reset($part);
        }

        if ($append && $isMultiple) {
            if (is_array($part)) {
                $key                 = key($part);
                $this->parts[$key][] = $part[$key];
            } else {
                $this->parts[] = $part;
            }
        } else {
            $this->parts = ($isMultiple) ? array($part) : $part;
        }

        return $this;
    }

    public function getQuery()
    {
        if (empty($this->parts)) {
            return '';
        }

        $query = (is_array($this->parts) ? implode('', $this->parts) : $this->parts);
//        $query->setMaxResults($this->maxResults);     // TODO: add this to the query

        return $query;
    }

    public function getParts()
    {
        return $this->parts;
    }
}
