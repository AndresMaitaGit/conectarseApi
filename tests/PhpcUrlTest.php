<?php
// composer dump-autoload -o
// ./vendor/bin/phpunit tests
use PHPUnit\Framework\TestCase;

class PhpcUrlTest extends TestCase{
    private $op;
    
    public function setUp():void{
        $this->op = new PhpcUrl();
    }
    
    public function testPaginacionPage1(){
        $this->assertEquals(1,$this->op->paginacion(1));
    }
    public function testPaginacionPage5(){
        $this->assertEquals(5,$this->op->paginacion(5));
    }
    public function testPaginacionPage0(){
        $this->assertEquals(1,$this->op->paginacion(0));
    }
    public function testPaginacionPageMenos1(){
        $this->assertEquals(1,$this->op->paginacion(-1));
    }
    public function TestDataApiNull(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->DataApi(null);
    }
    public function TestDataNotNull(){
        $this->assertNotNull($this->op->DataApi('{data:1, data:2}'));
    }
}


?>