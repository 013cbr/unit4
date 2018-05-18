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

        $this->assertEquals(
            ['$filter' => "CocRegistration eq " . $registrationNumber],
            $qb->getQuery()
        );
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

        $this->assertEquals(
            ['$filter' => "CocRegistration eq '" . $registrationNumber . "'"],
            $qb->getQuery()
        );
    }

    public function testQueryWithOr()
    {
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

        $this->assertEquals(
            ['$filter' => "CocRegistration eq someValue or tolower(Email) eq emailaddress"],
            $qb->getQuery()
        );
    }

    public function testComplexQueryWithAnd()
    {
        $qb = new QueryBuilder();
        $qb->andWhere(
            $qb->expr()->eq(
                'CocRegistration',
                'someValue'
            ),
            $qb->expr()->orX(
                $qb->expr()->eq(
                    $qb->expr()->lower('Email'),
                    'aaa@domain.com'
                ),
                $qb->expr()->eq(
                    $qb->expr()->lower('Email'),
                    $qb->expr()->literal('bbb@domain.com')
                )
            )
        );

        $this->assertEquals(
            ['$filter' => "CocRegistration eq someValue and (tolower(Email) eq aaa@domain.com or tolower(Email) eq 'bbb@domain.com')"],
            $qb->getQuery()
        );
    }

    public function testAddingCriteriaSeperately()
    {
        $qb = new QueryBuilder();
        $qb->orWhere(
            $qb->expr()->eq('CocRegistration', '1234567')
        );
        $qb->orWhere(
            $qb->expr()->eq($qb->expr()->lower('Email'), $qb->expr()->literal('aaa@domain.com'))
        );

        $this->assertEquals(
            ['$filter' => "CocRegistration eq 1234567 or tolower(Email) eq 'aaa@domain.com'"],
            $qb->getQuery()
        );
    }
}
