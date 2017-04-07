<?php
namespace Tests\Unit;

use App\SingleResponsibility\BestPractice\Display;
use Tests\TestCase;

class DisplayTest extends TestCase
{
    private $display;

    public function setUp() : void
    {
        parent::setUp();

        $this->display = new Display();
    }

    public function testDisplay()
    {
        $this->expectOutputRegex('/Array/');
        $this->display->display($this->getGenerateProduct());
    }

}