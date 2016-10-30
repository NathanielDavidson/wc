<?php
use PHPUnit\Framework\TestCase;
include_once("../lib/wineBottle.php");

class BottleTest extends TestCase
{
    //need to have the function begin with the word test!
    public function testInsert(){
        $bottleObject = new RegBottle();
        
        //$bottleObject::isUser("Anita");
        $tester = $bottleObject::insertBottle("TestProducer","TestWineName","1970", "WineStyleTest",
        "grapesTest","countryTest", "cityTest", "stateTest","regionTestCheck",89);
        //assertEquals(-1, $b->getAmount());
        $this->assertEquals($tester,true);
    }
    
    public function testDelete(){
        $bottleObject = new RegBottle();
        
        $tester = $bottleObject::deleteBottle("TestProducer","TestWineName","1970", "WineStyleTest",
        "grapesTest","countryTest", "cityTest", "stateTest","regionTest",89);
        
        $this->assertTrue($tester);
    }
    
    public function testRetrieveOne(){
        $bottleObject = new RegBottle();
        
        $tester = $bottleObject::retrieveBottle("Watervale");
        
        $this->assertEquals($tester,"Watervale");
    }
    
    //can't test this function until json_encode
    /*
    public function testRetrieveAll(){
        $bottleObject = new RegBottle();
        
        $tester = $bottleObject::retrieveAll();
        var_dump(json_decode($tester));
        $this->assertTrue(true);
    }
    */
    
}
?>