<?php
require_once 'Sale.php';
/**
 * 実装に対してではなく、インターフェースに対してプログラミングする
 * 擬装オブジェクト(FakeObject)を使用することで、ハードウェアなどの外部依存でテストしにくいところを切り離せる
 */
class SaleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 擬装オブジェクトを使ったテスト()
    {
        $display = new FakeDisplay();
        $sale = new Sale($display);
        $sale->scan('hoge');

        $expected = 'barcode: hoge';

        $this->assertSame($expected, $display->getLastLine());
    }

    /**
     * @test
     * PHPは、画面出力のテストができる
     */
    public function 擬装オブジェクトを使用せずにexpectOutputStringでテスト()
    {
        $display = new ArtR56Display();
        $sale = new Sale($display);
        $sale->scan('hoge');

        $expected = 'barcode: hoge';

        $this->expectOutputString($expected);
    }
}

class FakeDisplay implements Display
{
    private $lastLine;

    public function showLine($line)
    {
        $this->lastLine = $line;
    }

    public function getLastLine()
    {
        return $this->lastLine;
    }
}
