<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }


    /** @test */

    public function NetPriceTest()
    {

        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }

    /** @test */

    public function AddToPriceTest()
    {

	$this->cart->addToPrice(10);
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(24, $netPrice);
    }

    /** @test */

    public function discountPriceTest()
    {

	$this->cart->discountPrice(0.1);
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(10.8, $netPrice);
    }

    /** @test */

    public function changeTaxTest()
    {

        $this->cart->changeTax(1.5);
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }
    
    /** @test */

    public function addToTaxTest()
    {

        $this->cart->addToTax(0.8);
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(20, $netPrice);
    }
}