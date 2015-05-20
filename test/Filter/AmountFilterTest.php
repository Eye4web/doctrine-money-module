<?php

namespace ZFBrasil\Test\DoctrineMoneyModule\Filter;

use PHPUnit_Framework_TestCase as TestCase;
use ZFBrasil\DoctrineMoneyModule\Filter\AmountFilter;

/**
 * @author  Gabriel Schmitt <gabrielsch@outlook.com>
 * @license MIT
 */
class AmountFilterTest extends TestCase
{
    public function testFiltersValueAsExpected()
    {
        $filter = new AmountFilter();

        $this->assertSame(20000, $filter->filter(200));

        $this->assertSame(20000, $filter->filter('200'));

        $this->assertSame(0, $filter->filter(0));

        $this->assertSame(0, $filter->filter('0'));
    }

    public function testShouldNotFilterEmpty()
    {
        $filter = new AmountFilter();

        $this->assertNull($filter->filter(''));

        $this->assertNull($filter->filter(null));
    }
}
