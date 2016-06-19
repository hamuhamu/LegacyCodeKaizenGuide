<?php
interface Payable
{
    /**
     * 支払いを行う
     */
    public function pay();
}

class Employee implements Payable
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

        return $amount;
    }

}

/**
 * ラップクラス
 */
class LoggingEmployees implements Payable
{
    private $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function pay()
    {
        $amount = $this->employee->pay();
        $this->loggingAmount($amount);
    }

    private function loggingAmount(Amount $amount)
    {
        Logger::log($amount);
    }
}
