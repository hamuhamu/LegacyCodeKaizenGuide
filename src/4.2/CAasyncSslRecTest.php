<?php
require_once 'CAasyncSslRec.php';
class CAasyncSslRecTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 接合部を使って依存関係を排除したテスト()
    {
        $obj = new FakeCAasyncSslRec();
        $this->assertTrue($obj->init());
    }
}

class FakeCAasyncSslRec extends CAasyncSslRec
{
    protected function PostReceiveError($type, $errorCode)
    {

    }
}
