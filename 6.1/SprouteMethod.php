<?php
class SprouteMethod
{
    /**
     * ユニットテストをするのが難しいゴッドメソッド
     */
    public function godMethod()
    {
        /**
         * なんやら複雑な処理
         */
        $now = $this->newMethod(new DateTime(date('Ymd')));
        /**
         * なんやら複雑な処理
         */
    }

    /**
     * 新しく追加したメソッド
     * スプラウトメソッド
     *
     * 日付を1日加算しY-m-d形式で返す
     * テストを行うためpublicにしている
     *
     * @param DateTime $dateTime
     * @return string
     */
    public function newMethod(DateTime $dateTime)
    {
        $modified = $dateTime->modify('+1 day');

        return $modified->format('Y-m-d');
    }
}