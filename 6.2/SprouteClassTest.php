<?php
require_once 'SprouteClass.php';
class SprouteClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function スプラウトクラスをテスト()
    {
        $sc = new SprouteClass();

        $this->assertSame('2016-01-02', $sc->newMethod(new DateTime('2016-01-01')));
    }
}
