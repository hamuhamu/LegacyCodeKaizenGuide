<?php
class Employee
{
    private $timeCards;
    public function pay()
    {
        /**
         * 支払い処理
         */
        $amount = new Amount();
        foreach ($this->timeCards as $timeCard) {
            $amount->add($timeCard);
        }

        /**
         * ロギングが機能追加された
         * このように機能が追加され続けると辛くなる
         */
        Logger::log($amount);
    }

}

class WrapMethodOfEmployees
{
    private $timeCards;

    /**
     * payメソッドがラップメソッド
     */
    public function pay()
    {
        $amount = $this->calcPay();
        $this->loggingAmount($amount);
    }

    private function calcPay()
    {
        $amount = new Amount();
        foreach ($this->timeCards as $timeCard) {
            $amount->add($timeCard);
        }

        return $amount;
    }

    private function loggingAmount(Amount $amount)
    {
        Logger::log($amount);
    }


}

