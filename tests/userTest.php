<?PHP
use PHPUnit\Framework\TestCase;
include_once("../lib/user.php");

class UserTest extends TestCase
{
    public function testUser(){
        $poplockndropit = new RegUser();
        //$poplockndropit::isUser("Anita");
        $tester = $poplockndropit::isUser("Anita");
        //assertEquals(-1, $b->getAmount());
        $this->assertEquals($tester,true);
    }
}
?>