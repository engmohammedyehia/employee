<?php
namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use TestPackage\Helpers\Test;

class TestTest extends TestCase
{
    /**
     * @var Test
     */
    private $object;

    public function setUp()
    {
        $this->object = new Test();
        $this->object->setName("Mohammed Yehia");
    }

    public function testNameGetter()
    {
        $this->object->setName('Ahmed Yehia');
        $this->assertEquals('Ahmed Yehia', $this->object->getName());
    }
}
