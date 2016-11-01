<?PHP
use PHPUnit\Framework\TestCase;
//include_once("../lib/user.php");
include "lib/user.php";
class UserTest extends TestCase
{
    public function testUser(){
        $newUser = new RegUser();
        $tester = $newUser::isUser("Testy2");
        //assertEquals(-1, $b->getAmount());
        $this->assertEquals($tester,false);
    }
    
    public function testInsertUser(){
        $newUser = new RegUser();
        $tester = $newUser::insertUser("Anita","1234","anitag@gmail.com","Anita",
        "Garcia",25,93901,"Consumer","None",2016);
        $this->assertEquals($tester,true);
    }
    
    public function testDeleteUser(){
        $newUser = new RegUser();
        $tester = $newUser::deleteUser("asdf");
        $this->assertTrue($tester);
    }
}
?>