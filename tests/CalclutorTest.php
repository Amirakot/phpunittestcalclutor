<?php
use PHPUnit\Framework\TestCase;
require './Calcutor.php';
class CalclutorTest extends TestCase
{
    public function test_add(){
        $calc=new Calcutor();
       return $this->assertEquals($calc->add(2,2),4);
    }
      public function test_multiply(){
        $calc=new Calcutor();
       return $this->assertSame($calc->multiply(2,5),10);
    }
    public function test_sub(){
        $calc=new Calcutor();
       return $this->assertSame($calc->sub(5,2),3);
    }
}