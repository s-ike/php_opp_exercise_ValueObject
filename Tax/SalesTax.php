<?php
namespace Tax;

class SalesTax
{
    private $enforcement_date;
    private $rate;

    public function __construct(\DateTime $date, float $rate)
    {
        if (! $this->isValidRate($rate)) {
            throw new \InvalidArgumentException('AmountExcludingTax class construct is only accepts positive integers. Input was: '.$rate);
        }
        $this->enforcement_date = $date;
        $this->rate = $rate;
    }

    /**
     * 有効な税率であるかを返す
     *
     * @param float $rate 税率
     *
     * @return bool
     */
    private function isValidRate(float $rate) :bool
    {
        return 0 <= $rate;
    }

    public function isAfterEnforcementDate(ContractDate $contract_date) :bool
    {
        return $this->enforcement_date <= $contract_date->date;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
