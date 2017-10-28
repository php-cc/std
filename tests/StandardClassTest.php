<?php

namespace PCC\Std\Tests;

use PHPUnit\Framework\TestCase;
use PCC\Std\Tests\StandardClassMock;
use PCC\Std\Exceptions\{
    InaccessiblePropertyException,
    InaccessibleMethodException,
    InaccessibleStaticMethodException
};

class StandardClassTest extends TestCase
{

    /** @var StandardClassMock */
    private $stdClassMock;

    public function setUp()
    {
        parent::setUp();
        $this->stdClassMock = new StandardClassMock;
    }

    /**
     * @test
     */
    public function testGetSuccess()
    {
        $this->assertEquals(1, $this->stdClassMock->publicProperty);
    }

    /**
     * @test
     */
    public function testGetFail1()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $b = $this->stdClassMock->undefinedProperty;
    }

    /**
     * @test
     */
    public function testGetFail2()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $b = $this->stdClassMock->protectedProperty;
    }

    /**
     * @test
     */
    public function testGetFail3()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $b = $this->stdClassMock->privateProperty;
    }

    /**
     * @test
     */
    public function testSetSuccess()
    {
        $this->stdClassMock->publicProperty = 3;
        $this->assertEquals(3, $this->stdClassMock->publicProperty);
    }

    /**
     * @test
     */
    public function testSetFail1()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $this->stdClassMock->undefinedProperty = 3;
    }

    /**
     * @test
     */
    public function testSetFail2()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $this->stdClassMock->protectedProperty = 3;
    }

    /**
     * @test
     */
    public function testSetFail3()
    {
        $this->expectException(InaccessiblePropertyException::class);
        $this->stdClassMock->privateProperty = 3;
    }

    /**
     * @test
     */
    public function testIssetTrue()
    {
        $this->assertTrue(isset($this->stdClassMock->publicProperty));
    }

    /**
     * @test
     */
    public function testIssetFalse1()
    {
        $this->assertFalse(isset($this->stdClassMock->protectedProperty));
    }

    /**
     * @test
     */
    public function testIssetFalse2()
    {
        $this->assertFalse(isset($this->stdClassMock->undefinedProperty));
    }

    /**
     * @test
     */
    public function testUnsetFail()
    {
        $this->expectException(InaccessiblePropertyException::class);
        unset($this->stdClassMock->protectedProperty);
    }

    /**
     * @test
     */
    public function testInvalidMethod()
    {
        $this->expectException(InaccessibleMethodException::class);
        $this->stdClassMock->noMethod();
    }

    /**
     * @test
     */
    public function testInvalidStaticMethod()
    {
        $this->expectException(InaccessibleStaticMethodException::class);
        $this->stdClassMock::noMethod();
    }

}
