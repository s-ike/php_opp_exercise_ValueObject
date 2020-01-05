<?php
namespace Tax;

class SalesTaxRate
{
    private $rate;

    public function __construct(float $rate)
    {
        if (! $this->isValid($rate)) {
            throw new \InvalidArgumentException('AmountExcludingTax class construct is only accepts positive number. Input was: '.$rate);
        }
        $this->rate = $rate;
    }

    private function isValid(float $rate) :bool
    {
        return 0 <= $rate;
    }
}
