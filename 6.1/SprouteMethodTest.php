<?php
require_once 'SprouteMethod.php';
class SprouteMethodTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function スプラウトメソッドをテスト()
    {
        $sm = new SprouteMethod();

        $this->assertSame('2016-01-02', $sm->newMethod(new DateTime('2016-01-01')));
    }
}
