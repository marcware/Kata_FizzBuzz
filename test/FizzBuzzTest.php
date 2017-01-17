<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /** @var  FizzBuzz */
    private $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function numeroDivisiblePorTres()
    {
        $this->assertTrue($this->fizzBuzz->esDivisiblePorTres(33));
        $this->assertTrue($this->fizzBuzz->esDivisiblePorTres(300));
    }

    /**
     * @test
     */
    public function numeroNoDivisiblePorTres()
    {
        $this->assertFalse($this->fizzBuzz->esDivisiblePorTres(10));
        $this->assertFalse($this->fizzBuzz->esDivisiblePorTres(301));
    }

    /**
     * @test
     */
    public function numeroDivisiblePorCinco()
    {
        $this->assertTrue($this->fizzBuzz->esDivisiblePorCinco(10));
        $this->assertTrue($this->fizzBuzz->esDivisiblePorCinco(300));
    }

    /**
     * @test
     */
    public function numeroNoDivisiblePorCinco()
    {
        $this->assertFalse($this->fizzBuzz->esDivisiblePorCinco(9));
        $this->assertFalse($this->fizzBuzz->esDivisiblePorCinco(333));
    }


    /**
     * @test
     */
    public function queValorMostar()
    {
        $this->assertEquals(1, $this->fizzBuzz->mostrarValor(1));
        $this->assertEquals(2, $this->fizzBuzz->mostrarValor(2));
        $this->assertEquals('Fizz', $this->fizzBuzz->mostrarValor(3));
        $this->assertEquals(4, $this->fizzBuzz->mostrarValor(4));
        $this->assertEquals('Buzz', $this->fizzBuzz->mostrarValor(5));
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->mostrarValor(30));
    }


}