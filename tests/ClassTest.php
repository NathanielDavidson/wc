<?php
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: nathanieldavidson
 * Date: 10/25/16
 * Time: 3:25 PM
 */
include "../lib/Boo.php";
class ClassTest extends TestCase
{
    public function testThisMethod()
    {
        // Arrange
        $a = new Boo();
        // Assert
        $this->assertEquals(1, 1);
    }
}