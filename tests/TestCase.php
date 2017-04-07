<?php

declare(strict_types = 1);

namespace Tests;
use Mockery;

use Faker\Factory;
use Faker\Generator;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    protected function setUp()
    {
        parent::setUp();
        Mockery::getConfiguration()->allowMockingNonExistentMethods(false);
    }

    protected function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }

    protected function faker(): Generator
    {
        return Factory::create();
    }

    /**
     * @param string $class
     *
     * @return \Mockery\Mock|mixed
     */
    protected function mock(string $class)
    {
        return Mockery::mock($class);
    }

    /**
     * For generate array with data products
     * @return array
     */
    protected function getGenerateProduct() : array
    {
        return [
            'price'    => $this->faker()->numberBetween(0, 2000),
            'category' => $this->faker()->word,
            'title'    => $this->faker()->word,
        ];

    }
}