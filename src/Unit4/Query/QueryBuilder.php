<?php

namespace Unit4\Query;

use Unit4\Query\Expression\Andx;
use Unit4\Query\Expression\OrderBy;
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
        $this->parts = [
            'where'   => null,
            'orderBy' => $this->resetOrderBy(),
        ];
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

    public function addOrderBy($sort, $order = null)
    {
        $orderBy = ($sort instanceof OrderBy) ? $sort : new OrderBy($sort, $order);
        return $this->add('orderBy', $orderBy, true);
    }

    public function resetOrderBy()
    {
        $this->parts['orderBy'] = [];
    }

    public function andWhere()
    {
        $args  = func_get_args();
        $where = $this->parts['where'];

        if ($where instanceof Orx) {
            $where->addMultiple($args);
        } else {
            array_unshift($args, $where);
            $where = new Andx($args);
        }

        return $this->add('where', $where);
    }

    public function orWhere()
    {
        $args  = func_get_args();
        $where = $this->parts['where'];

        if ($where instanceof Orx) {
            $where->addMultiple($args);
        } else {
            array_unshift($args, $where);
            $where = new Orx($args);
        }

        return $this->add('where', $where);
    }

    private function add($partName, $part, $append = false)
    {
        $isMultiple = is_array($this->parts[$partName]);

        if (is_array($part)) {
            $part = reset($part);
        }

        if ($append && $isMultiple) {
            if (is_array($part)) {
                $key                            = key($part);
                $this->parts[$partName][$key][] = $part[$key];
            } else {
                $this->parts[$partName][] = $part;
            }
        } else {
            $this->parts[$partName] = ($isMultiple) ? array($part) : $part;
        }

        return $this;
    }

    public function getQuery()
    {
        $query = [];

        if (!empty($this->parts['where'])) {
            $query['$filter'] = (is_array($this->parts['where']) ? implode('',
                $this->parts['where']) : $this->parts['where']->__toString());
        }

        if (!empty($this->maxResults)) {
            $query['$top'] = $this->maxResults;
        }

        if (!empty($this->parts['orderBy'])) {
            $query['$orderby'] = (is_array($this->parts['orderBy']) ? implode(', ',
                $this->parts['orderBy']) : $this->parts['orderBy']->__toString());
        }

        return $query;
    }
}
