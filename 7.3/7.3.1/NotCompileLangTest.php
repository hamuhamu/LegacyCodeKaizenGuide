<?php
require_once 'NotCompileLang.php';
class NotCompileLangTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function インターフェイスを用いてクラスを差し替えれること()
    {
        $dip = new HandleDIP(new DBEx(), new XMLEx());
        $this->assertTrue($dip instanceof HandleDIP);
    }

}

class DBEx implements DBInterface
{
    public function insert()
    {
        // 具体的な実装
    }
}

class XMLEx implements XMLInterface
{
    public function read()
    {
        // 具体的な実装
    }

    public function write()
    {
        // 具体的な実装
    }
}

