<?php

namespace Unit4\Tests\Query;

use PHPUnit_Framework_TestCase;
use Unit4\Query\QueryBuilder;

class QueryBuilderTest extends PHPUnit_Framework_TestCase
{
    public function testBasicEqualQuery()
    {
        $registrationNumber = '1234567';

        $qb = new QueryBuilder();
        $qb->andWhere(
            $qb->expr()->eq('CocRegistration', $registrationNumber)
        );

        $this->assertEquals("CocRegistration eq " . $registrationNumber, $qb->getQuery());
    }

    public function testBasicEqualQueryWithLiteral()
    {
        $registrationNumber = '1234567';

        $qb = new QueryBuilder();
        $qb->andWhere(
            $qb->expr()->eq(
                'CocRegistration',
                $qb->expr()->literal($registrationNumber)
            )
        );

        $this->assertEquals("CocRegistration eq '" . $registrationNumber . "'", $qb->getQuery());
    }

    public function testQueryWithOr()
    {
        return;
        $qb = new QueryBuilder();
        $qb->orWhere(
            $qb->expr()->eq(
                'CocRegistration',
                'someValue'
            ),
            $qb->expr()->eq(
                $qb->expr()->lower('Email'),
                'emailaddress'
            )
        );

        print_r($qb->getParts());      // TODO: remove this line
        print_r($qb->getQuery());      // TODO: remove this line

        $this->assertEquals(
            "CocRegistration eq someValue or tolower(Email) eq emailaddress",
            $qb->getQuery()
        );
    }
}
