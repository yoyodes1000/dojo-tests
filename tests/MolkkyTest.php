<?php
use App\Molkky;
use PHPUnit\Framework\TestCase;

class MolkkyTest extends TestCase
{
    public function testIsOneKeel()
    {
        $molkky = new Molkky();
        $this->assertTrue($molkky->isOneKeel([6]));
        $this->assertFalse($molkky->isOneKeel([6, 8]));
    }
    public function testIsZeroKeel()
    {
        $molkky = new Molkky();
        $this->assertTrue($molkky->isZeroKeel([]));
        $this->assertFalse($molkky->isZeroKeel([6, 8]));
        $this->assertFalse($molkky->isZeroKeel([6]));
    }
    public function testIsWin()
    {
        $molkky = new Molkky();
        $this->assertTrue($molkky->isWin(50));
        $this->assertFalse($molkky->isWin(49));
        $this->assertFalse($molkky->isWin(62));

    }
    public function testIsOver50()
    {
        $molkky = new Molkky();
        $this->assertTrue($molkky->isOver50(60));
        $this->assertFalse($molkky->isOver50(49));
        $this->assertFalse($molkky->isOver50(50));
    }
    public function testCountPointsByThrow()
    {
        $molkky = new Molkky();
        $this->assertEquals(6, $molkky->countPointsByThrow([6]));
        $this->assertEquals(2, $molkky->countPointsByThrow([6,3]));
        $this->assertEquals(0, $molkky->countPointsByThrow([]));
    }




}
