<?php
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: nathanieldavidson
 * Date: 10/25/16
 * Time: 3:25 PM
 */
include "../lib/Class.php";
class ClassTest extends TestCase
{
    public function testThisMethod()
    {
        // Arrange
        $a = new Class();
        // Assert
        $this->assertEquals("werewolf", $a->pop());
    }
}